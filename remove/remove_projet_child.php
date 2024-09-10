<?php
session_start() ; 
header("Access-Control-Allow-Origin: *");
$servername = "localhost";

require_once '../class/path_config.php' ; 
require_once '../class/DatabaseHandler.php' ; 

 
 
 
 
 $id_projet_child = $_POST["id_projet_child"] ; 

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->action_sql("DELETE FROM  `projet_child` WHERE   `id_projet_child` = '$id_projet_child'") ;





?>