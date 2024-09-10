<?php
session_start();
header("Access-Control-Allow-Origin: *");
$servername = "localhost";

require_once '../class/path_config.php';
require_once '../class/DatabaseHandler.php';




$id_group = $_POST["id_group"];
$name_group = $_POST["name_group"];

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->action_sql('UPDATE `group_projet` SET `name_group` = "'.$name_group.'" WHERE  `id_group` = "'.$id_group.'"');
