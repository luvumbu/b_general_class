<?php 


//var_dump($_SESSION["session_general"]);
 


$req_sql= "SELECT * FROM `$config_dbname` WHERE `id_user` ='".$_SESSION["session_general"][0]."' " ;  




 

 

$databaseHandler = new DatabaseHandler($config_dbname,$config_password);
$databaseHandler->getDataFromTable($req_sql, "description_user");
$description_user = $databaseHandler->tableList_info;

$databaseHandler = new DatabaseHandler($config_dbname,$config_password);
$databaseHandler->getDataFromTable($req_sql, "title_user");
$title_user = $databaseHandler->tableList_info;

$databaseHandler = new DatabaseHandler($config_dbname,$config_password);
$databaseHandler->getDataFromTable($req_sql, "img_user");
$img_user = $databaseHandler->tableList_info;
 
 

?>

<div class="card">
  <h2>
  <input name="user_onkeyup" placeholder="Titre"  id="<?php echo 'user_onkeyup_input' ?>" onkeyup="onkeyup_action(this)" type="text" placeholder=" About Me" class="root_input_1" value="<?php  echo $title_user[0] ?>">
 </h2>
 

 <div onclick="img_user_action(this)" class="user_log" title="user_log">
 <?php 
if($img_user[0]==""){
echo ' <div class="fakeimg" style="height:100px;"></div>' ;  




}
else {


  $path = 'img_user_action/'.$img_user[0];
  
if (checkFileExists($path)) {
//    echo "The file exists.";
} else {


  require_once 'update/checkFileExists_img.php' ;
?>
<script>
  location.reload();
</script>
<?php 

  
}
  ?>
<img  style="width: 100%;" src="<?php echo 'img_user_action/'.$img_user[0] ?>" alt="" srcset="">
  <?php 
}
 ?>

</div>
  <textarea placeholder="Déscription" name="user_onkeyup"  id="<?php echo 'user_onkeyup_textarea' ?>" onkeyup="onkeyup_action(this)" class="root_input_2" id=""><?php  echo $description_user[0]?></textarea>
</div>



<style>
  .root_input_1,
  .root_input_2{
       width: 100% ;
       border:1px solid rgba(0,0,0,0) ; 
  }
  .root_input_2{
    height: 150px;
    margin-top:15px ; 
  }
</style>
<script>

  var  onkeyup_action_bool = 1; 
  var  onkeyup_action_bool2 = false; 

  function onkeyup_action(_this) {




   
   


    const myTimeout = setTimeout(myGreeting, 500);
  


    
 function deux_a(){
   onkeyup_action_bool2 = false ; 
   
   console.log(_this.name)  ; 

switch (_this.name) {
case "user_onkeyup":


  


var user_onkeyup_input = document.getElementById("user_onkeyup_input") ;  
var user_onkeyup_textarea = document.getElementById("user_onkeyup_textarea") ; 


console.log(user_onkeyup_input.value);
console.log(user_onkeyup_textarea.value) ; 




var ok = new Information("update/onkeyup_action.php"); // création de la classe 
ok.add("onkeyup_action_name", _this.name); // ajout de l'information pour lenvoi 
ok.add("title_user", user_onkeyup_input.value); // ajout d'une deuxieme information denvoi  
ok.add("description_user", user_onkeyup_textarea.value); // ajout d'une deuxieme information denvoi  






//console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 





break; 
}


onkeyup_action_bool = true ; 
 }

function myGreeting() {


  
 




 
 
 if(onkeyup_action_bool2==false){
 
  onkeyup_action_bool2 = true ; 
  const deux = setTimeout(deux_a, 500);
 }
 



 
/*

 

   

*/
}
 







  }

  function img_user_action(_this) {
    console.log(_this.title) ; 

var ok = new Information("cookie/img_user_action.php"); // création de la classe 
 
ok.add("cookie_img", _this.className); // ajout d'une deuxieme information denvoi  
ok.add("cookie_title", _this.title); // ajout d'une deuxieme information denvoi  

console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 

 
  


  

const myTimeout = setTimeout(myGreeting, 250);

function myGreeting() {
  window.location.replace("img_user_action/index.php");
}


  }
</script>