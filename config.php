<?php
return [
	/*Database Access */
	'database' => [
		'driver'	=> 'mysql',
		'host'		=> 'localhost',
		'database'	=> 'bajasoft',
		'username'	=> 'root',
		'password'	=> '',
		'charset'	=> 'utf8',
		'collation'	=> 'utf8_unicode_ci',
		'prefix'	=> '',
	],

	/*Session configuration */
	'session-time'	=> 10,  //hours
	'session-name'	=> 'application-auth',

	/*secret key */
	'secret-key'	=> '@dfer934.er*',

	/*Enviroment */
	'environment'	=> 'dev', //Options: dev, prod, stop

	/*Timezone */
	'timezone'	=> 'America/Tijuana',

	/* Cache */
	'cache'	=> false

];







