<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire avec JavaScript</title>
    <link rel="icon" type="image/x-icon" href="https://m.media-amazon.com/images/S/pv-target-images/54023a2fed8c040a592bf05c6ffa0050c8e535c227d4811d5d6aa847f4a59763.jpg">
</head>

<body>

    <form id="monFormulaire1" class="monFormulaire1">

        <div>
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom">
        </div>

        <div>
            <label for="prenom">Prénom:</label>
            <input type="text" id="prenom" name="prenom">
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
        </div>
        <div>
            <label for="age">Âge:</label>
            <input type="number" id="age" name="age">
        </div>



        <!-- Bouton de soumission -->
        <div class="submit" onclick="submitForm()">ENVOYER</div>

        <!-- Bouton pour afficher les infos -->
        <div id="afficherInfos" onclick="afficherInfosInputs()">Afficher les infos des inputs</div>
    </form>

    <script>
        function afficherInfosInputs() {
            var inputs = document.querySelectorAll('#monFormulaire1 input');

            inputs.forEach(function(input) {
                console.log("Nom: " + input.name + ", Type: " + input.type + ", Name: " + input.name);

            });

            // Changer la couleur du bouton de soumission en bleu
            var submitButton = document.querySelector('.submit');
            submitButton.style.backgroundColor = '#a5a0b9';
        }

        function submitForm() {
            // Empêche le comportement par défaut du formulaire
            return false;
        }
    </script>


    <link rel="stylesheet" href="css/monFormulaire1.css">




    <?php
    class Data_form
    {
        private $name_form;
        public $color;

        private $set_atribute = [];


        function __construct($name_form)
        {
            $this->name_form = $name_form;
        }

        function set_atribute($set_atribute, $value)
        {
            $this->set_atribute[] = array($set_atribute, $value);
        }
        function get_name_form()
        {
            return $this->name_form;
        }
    }

    $monFormulaire1 = new Data_form("monFormulaire1");
    //echo $monFormulaire1->get_name_form();
    ?>



    <!--------------------------------------------------------->

    <!--------------------------------------------------------->





    <script>
        var name_form_parent ="monFormulaire2";
        var para = document.createElement("form");

        para.setAttribute("id", "monFormulaire2");
        document.body.appendChild(para);



        /*

                <div>
                    <label for="nom">Nom:</label>
                    <input type="text" id="nom" name="nom">
                </div>
        */




        var para = document.createElement("div");

        
        var name_id = name_form_parent+"_div" ; 




 


        var name_id_input_1="input_"+name_id+"_1" ; 
        var name_id_input_2="input_"+name_id+"_2" ; 
        var name_id_input_3="input_"+name_id+"_3" ;
        
        var info_input_1 ="Nom :" ; 
        var info_input_2 ="Prenom : " ; 
        var info_input_3 ="Autre" ; 

/*

        


        
        para.setAttribute("id", name_id);
        para.setAttribute("class", "monFormulaire1");
        document.getElementById("monFormulaire2").appendChild(para);



        var para = document.createElement("label");
        para.setAttribute("for", name_id_input_1);
        para.innerHTML=info_input_1 ; 
        document.getElementById(name_id).appendChild(para);


        var para = document.createElement("input");
        para.setAttribute("type", "text");
        para.setAttribute("id", name_id_input_1);
        document.getElementById(name_id).appendChild(para);

        var para = document.createElement("label");
        para.setAttribute("for", name_id_input_2);
        para.innerHTML=info_input_2 ; 
        document.getElementById(name_id).appendChild(para);


        var para = document.createElement("input");
        para.setAttribute("type", "text");
        para.setAttribute("id", name_id_input_2);

        document.getElementById(name_id).appendChild(para);


        var para = document.createElement("label");
        para.setAttribute("for", name_id_input_3);
        para.innerHTML=info_input_3 ; 
        document.getElementById(name_id).appendChild(para);
        var para = document.createElement("input");
        para.setAttribute("type", "text");
        para.setAttribute("id", name_id_input_3);

        document.getElementById(name_id).appendChild(para);

        */
    </script>
</body>

</html>