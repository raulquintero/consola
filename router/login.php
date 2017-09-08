<?php

switch ($q) {


    case "/login.html":

        $focusto = "user_name";
        $template = "loginEmail";
        break;
    case "/locked":
        $focusto = "user_name";
        $template = "more-locked";
        break;
    case "/auth":
        $fn = $uri[1];

        switch ($fn) {
            case 'logout':
                $Login->logOut();
                $location = "Location: /";
                break;
            case '1':
                $focusto = "user_pass";
                $username = $Data->string("user_name", "post");
                $_SESSION['username'] = $username;
                $template = "loginPassword";
                break;
            case '2':
                $userpass = $Data->string("user_pass", "post");
                $query = "SELECT usuario_id, email, token, token_date,menu as portada from usuario,person, menu "
                        . "where email='" . $_SESSION['username'] . "' AND password='" . sha1($userpass) . "' "
                        . "AND person.person_id=usuario.person_id  AND usuario.portada_id=menu.menu_id limit 1";

                list($uid, $email, $token, $token_date, $portada) = $Database->get_row($query);
                $hora1 = strtotime($token_date);
                $hora2 = strtotime(date("Y-m-d H:i:s"));
                if ($hora1 > $hora2) {
                    $_SESSION['error'] = USUARIO_CONECTADO;
                    $location = "Location: /login.html";
                } else
                if ($uid) {
                    # Setting login session:
                    $Login->setLoginSession($_SESSION['username'], $userpass);
                    $location = "Location: /" . $portada;
                    $_SESSION['m'] = "Bienvenido ";
                } else {
                    $template = "loginEmail";
                    $_SESSION['error'] = PASSWORD_INCORRECTO;
                } 

                break;
        }
}