<?php
session_start() ; 
header("Access-Control-Allow-Origin: *");
$servername = "localhost";

require_once '../class/path_config.php' ; 
require_once '../class/DatabaseHandler.php' ; 


$id_sha1_projet = time() ; 
$title_user = $_POST["title_user"] ; 
$description_user = $_POST["description_user"] ; 


$onkeyup_action_name = $_POST["onkeyup_action_name"] ; 
switch ($onkeyup_action_name) {
    case "user_onkeyup":
 
   
   
  $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->action_sql("UPDATE  $config_dbname SET `title_user` = '".$title_user."' , `description_user`='".$description_user."' WHERE  `id_user` = 1;") ;



      break;
 
  }




?>