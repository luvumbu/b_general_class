<?php



$req_sql = 'SELECT * FROM `' . $input_1 . '` WHERE `nom_user`="' . $input_1 . '"  AND `password_user` ="' . $input_2 . '" ';
$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "social_media_id_sha1");



$databaseHandler = new DatabaseHandler($input_1, $input_2);
$databaseHandler->getDataFromTable($req_sql, "id_user");
$id_user = $databaseHandler->tableList_info;

$databaseHandler = new DatabaseHandler($input_1, $input_2);
$databaseHandler->getDataFromTable($req_sql, "id_sha1_user");
$id_sha1_user = $databaseHandler->tableList_info;

$databaseHandler = new DatabaseHandler($input_1, $input_2);
$databaseHandler->getDataFromTable($req_sql, "id_parent_user");
$id_parent_user = $databaseHandler->tableList_info;

$databaseHandler = new DatabaseHandler($input_1, $input_2);
$databaseHandler->getDataFromTable($req_sql, "description_user");
$description_user = $databaseHandler->tableList_info;

$databaseHandler = new DatabaseHandler($input_1, $input_2);
$databaseHandler->getDataFromTable($req_sql, "title_user");
$title_user = $databaseHandler->tableList_info;

$databaseHandler = new DatabaseHandler($input_1, $input_2);
$databaseHandler->getDataFromTable($req_sql, "img_user");
$img_user = $databaseHandler->tableList_info;

$databaseHandler = new DatabaseHandler($input_1, $input_2);
$databaseHandler->getDataFromTable($req_sql, "nom_user");
$nom_user = $databaseHandler->tableList_info;

$databaseHandler = new DatabaseHandler($input_1, $input_2);
$databaseHandler->getDataFromTable($req_sql, "prenom_user");
$prenom_user = $databaseHandler->tableList_info;

$databaseHandler = new DatabaseHandler($input_1, $input_2);
$databaseHandler->getDataFromTable($req_sql, "password_user");
$password_user = $databaseHandler->tableList_info;

$databaseHandler = new DatabaseHandler($input_1, $input_2);
$databaseHandler->getDataFromTable($req_sql, "email_user");
$email_user = $databaseHandler->tableList_info;

$databaseHandler = new DatabaseHandler($input_1, $input_2);
$databaseHandler->getDataFromTable($req_sql, "date_inscription_user");
$date_inscription_user = $databaseHandler->tableList_info;


echo $date_inscription_user[0] ; 
 

if (count($databaseHandler->tableList_info) > 0) {


     $_SESSION["session_log"] = time();

          $_SESSION["session_general"] = array() ;  


          array_push($_SESSION["session_general"],
               $id_user[0],
               $id_sha1_user[0],
               $id_parent_user[0],
               $description_user[0],
               $title_user[0],

               $img_user[0],
               $nom_user[0],
               $prenom_user[0],
               $password_user[0],
               $email_user [0],
               $date_inscription_user[0] 
               
               ) ; 

} else {

     echo  count($databaseHandler->tableList_info);
}
