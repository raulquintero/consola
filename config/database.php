<?php

switch (ENVIRONMENT) {
	case 'PRODUCTION':
		define( 'DB_HOST', 'localhost' ); // set database host
		define( 'DB_USER', 'root' ); // set database user
		define( 'DB_PASS', '1234' ); // set database password
		define( 'DB_NAME', 'cibercomm' ); // set database name

		define( 'DB_HOST_STORE', 'localhost' ); // set database host
		define( 'DB_USER_STORE', 'root' ); // set database user
		define( 'DB_PASS_STORE', '1234' ); // set database password
		define( 'DB_NAME_STORE', 'speimx' ); // set database name
		break;
	case 'DEV':
		define( 'DB_HOST', 'localhost' ); // set database host
		define( 'DB_USER', 'root' ); // set database user
		define( 'DB_PASS', 'despachado16' ); // set database password
		define( 'DB_NAME', 'cibercomm' ); // set database name
		
		define( 'DB_HOST_STORE', 'localhost' ); // set database host
		define( 'DB_USER_STORE', 'root' ); // set database user
		define( 'DB_PASS_STORE', '1234' ); // set database password
		define( 'DB_NAME_STORE', 'speimx' ); // set database name
		break;
		
}

define( 'DB_PROVIDER', 'MySqlProvider' ); // set database host
define( 'SEND_ERRORS_TO', '' ); //set email notification $
define( 'DISPLAY_DEBUG', true ); //display db errors?


