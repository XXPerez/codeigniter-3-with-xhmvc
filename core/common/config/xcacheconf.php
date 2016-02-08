<?php

$config['cache_enabled'] = TRUE;

$config['cache_type'] = 'file'; // file or memcache 
$config['cache_compress'] = true; // tru / false

$config['cache_memcache'] = '127.0.0.1:11211'; // Only for cache_type = 'memcache'

if (defined('APPPATH'))
	$config['cache_path'] = APPPATH.'../cache/';
else
	$config['cache_path'] = __DIR__.'/../../cache/';


// Cookie control for logged and get parameters for page cache
$config['cache_logged_cookie'] = 'isloggedcookie';
$config['cache_only_not_logged_pages'] = FALSE;
$config['cache_get'] = TRUE;


// Page cache group
$config['cache_pages'] = array (
                'default' => FALSE,
                'pageexpr' => array(
					'^/$' => array('welcome',300,''),
		    ), 
	);

// Query cache group
$config['cache_dbquery'] = array (
                'default' => 0,
				'MyQueryGroup' => 60,
				'GetTest' => 60,
	);

// Methods cache group
$config['cache_methods'] = array (
                'default' => 300,
		'Welcome_model_testdb' => 30, // See demo4/welcome/testdb
	);

// Views cache group
$config['cache_views'] = array (
                'default' => 30,
	);

