<?php
namespace App\Config;

class DatabaseConfig {
	public static $default = array(
		'persistent'	=> 'false',
		'host'			=> 'localhost',
		'user'			=> 'root',
		'password'		=> '1234',
		'dbname'		=> 'cibercomm',
		'prefix'		=> ''
	);

	public static $master = array(
		'persistent'	=> 'false',
		'host'			=> 'localhost',
		'user'			=> 'root',
		'password'		=> '1234',
		'dbname'		=> 'cibercomm_master',
		'prefix'		=> ''
	);

	


}