<?php

require(INCLUDES.'config/connect.php');

if(MYSQL == 'On'):
	try{
	$bdd = new PDO('mysql:host='.HOST.';dbname='.DBNAME, USER, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8')) or die(print_r($bdd->errorInfo()));
	$bdd->exec('SET NAMES utf8');
	}
	
	catch(Exeption $e){
	die('Erreur:'.$e->getMessage());
	}
endif;