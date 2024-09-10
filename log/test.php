<?php
header("Access-Control-Allow-Origin: *");

require_once '../class/AsciiConverter.php' ; 
$servername = "localhost";
$username =$_POST["login"] ;
$password =$_POST["password"] ;
 
 



$xx=  AsciiConverter::stringToAscii($username); // Affiche "72,101,108,108,111"


echo AsciiConverter::asciiToString($xx); // Affiche "Hello"

?>