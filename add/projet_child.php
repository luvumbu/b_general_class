<?php

session_start() ; 
header("Access-Control-Allow-Origin: *");
require_once '../class/path_config.php' ;
require_once '../class/DatabaseHandler.php' ; 


$id_sha1_projet_child = time() ; 
$id_sha1_projet =  $_POST["id_sha1_projet"] ; 
$id_sha1_parent_projet_child = $_POST["id_sha1_projet"] ; 
$id_parent_projet_child = $_POST["id_projet"] ; 
 
$id_user_projet = $_SESSION["session_general"][0] ;
$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->action_sql("INSERT INTO `projet_child` (`id_user_projet_child`,`id_sha1_projet_child`,`id_sha1_parent_projet_child`,`id_parent_projet_child`) VALUES ('$id_user_projet','$id_sha1_projet_child','$id_sha1_parent_projet_child','$id_parent_projet_child');") ;
 

?>