<?php
	require_once('database.php');
	$ftp = array(
		'username' => 'tm@tp2.whcb.co.za',
		'password' =>'0717253112',
		'dirctory' => 'public_html/tp2.whcb.co.za/'
		);
	//tp2.whcb.co.za
	//server ip v 149.202.195.2
	$liveDatabase = array(
		'server' =>'cpanel.sawebdesignhosting.co.za',
		'username' => 'sawebdes_global',
		'password' =>'Brk1991_',
		'dbname' =>'sawebdes_pm'
	);

	$localDatabase = array(
		'server' =>'127.0.0.2',
		'username' => 'root',
		'password' =>'',
		'dbname' =>'tp-2'
	);

	$db = new mysql_database(
			$localDatabase['server'],
			$localDatabase['username'],
			$localDatabase['password'],
			$localDatabase['dbname']);

