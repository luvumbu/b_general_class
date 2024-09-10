
<?php
session_start() ; 
header("Access-Control-Allow-Origin: *");
$servername = "localhost";

require_once '../class/path_config.php' ; 
require_once '../class/DatabaseHandler.php' ; 
require_once '../class/AsciiConverter.php' ; 



 
 $heure_debut_projet =  $_POST["heure_debut_projet"] ; 
 $date_debut_projet =  $_POST["date_debut_projet"] ; 
 $heure_fin_projet =  $_POST["heure_fin_projet"] ; 
 $date_fin_projet =  $_POST["date_fin_projet"] ; 

 $id_projet =  $_POST["id_projet"] ; 





$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->action_sql('UPDATE  `projet` SET `heure_debut_projet` = "'.$heure_debut_projet.'",`date_debut_projet` = "'.$date_debut_projet.'",`heure_fin_projet` = "'.$heure_fin_projet.'",`date_fin_projet` = "'.$date_fin_projet.'"   WHERE  `id_projet` = "'.$id_projet.'"') ;
 


 



?>