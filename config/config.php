<?php 

use Core\{Db,Menu};
use App\Config\DatabaseConfig;

define ("DIR_SOURCE" , __DIR__.'/../src/');
define ("DIR_BASE", __DIR__.'/..');
define ("SECRET" ,'u9=bIAy^nY[N^"R*');

// if (empty($_SERVER['HTTPS'])) {
//     header('Location: https://consola.bajasoft.com');
//     exit;
// }

session_start();


//variables
$empresa="Cibercomm";
$iva=16;
$layout_topbar=" data-layout-topbar='fixed'";

$isLocked = FALSE;

require_once DIR_BASE.'/locales/es_MX/locale.php' ;
require_once DIR_BASE.'/config/environment.php' ;

require_once DIR_BASE.'/config/mensajes.php' ;
// require_once DIR_BASE.'/config/database.php' ;
require_once DIR_BASE.'/config/personalsettings.php';

require_once DIR_BASE.'/vendor/autoload.php';






define ("DIR_TEMPLATES" , __DIR__.'/../templates/'.$template_base);



// $Database = new DB(DB_HOST,DB_USER,DB_PASS,DB_NAME);
$Database = new DB(DatabaseConfig::$default);
$Menu = new Menu($Database);

require_once DIR_BASE.'/router/routes.php';





