<?php	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['redis_server'] = array(
		'host'     => '127.0.0.1',
		'port'     => 6379,
		'database' => 0
);

/* $config['redis_multiple_servers'] = array(
    array(
       'host'     => '127.0.0.1',
       'port'     => 6379,
       'database' => 15,
       'alias'    => 'first',
    ),
    array(
       'host'     => '127.0.0.1',
       'port'     => 6380,
       'database' => 15,
       'alias'    => 'second',
    ),
); */
?>
