<?php
session_start() ; 
header("Access-Control-Allow-Origin: *");
$servername = "localhost";

require_once '../class/path_config.php' ; 
require_once '../class/DatabaseHandler.php' ; 


 

echo $session_id_projet ;
 
$id_projet = $_POST["id_projet"] ; 
 



$group_projet = $_POST["group_projet"] ; 
 

 
   
$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->action_sql('UPDATE `projet` SET `group_projet` = "'.$group_projet.'"  WHERE `id_projet` ='.$id_projet.'') ;
 


 




?>