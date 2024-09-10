<?php
session_start() ; 
header("Access-Control-Allow-Origin: *");
$servername = "localhost";

require_once '../class/path_config.php' ; 
require_once '../class/DatabaseHandler.php' ; 



$session_id_projet =  $_SESSION['session_id_projet'];
$session_name_group =  $_SESSION['session_name_group'];
$session_id_group =  $_SESSION['session_id_group'];


echo $session_id_projet ;
 
   
$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->action_sql('UPDATE `projet` SET `group_projet` = "'.$session_id_group.'"  WHERE `id_projet` ='.$session_id_projet.'') ;



 




?>