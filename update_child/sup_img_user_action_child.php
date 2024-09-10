<?php
session_start() ; 
header("Access-Control-Allow-Origin: *");
$servername = "localhost";

require_once '../class/path_config.php' ; 
require_once '../class/DatabaseHandler.php' ; 
require_once '../class/Delete_file.php' ; 



 
 $img_projet_child_src  = $_POST["img_projet_child_src"] ; 
 
 

   $file_path = "../img_user_action/".$img_projet_child_src ;
   delete_file($file_path);



   /*
$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->action_sql('DELETE FROM  `projet_child` WHERE  `id_projet_child` = "'.$id_projet_child.'"') ;
*/


 




?>