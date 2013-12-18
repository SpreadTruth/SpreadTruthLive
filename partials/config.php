<?php

/*
/
/ SETUP CONFIGURATIONS 
/
*/

$config["dev"] = array(
	"base_url" => "localhost:8888/test/st/dist/",
	"asset_url" => "localhost:8888/test/st/dist/img"
	);

$config["dist"] = array(
	"base_url" => "http://spreadtruth.com",
	"asset_url" => "http://spreadtruth.com/img"
	);


$config["global"] = array(
	"site_name" => "Spread Truth",
	"page_title" => "SpreadTruth.com",
	"page_description" => 'Resources, Training and Experiences for the Church'
	);


/*
/
/ CHECK FOR LOCAL DEVELOPMENT
/
*/

$environment = 'dist';

$serverList = array('localhost', '127.0.0.1', '::1');
if(in_array($_SERVER['REMOTE_ADDR'], $serverList)) {
	$environment = 'dev';
}


/*
/
/ CONCAT THE CONFIG VARIABLES INTO $CFG
/
*/

$cfg = array_merge($config['global'], $config[$environment]);



?>