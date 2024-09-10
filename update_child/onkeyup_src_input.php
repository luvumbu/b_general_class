<?php
session_start() ; 
header("Access-Control-Allow-Origin: *");
$servername = "localhost";

require_once '../class/path_config.php' ; 
require_once '../class/DatabaseHandler.php' ; 
require_once '../class/AsciiConverter.php' ; 


 $id_projet_child = $_POST["id_projet_child"]  ; 
 $title_projet_child = $_POST["title_projet_child"]  ; 
 $description_projet_child = $_POST["description_projet_child"]  ; 
 $name_projet_child = $_POST["name_projet_child"]  ; 




$title_projet_child = AsciiConverter::stringToAscii($title_projet_child); // Affiche "72,101,108,108,111"
$description_projet_child = AsciiConverter::stringToAscii($description_projet_child); // Affiche "72,101,108,108,111"
$name_projet_child = AsciiConverter::stringToAscii($name_projet_child); // Affiche "72,101,108,108,111"
 





$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->action_sql('UPDATE `projet_child` SET `name_projet_child` = "'.$name_projet_child.'" ,`title_projet_child` = "'.$title_projet_child.'", `description_projet_child` = "'.$description_projet_child.'" WHERE `id_projet_child` = "'. $id_projet_child.'"') ;
 


 



?>