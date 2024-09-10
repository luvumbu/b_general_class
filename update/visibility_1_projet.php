<?php
session_start() ; 
header("Access-Control-Allow-Origin: *");
 

require_once '../class/path_config.php' ; 
require_once '../class/DatabaseHandler.php' ; 
require_once '../class/AsciiConverter.php' ; 


 
 $visibility_1_projet = $_POST["visibility_1_projet"] ; 

$id_projet = $_POST["id_projet"] ; 

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->action_sql('UPDATE `projet` SET `visibility_1_projet` = "'.$visibility_1_projet.'" WHERE  `id_projet` = "'.$id_projet.'"') ;
 


 



?>