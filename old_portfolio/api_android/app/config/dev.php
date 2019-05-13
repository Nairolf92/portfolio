<?php

// Doctrine (db)
$app['db.options'] = array(
	'driver'   => 'pdo_mysql',
	'charset'  => 'utf8',
	'host'     => 'mysql.hostinger.fr',  // Mandatory for PHPUnit testing
	'port'     => '',
	'dbname'   => 'u849663555_api',
	'user'     => 'u849663555_oliv',
	'password' => '',
);

// enable the debug mode
$app['debug'] = true;