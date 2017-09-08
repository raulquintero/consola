<?php

namespace Core;

class Login {

    private $database;
    private $databaseUsersTable;
    private $showMessage;
    private $cryptMethod;


 

 

    function Login(DB $db) {

    $this->database = $db;

        // server should keep session data for AT LEAST 1 hour
        ini_set("session.cookie_lifetime", "14400");
        ini_set("session.gc_maxlifetime", "14400");
        session_start();
        if (!isset($_SESSION)) {
            $_SESSION['user_login_session'] = false;
        }
    }

   
 
    /**

     * Sets the crypting method

     *

     * @param string $crypt_method - You can set it as 'md5' or 'sha1' to choose the crypting method for the user password.

     */
    public function setCryptMethod($crypt_method) {

        $this->cryptMethod = $crypt_method;
    }

    /**

     * Crypts a string

     *

     * @param string $text_to_crypt -  crypt a string if $this->cryptMethod was defined.

     * If not, the string will be returned uncrypted.

     */
    public function setCrypt($text_to_crypt) {

        switch ($this->cryptMethod) {

            case 'md5': $text_to_crypt = trim(md5($text_to_crypt));
                break;

            case 'sha1': $text_to_crypt = trim(sha1($text_to_crypt));
                break;
        }

        return $text_to_crypt;
    }

    /**

     * Anti-Mysql-Injection method, escapes a string.

     *

     * @param string $text_to_escape

     */
    static public function setEscape1($text_to_escape) {

        if (!get_magic_quotes_gpc())
            $text_to_escape = $this->database->filter($text_to_escape);

        return $text_to_escape;
    }

    /**

     * If on true, displays class messages.

     *

     * @param boolean $database_user_table

     */
    public function setShowMessage($login_show_message) {

        if (is_bool($login_show_message))
            $this->showMessage = $login_show_message;
    }

    public function setDatabaseUsersTable($table) {

        $this->database_user_table = $table;
    }

    /**

     * Prints the class messages with a customized style if html tags are defined.

     *

     * @param string $message_text - the message text

     * @param string $message_html_tag_open - the html tag placed before the text

     * @param string $message_html_tag_close - the html tag placed after the text

     * @param boolean $message_die - if on true die($message_text);

     */
    public function getMessage($message_text, $message_html_tag_open = null, $message_html_tag_close = null, $message_die = false) {

        if ($this->showMessage) {

            if (!$message_die)
                die($message_text);
            else
                echo $message_html_tag_open . $message_text . $message_html_tag_close;
        }
    }

    /**

     * If the user name and password sent via $ _POST method, are in the database, sets login sessions. Else, displays an error message.

     *

     * The user form data needed is: user_name and user_pass

     */
    public function setLoginSession($user, $pass) {
        if (!$this->databaseUsersTable) {
            $this->getMessage('Users table in the database is not specified. Please specify it before any other operation using the method setDatabaseUsersTable();', '', '', 'true');
        }
        $this->databaseUsersTable;

        crypto64::encode("hola", "nuevo"); /// ejemplo para llamar un metodo de otra clase
        $user_name = $user;
        $user_pass = $pass;

        $user_pass = $this->setCrypt($user_pass);

        $result = "SELECT usuario_id,nombre, apellidop,apellidom, email, activo
              FROM person,usuario
              WHERE email='$user_name' AND password='$user_pass' AND token_date<=now() and person.person_id=usuario.person_id";
        list($usuario_id, $name, $firstname, $lastname, $email, $activo) = $this->database->get_row($result);
        if ($activo) {
            $token = sha1(date("YmdHi") . $usuario_id);
            $fecha = date("Y-m-d H:i:s");
            $nuevafecha = strtotime('+15 minute', strtotime($fecha));
            $token_date = date('Y-m-d H:i:s', $nuevafecha);

            $update = array(
                'token' => $token,
                'token_date' => $token_date
            );

            //Add the WHERE clauses
            $where_clause = array(
                'usuario_id' => $usuario_id
            );
            $updated = $this->database->update('usuario', $update, $where_clause, 1);


            //$_SESSION['usuario_id'] = $usuario_id;
            $_SESSION['token'] = $token;
//          setcookie("token", $token, time() + (86400 * 1), "/"); // 86400 = 1 day
            //$_SESSION['name']=$name.' '.$firstname;
            // $_SESSION['store_id']=1;

            $_SESSION['user_login_session'] = TRUE;
            $this->loadPrivilegios("admin");
        } else {

            $this->getMessage('Access data entered is incorrect.');
            echo "error:";
        }
    }

    public function getUsuarioId() {
        $result = "SELECT usuario_id
                    FROM usuario
                    WHERE token='" . $_SESSION['token'] . "' AND token_date>=now()";

        list($usuario_id) = $this->database->get_row($result);
        // if($_SESSION['user_login_session']) 
        return $usuario_id;
    }

    public function newToken() {


        $usuario_id = $this->getUsuarioId();
/// renovar token con cada llamada por 15 minutos
        if ($usuario_id) {
            $token = sha1(date("YmdHis") . $usuario_id);
            $fecha = date("Y-m-d H:i:s");
            $nuevafecha = strtotime('+15 minute', strtotime($fecha));
            $token_date = date('Y-m-d H:i:s', $nuevafecha);
            $update = array(
                'token' => $token,
                'token_date' => $token_date
            );

            //Add the WHERE clauses
            $where_clause = array(
                'usuario_id' => $this->getUsuarioID()
            );
            $updated = $this->database->update('usuario', $update, $where_clause, 1);
            if ($updated)
                $_SESSION['token'] = $token;
            //setcookie("token", $token, time() + (86400 * 1), "/"); // 86400 = 1 day
        }
    }

    public function loadPrivilegios($user_name) {
        //echo "admin: ".$user_name;
        if ($user_name == 'admin') {
            $query = "SELECT privilegio_id from menu where 1";
            $results = $this->database->get_results($query);
            foreach ($results as $sub) {
                echo $privilegios[] = $sub['privilegio_id'];
            }
        } else
            $privilegios = array(2, 16, 43, 17, 19, 20, 18, 21);

        $_SESSION['privilegios'] = $privilegios;
    }

    public function limpiar($str) {
        return preg_replace("@([^a-zA-Z0-9\+\-\_\*\@\$\!\;\.\?\#\:\=\%\/\ ]+)@Ui", "", $str);
    }

    /**

     * Gets login session, true or false.

     */
    public function getLoginSession() {
        //$userloginsession = $_SESSION['user_login_session'];
        if (isset($_SESSION['user_login_session']))
            return true;
        else
            return false;
    }

    /**

     * When called, it destroys login session.

     * 

     * Logout method

     */
    public function logOut() {

        $status = 0;
        $fecha_hoy = date("Y-m-d 00:00");
        $token = $_SESSION['token'];
        $update = array(
            'token' => 0,
            'token_date' => $fecha_hoy
        );

        //Add the WHERE clauses
        $where_clause = array(
            'token' => $token
        );
        $updated = $this->database->update('usuario', $update, $where_clause, 1);
        // echo $fecha_hoy." ". (int)$_SESSION['cliente_id'];
        if ($updated) {
            unset($_SESSION['username']);
            unset($_SESSION['token']);
            unset($_SESSION['name']);
            unset($_SESSION['privilegios']);
            unset($_SESSION['user_login_session']);
            unset($_SESSION['m']);
            $status = 1;
        }

        return $status;
    }

    /**

     * Get person_id if login session is true.
     */
    public function isLogged() {
       $result = "SELECT usuario_id,token
                    FROM usuario
                    WHERE token='" . $_SESSION['token'] . "' AND token_date>=now()";

        list($usuario_id, $token) = $this->database->get_row($result);
        
        if ($usuario_id) {
           
            $status = TRUE;
        } else {
            $status = FALSE;
        }

        return $status;
    }

    public function getUserActive() {

        $result = "SELECT activo
                    FROM usuario
                    WHERE usuario_id='" . $this->getUsuarioID() . "'";

        list($activo) = $this->database->get_row($result);
        return $activo;
    }

    public function showError($e) {
        $m = "
        <div id='main'>
          <div class='container-fluid'>
          <div class='page-header'>
            <br>
              

              <br><br>

              <div class='alert alert-danger alert-dismissable'>
                      <button type='button' class='close' data-dismiss='alert'>×</button>
                      <strong>Error  </strong> $e
                    </div>
            </div>
          
        </div>
        </div>

        ";

        return $m;
    }

    /**
      Fin de la Clase
     */
}
