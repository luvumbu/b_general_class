<link rel="stylesheet" href="css/style_blog_3_2.css">
<link rel="stylesheet" href="css/style_blog_3.css">
<link rel="stylesheet" href="css/form_event.css">






<div class="class_t">
    <?php


    require_once 'mysq_req/style_blog_3_req_1.php';

 



    for ($a = 0; $a < count($id_sha1_projet); $a++) {




        require 'mysq_req/style_blog_3_req_2.php';





        $valeur_a_chercher = $group_projet[$a];

        $resultat = chercherIndex($id_group, $valeur_a_chercher);








        $resultat = chercherIndex($id_group, $valeur_a_chercher);





    ?>






 <b>
    <div class="id_p">
    ID :<?php echo $id_sha1_projet[$a]  ?>
</div>
 </b>
        <div class="card">


            <input type="text" value="<?php echo $title_projet_; ?>" onkeyup="style_blog_3_2_up(this)" title="<?php echo  $id_projet[$a] ?>" id="<?php echo  't_' . $id_projet[$a] ?>" placeholder="MON TITRE" class="title_projet">
            <input type="text" style="opacity: 0.3;" value="<?php echo $description_projet_; ?>" onkeyup="style_blog_3_2_up(this)" title="<?php echo  $id_projet[$a] ?>" id="<?php echo  'h_' . $id_projet[$a] ?>" placeholder="autre element" class="title_projet">

            <input type="text" id="<?php echo  "name_group_" . $id_projet[$a] ?>" title="<?php echo  $id_projet[$a] ?>" id="<?php echo  'h_' . $id_projet[$a] ?>" class="input_group" placeholder="ajouter un groupe">


            <?php


            /*

$name_group
$id_group

*/
            ?>
            <select onchange="select_name_group(this)" title="<?php echo  $id_projet[$a] ?>" id="<?php echo  "form_select_" . $id_projet[$a] ?>" class="form_select" aria-label="Default select example">

                <?php

                $n_s = "";


                echo ' <option  id="select_name_group_' . $name_group[$resultat] . '"  value="' . $name_group[$resultat] . '">' . $name_group[$resultat] . '</option>';




                for ($n = 0; $n < count($name_group); $n++) {

                    echo ' <option  id="select_name_group_' . $id_group[$n] . '"  value="' . $id_group[$n] . '">' . $name_group[$n] . '</option>';
                    $n_s = $id_group[$n];
                }
                ?>


            </select>



            <div onclick="add_group(this)" title="<?php echo  $id_projet[$a] ?>">
                <img class="add_element" width="35" height="35" src="https://img.icons8.com/ultraviolet/35/plus--v1.png" alt="plus--v1" />

            </div>

            <?php
            //echo "".$name_group[$n_] ;  
            $image_remove = '<img   width="50" height="50" src="https://img.icons8.com/pulsar-line/50/clear-symbol.png" alt="clear-symbol"/>';


            /*
for ($n = 0; $n < count($name_group); $n++) {

    ?>
    <br/> 
    <div class="div_selection">
    <input value="<?php echo $name_group[$n] ?>" style="position: relative;top:-25px" type="text"><img width="50" height="50" src="https://img.icons8.com/color/50/clear-symbol--v1.png" alt="clear-symbol--v1"/>

    </div>
    <?php 

}
 
    */







            ?>


            <div class="display_none" id="<?php echo "parent_div_" . $id_projet[$a]  ?>">
                <div class="div_selection">
                    <input style="margin-top:15px" onkeyup="input_div_selection(this)" title="<?php echo $id_group[$a]  ?>" class="<?php echo $resultat ?>" id="<?php echo  'div_selection_' . $id_projet[$a] ?>" value="<?php echo $name_group[$resultat] ?>" style="position: relative;top:-25px" type="text">
                </div>
            </div>


            <?php
            if ($img_projet_src[$a] != "") {
                $file_path = "img_user_action/" . $img_projet_src[$a];

                if (checkFileExists($file_path)) {
                    // Extraire l'extension du fichier
                    $extension = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));

                    // Afficher l'extension du fichier


                    // Vérifier le type de fichier et afficher en conséquence
                    if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif'])) {
                        // Si c'est une image, l'afficher avec une balise <img>
            ?>
                        <div class="taille_img">
                            <div title="<?php echo $id_projet[$a] ?>" class="<?php echo $id_projet[$a] ?>" onclick="img_user_action(this)">
                                <img src="<?php echo $file_path ?>" alt="" srcset="">
                            </div>
                        </div>
                    <?php
                    } elseif ($extension == 'pdf') {
                        // Si c'est un PDF, l'afficher dans un iframe
                    ?>
                        <div class="taille_img">
                            <div title="<?php echo $id_projet[$a] ?>" class="<?php echo $id_projet[$a] ?>" onclick="img_user_action(this)">
                                <iframe src="<?php echo $file_path ?>" width="100%" height="500px"></iframe>
                            </div>
                        </div>
                    <?php
                    } elseif (in_array($extension, ['mp4', 'webm', 'ogg'])) {
                        // Si c'est une vidéo, l'afficher dans une balise <video>
                    ?>
                        <div class="taille_img">
                            <div title="<?php echo $id_projet[$a] ?>" class="<?php echo $id_projet[$a] ?>" onclick="img_user_action(this)">
                                <video width="100%" controls>
                                    <source src="<?php echo $file_path ?>" type="video/<?php echo $extension ?>">
                                    Votre navigateur ne supporte pas la balise video.
                                </video>
                            </div>
                        </div>
                    <?php
                    } elseif (in_array($extension, ['mp3', 'wav', 'ogg'])) {
                        // Si c'est un fichier audio, l'afficher dans une balise <audio>
                    ?>
                        <div class="taille_img">
                            <div title="<?php echo $id_projet[$a] ?>" class="<?php echo $id_projet[$a] ?>" onclick="img_user_action(this)">
                                <audio controls>
                                    <source src="<?php echo $file_path ?>" type="audio/<?php echo $extension ?>">
                                    Votre navigateur ne supporte pas la balise audio.
                                </audio>
                            </div>
                        </div>
                    <?php
                    } else {
                        // Pour les autres fichiers, afficher un lien de téléchargement
                    ?>
                        <div class="taille_img">
                            <div title="<?php echo $id_projet[$a] ?>" class="<?php echo $id_projet[$a] ?>" onclick="img_user_action(this)">
                                <a href="<?php echo $file_path ?>" target="_blank">Télécharger le fichier</a>
                            </div>
                        </div>
                    <?php
                    }
                } else {
                    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
                    $databaseHandler->action_sql("UPDATE `projet` SET `img_projet_src` = '' WHERE `id_projet` = '" . $id_projet[$a] . "'");
                    ?>

                    <script>
                        location.reload();
                    </script>

            <?php
                }
            }
            ?>





            <div class="display_flex">
                <div class="projet2">
                    <div title="<?php echo  $id_projet[$a] ?>" class="<?php echo  $id_projet[$a] ?>" onclick="img_user_action(this)">Ajouter un fichier</div>
                </div>


                <div class="sup_projet2">
                    <div title="<?php echo  $img_projet_src[$a] ?>" class="<?php echo  $id_projet[$a] ?>" onclick="sup_img_user_action(this)">Suprimer le fichier</div>
                </div>
            </div>

            <?php



            ?>




            <div class="display_flex">


                <div onclick="editor_container(this)" title="<?php echo  $id_projet[$a] ?>">
                    <img class="add_element" width="47" height="47" src="https://img.icons8.com/external-flatart-icons-outline-flatarticons/47/external-design-design-thinking-flatart-icons-outline-flatarticons-6.png" alt="external-design-design-thinking-flatart-icons-outline-flatarticons-6" />
                </div>

            </div>

            <div class="custom-editor">
                <div class="display_none2" id="<?php echo  "editor-container_" . $id_projet[$a] ?>">
                    <div id="toolbar">
                        <div>
                            <button title="<?php echo  $id_projet[$a] ?>" onclick="style_blog_3_2_up(this); execCmd('bold')"><strong>Gras</strong></button>
                            <button title="<?php echo  $id_projet[$a] ?>" onclick="style_blog_3_2_up(this); execCmd('italic')"><em>Italique</em></button>
                            <button title="<?php echo  $id_projet[$a] ?>" onclick="style_blog_3_2_up(this); execCmd('underline')"><u>Souligner</u></button>
                            <button title="<?php echo  $id_projet[$a] ?>" onclick="style_blog_3_2_up(this); execCmd('strikeThrough')">Barré</button>
                            <select title="<?php echo  $id_projet[$a] ?>" onchange="style_blog_3_2_up(this); execCmd('formatBlock', this.value)">
                                <option value="">Style de texte</option>
                                <option value="h1">Titre 1</option>
                                <option value="h2">Titre 2</option>
                                <option value="h3">Titre 3</option>
                                <option value="p">Paragraphe</option>
                            </select>
                            <select title="<?php echo  $id_projet[$a] ?>" onchange="style_blog_3_2_up(this); execCmd('fontSize', this.value)">
                                <option value="3">Taille de police</option>
                                <option value="1">Très petit</option>
                                <option value="2">Petit</option>
                                <option value="3">Normal</option>
                                <option value="4">Grand</option>
                                <option value="5">Très grand</option>
                                <option value="6">Gigantesque</option>
                            </select>
                        </div>
                        <div>
                            <button title="<?php echo  $id_projet[$a] ?>" onclick="style_blog_3_2_up(this); execCmd('justifyLeft')">Gauche</button>
                            <button title="<?php echo  $id_projet[$a] ?>" onclick="style_blog_3_2_up(this); execCmd('justifyCenter')">Centrer</button>
                            <button title="<?php echo  $id_projet[$a] ?>" onclick="style_blog_3_2_up(this); execCmd('justifyRight')">Droite</button>
                            <button title="<?php echo  $id_projet[$a] ?>" onclick="style_blog_3_2_up(this); execCmd('justifyFull')">Justifier</button>
                            <button title="<?php echo  $id_projet[$a] ?>" onclick="style_blog_3_2_up(this); execCmd('insertUnorderedList')">Puces</button>
                            <button title="<?php echo  $id_projet[$a] ?>" onclick="style_blog_3_2_up(this); execCmd('insertOrderedList')">Numéros</button>


                            <div>


                            </div>
                            <div>


                            </div>
                            <button title="<?php echo  $id_projet[$a] ?>" onclick="style_blog_3_2_up(this); execCmd('createLink', prompt('Entrer URL', 'http://'))">Lien</button>
                            <button title="<?php echo  $id_projet[$a] ?>" onclick="style_blog_3_2_up(this); execCmd('unlink')">Supprimer Lien</button>
                        </div>
                        <div style="margin-top: 25px;">
                            <div>
                                <a>Couleur text</a>
                                <input value="couleur" type="color" onchange="style_blog_3_2_up(this); execCmd('foreColor', this.value)" title="Couleur du texte" />
                            </div>
                            <div>
                                <a>Couleur arrier</a>
                                <input type="color" onchange="style_blog_3_2_up(this); execCmd('backColor', this.value)" title="Couleur de fond" />
                            </div>

                        </div>
                    </div>
                </div>
                <div title="<?php echo  $id_projet[$a] ?>" id="<?php echo  $id_projet[$a] ?>" onkeyup="style_blog_3_2_up(this)" class="editor" contenteditable="true"><?php echo $name_projet_ ?></div>

            </div>



            <div id="<?php echo  "planification_" . $id_projet[$a] ?>" class="display_none2">
                <div class="custom-form-container centrer">
                    <h2>Planification de l'événement</h2>







                    <div class="form-group">
                        <label for="start-date">Date de commencement :</label>
                        <input onchange="submit_inputs_form(this)" title="<?php echo  $id_projet[$a] ?>" value="<?php echo $heure_debut_projet[$a] ?>" id="<?php echo  "inputs_form_1_" . $id_projet[$a] ?>" type="date" name="start-date" required>
                    </div>

                    <div class="form-group">
                        <label for="start-time">Heure de commencement :</label>
                        <input onchange="submit_inputs_form(this)" title="<?php echo  $id_projet[$a] ?>" value="<?php echo $date_debut_projet[$a] ?>" id="<?php echo  "inputs_form_2_" . $id_projet[$a] ?>" type="time" name="start-time" required>
                    </div>

                    <div class="form-group">
                        <label for="end-date">Date de fin :</label>
                        <input onchange="submit_inputs_form(this)" title="<?php echo  $id_projet[$a] ?>" value="<?php echo $heure_fin_projet[$a] ?>" id="<?php echo  "inputs_form_3_" . $id_projet[$a] ?>" type="date" name="end-date" required>
                    </div>

                    <div class="form-group">
                        <label for="end-time">Heure de fin :</label>
                        <input onchange="submit_inputs_form(this)" title="<?php echo  $id_projet[$a] ?>" value="<?php echo $date_fin_projet[$a] ?>" id="<?php echo  "inputs_form_4_" . $id_projet[$a] ?>" type="time" name="end-time" required>
                    </div>

                    <button type="submit" onclick="submit_inputs_form(this)" title="<?php echo  $id_projet[$a] ?>">Valider</button>
                </div>
            </div>

            <style>
                .iframes iframe {
                    background-color: black;
                    padding: 25px;
                }
            </style>
            <div class="display_none2" id="<?php echo  "all_docs_" . $id_projet[$a] ?>">



                <?php
                for ($x = 0; $x < count($img_projet_src_img); $x++) {
                    $file_path = 'img_user_action/' . $img_projet_src_img[$x];

                    // Extraire l'extension du fichier
                    $extension = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));

                    // Vérifier le type de fichier et afficher en conséquence
                    if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif'])) {
                        // Si c'est une image, l'afficher avec une balise <img>
                ?>
                        <div class="<?php echo $file_path ?>" title="<?php echo  $id_projet[$a] ?>" onclick="iframes_doc(this)">
                            <img src="<?php echo $file_path ?>" alt="Image">
                        </div>
                    <?php
                    } elseif ($extension == 'pdf') {
                        // Si c'est un PDF, l'afficher dans un iframe
                    ?>

                        <div class="iframes">
                            <div class="<?php echo $file_path ?>" title="<?php echo  $id_projet[$a] ?>" onclick="iframes_doc(this)">
                                <iframe style="height: 50px;" src="<?php echo $file_path ?>" width="100%" height="500px"></iframe>
                            </div>
                        </div>
                    <?php
                    } elseif (in_array($extension, ['mp4', 'webm', 'ogg'])) {
                        // Si c'est une vidéo, l'afficher dans une balise <video>
                    ?>
                        <div class="<?php echo $file_path ?>" title="<?php echo  $id_projet[$a] ?>" onclick="iframes_doc(this)">
                            <video width="100%" controls>
                                <source src="<?php echo $file_path ?>" type="video/<?php echo $extension ?>">
                                Votre navigateur ne supporte pas la balise video.
                            </video>
                        </div>
                    <?php
                    } elseif (in_array($extension, ['mp3', 'wav', 'ogg'])) {
                        // Si c'est un fichier audio, l'afficher dans une balise <audio>
                    ?>
                        <div class="<?php echo $file_path ?>" title="<?php echo  $id_projet[$a] ?>" onclick="iframes_doc(this)">
                            <audio controls>
                                <source src="<?php echo $file_path ?>" type="audio/<?php echo $extension ?>">
                                Votre navigateur ne supporte pas la balise audio.
                            </audio>
                        </div>
                    <?php
                    } else {
                        // Pour les autres fichiers, afficher un lien de téléchargement
                    ?>
                        <div class="<?php echo $file_path ?>" title="<?php echo  $id_projet[$a] ?>" onclick="iframes_doc(this)">
                            <a href="<?php echo $file_path ?>" target="_blank">Télécharger le fichier</a>
                        </div>
                <?php
                    }
                }
                ?>

            </div>
 

            <div class="display_flex">
    

                <div title="<?php echo  $id_projet[$a] ?>" onclick="my_pictures_click(this)">

                    <img class="add_element" width="50" height="50" src="https://img.icons8.com/plumpy/47/file.png" alt="external-Images-images-and-image-files-those-icons-lineal-those-icons-2" />

                </div>


                
                <div>
<a href="<?php echo  'user.php/'.$id_sha1_projet[$a] ?>">
<img class="add_element"  width="50" height="50" src="https://img.icons8.com/emoji/50/link-emoji.png" alt="link-emoji"/>

</a>

                </div>


               
               
               
                <div title="<?php echo  $id_projet[$a] ?>" onclick="planification_click(this)">
                    <div class="add_element">
                        <img width="50" height="50" src="https://img.icons8.com/color/50/calendar--v1.png" alt="calendar--v1" />
                    </div>
                </div>
                <div onclick="projet_child(this)" class="<?php echo  $id_sha1_projet[$a] ?>" title="<?php echo  $id_projet[$a] ?>">
                    <img class="add_element" width="50" height="50" src="https://img.icons8.com/ios/50/add--v1.png" alt="add--v1" />

                </div>

                <?php

                if ($visibility_1_projet[$a] != "") {
                ?>
                    <div>
                        <img width="50" name="<?php echo $visibility_1_projet[$a] ?>" title="<?php echo  $id_projet[$a] ?>" onclick="visibility_1_projet(this)" class="add_element" height="50" src="https://img.icons8.com/ios-glyphs/50/invisible.png" alt="invisible" />
                    </div>
                <?php
                } else {
                ?>
                    <div id="<?php echo  'confirmer_' . $id_projet[$a] ?>">
                        <img width="50" name="<?php echo $visibility_1_projet[$a] ?>" title="<?php echo  $id_projet[$a] ?>" onclick="visibility_1_projet(this)" class="add_element" height="50" src="https://img.icons8.com/ios/50/invisible.png" alt="invisible" />
                    </div>
                <?php
                }
                ?>
                <div>
                    <img title="<?php echo  $id_projet[$a] ?>" onclick="remove_projet_(this)" class="add_element" width="50" height="50" src="https://img.icons8.com/ios/50/delete-forever--v1.png" alt="delete-forever--v1" />
                </div>

                <div>
                    <img class="display_none" id="<?php echo  'remove_' . $id_projet[$a] ?>" title="<?php echo  $id_projet[$a] ?>" onclick="remove_projet(this)" class="add_element" width="50" height="50" src="https://img.icons8.com/fluency/50/delete-forever.png" alt="delete-forever" />

                </div>


            </div>





            <div id="<?php echo  'date_form_' . $id_projet[$a] ?>" class="display_none">


                <form>
                    <label for="event-date">Date de l'événement debut :</label>
                    <input id="<?php echo  'date_form_1_' . $id_projet[$a] ?>" type="date" id="event-date" name="event-date" required>

                    <label for="event-time">Heure de l'événement debut:</label>
                    <input id="<?php echo  'date_form_2_' . $id_projet[$a] ?>" type="time" id="event-time" name="event-time" required>



                </form>

                <form>
                    <label for="event-date">Date de l'événement fin :</label>
                    <input id="<?php echo  'date_form_3_' . $id_projet[$a] ?>" type="date" id="event-date" name="event-date" required>

                    <label for="event-time">Heure de l'événement fin:</label>
                    <input id="<?php echo  'date_form_4_' . $id_projet[$a] ?>" type="time" id="event-time" name="event-time" required>

                    <div style="margin-top: 30px;" class="date_form_click" onclick="date_form_click2(this)" title="<?php echo    $id_projet[$a] ?>"> Valider</div>


                </form>

            </div>
        </div>

        <?php






        /*

$req_sql__ = "SELECT * FROM `projet_child` WHERE `id_parent_projet_child` ='" . $id_projet[$a] . "' ";
 
$databaseHandler__ = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler__->getDataFromTable($req_sql__, "id_projet_child");
$id_projet_child = $databaseHandler__->tableList_info;

 */



        require  'view/style_blog_3_child.php';

        ?>


    <?php
    }
    ?>
</div>
<?php
require 'view/style_blog_3_scrypt_1.php';

?>

<script>
    function my_pictures_click(_this) {

        var all_docs_ = document.getElementById("all_docs_" + _this.title);




        if (all_docs_.className == "display_none2") {
            all_docs_.className = "display_flex2";
        } else {
            all_docs_.className = "display_none2";

        }

    }

    function planification_click(_this) {



        var val = document.getElementById("planification_" + _this.title);



        if (val.className == "display_none2") {
            val.className == "";



            document.getElementById("planification_" + _this.title).className = "";


        } else {


            document.getElementById("planification_" + _this.title).className = "display_none2";


        }
    }


    function submit_inputs_form(_this) {

        var inputs_form_1_ = document.getElementById("inputs_form_1_" + _this.title).value;
        var inputs_form_2_ = document.getElementById("inputs_form_2_" + _this.title).value;
        var inputs_form_3_ = document.getElementById("inputs_form_3_" + _this.title).value;
        var inputs_form_4_ = document.getElementById("inputs_form_4_" + _this.title).value;



        var ok = new Information("update/submit_inputs_form.php");
        ok.add("id_projet", _this.title);



        ok.add("heure_debut_projet", inputs_form_1_);
        ok.add("date_debut_projet", inputs_form_2_);
        ok.add("heure_fin_projet", inputs_form_3_);
        ok.add("date_fin_projet", inputs_form_4_);




        ok.push();







    }

    function iframes_doc(_this) {



        var ok = new Information("update/iframes_doc.php");
        ok.add("id_projet", _this.title);

        let img_projet_src = _this.className.replace("img_user_action/", "");

        ok.add("img_projet_src", img_projet_src);




        ok.push();


        const myTimeout = setTimeout(myGreeting, 200);

        function myGreeting() {
            location.reload();
        }

    }

    function cryptographie_input(_this) {
    var el =    document.getElementById("cryptographie_input_"+_this.title) ; 
    console.log(el.value) ; 

    }
</script>

<style>
    .projet2:hover,
    .sup_projet2:hover {
        cursor: pointer;
    }

    .projet2,
    .sup_projet2 {


        background-color: black;

        padding: 5px;
        margin-top: 25px;
        text-align: center;
        color: white;
        width: 150px;
    }
    .cryptographie_input {
        margin: auto;
        width: 100%;
        margin-top: 50px;
        margin-bottom: 50px;

    }

    .cryptographie_input input{
    
        width: 100%;
        padding: 5px; 
        
  
    }

    .sup_projet2 {}

    .display_flex2 {

        display: flex;
        justify-content: space-around;
        margin-top: 50px;
        flex-wrap: wrap;
        margin-bottom: 50px;
    }

    .display_flex2 div {

        padding: 10px;
        margin-top: 25px;
        width: 100px;
        height: 100px;

    }



    .display_flex2 div:hover {
        cursor: pointer;
        opacity: 0.3;

    }

    .display_flex2 img {

        width: 100%;
        max-height: 200px;

    }

    .sup_projet2 {
        background-color: rgba(220, 40, 12, 0.6);
    }
</style>