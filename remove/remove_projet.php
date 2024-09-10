<?php
session_start() ; 
header("Access-Control-Allow-Origin: *");
$servername = "localhost";

require_once '../class/path_config.php' ; 
require_once '../class/DatabaseHandler.php' ; 

$id_projet = $_POST["id_projet"] ; 
 
 
 
$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->action_sql("DELETE FROM `projet` WHERE  `id_projet` = '$id_projet'") ;


$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->action_sql("DELETE FROM  `projet_child` WHERE   `id_parent_projet_child` = '$id_projet'") ;





?>