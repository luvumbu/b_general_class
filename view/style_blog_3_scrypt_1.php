 

<script>
    function date_form_click(_this) {
        console.log(_this.title);
        document.getElementById("date_form_" + _this.title).className = "date_form_style_1";
    }

    function input_div_selection(_this) {

        const myTimeout = setTimeout(myGreeting, 500);

        function deux_a() {
            onkeyup_action_bool2 = false;


            console.log(_this.title);
            console.log(_this.value);


            let optionElement = document.getElementById("select_name_group_" + _this.title);

            // Modifier le texte de l'option
            optionElement.textContent = _this.value;
            /*
                var id_projet = document.getElementById(_this.title);



                var title_projet = document.getElementById('t_' + _this.title).value;
                var description_projet = document.getElementById('h_' + _this.title).value;

            */





            var ok = new Information("update/input_div_selection.php");



            ok.add("id_group", _this.title);
            ok.add("name_group", _this.value);



            ok.push();



            onkeyup_action_bool = true;
        }

        function myGreeting() {
            if (onkeyup_action_bool2 == false) {
                onkeyup_action_bool2 = true;
                const deux = setTimeout(deux_a, 500);
            }
        }



    }

    var input_change = true;

    function select_name_group(_this) {

        document.getElementById("parent_div_" + _this.title).className = "";



        var select_name_group_ = document.getElementById("select_name_group_" + _this.value).innerHTML;



        document.getElementById("div_selection_" + _this.title).value = select_name_group_;





        document.getElementById("div_selection_" + _this.title).className = _this.value;



        document.getElementById("div_selection_" + _this.title).title = _this.value;
        document.getElementById("div_selection_" + _this.title).name = select_name_group_;






        var ok = new Information("update/select_name_group.php");

        ok.add("id_projet", _this.title);
        ok.add("group_projet", _this.value);


        ok.push();



    }

    function add_group(_this) {






        input_change = false;

        var name_group = document.getElementById("name_group_" + _this.title).value;



        var name_group = document.getElementById("div_selection_" + _this.title).value = name_group;
        console.log(name_group);


        var form_select = document.getElementById("form_select_" + _this.title);




        // Create an "li" node:
        const node = document.createElement("option");

        // Create a text node:
        const textnode = document.createTextNode(name_group);
        node.setAttribute("selected", "");
        node.setAttribute("value", name_group);


        // Append the text node to the "li" node:
        node.appendChild(textnode);

        // Append the "li" node to the list:
        form_select.appendChild(node);







        var ok = new Information("add/add_group.php");

        ok.add("id_projet", _this.title);
        ok.add("name_group", name_group);


        ok.push();






        const myTimeout = setTimeout(myGreeting, 250);

        function myGreeting() {



            var ok = new Information("update/update_add_group.php");
            ok.push();
            location.reload();


        }







    }

    function editor_container(_this) {





        console.log(_this.title);


        var editor_container_ = document.getElementById("editor-container_" + _this.title);



        if (editor_container_.className == "add_element") {
            editor_container_.className = "display_none2";
        } else {
            editor_container_.className = "add_element";

        }




    }


    function remove_projet_(_this) {


        _this.style.display = "none";


        document.getElementById('remove_' + _this.title).className = "add_element";

    }

    function remove_projet(_this) {

        _this.style.display = "none";
        var ok = new Information("remove/remove_projet.php");

        ok.add("id_projet", _this.title);

        ok.push();


        const myTimeout = setTimeout(myGreeting, 100);

        function myGreeting() {
            location.reload();
        }


    }

    function projet_child(_this) {


        _this.style.display = "none";
        var ok = new Information("add/projet_child.php");
        ok.add("id_sha1_projet", _this.className);
        ok.add("id_projet", _this.title);

        ok.push();


        const myTimeout = setTimeout(myGreeting, 100);

        function myGreeting() {
            location.reload();
        }

    }


    function sup_img_user_action(_this) {
        var ok = new Information("remove/sup_img_user_action.php");
        ok.add("img_projet_src", _this.title);
        ok.push();

        const myTimeout = setTimeout(myGreeting, 100);

        function myGreeting() {
            location.reload();
        }




    }



    function visibility_1_projet(_this) {

        var img1 = "https://img.icons8.com/ios-glyphs/50/invisible.png";
        var img2 = "https://img.icons8.com/ios/50/invisible.png";


        var ok = new Information("update/visibility_1_projet.php");

        if (_this.src == img1) {
            var visibility_1_projet = "";
            _this.src = img2;
        } else {
            _this.src = img1;
            var visibility_1_projet = "(0-0)";
            _this.src = img1;


        }



        ok.add("visibility_1_projet", visibility_1_projet);
        ok.add("id_projet", _this.title);





        ok.push();

    }

    function execCmd(command, value = null) {
        document.execCommand(command, false, value);
    }

    function style_blog_3_2_up(_this) {
        const myTimeout = setTimeout(myGreeting, 500);

        function deux_a() {
            onkeyup_action_bool2 = false;
            console.log(_this.title);

            var id_projet = document.getElementById(_this.title);



            var title_projet = document.getElementById('t_' + _this.title).value;
            var description_projet = document.getElementById('h_' + _this.title).value;





            var ok = new Information("update/style_blog_3_2_up.php");
            ok.add("name_projet", id_projet.innerHTML);
            ok.add("id_projet", _this.title);
            ok.add("title_projet", title_projet);
            ok.add("description_projet", description_projet);
            ok.push();

            onkeyup_action_bool = true;
        }

        function myGreeting() {
            if (onkeyup_action_bool2 == false) {
                onkeyup_action_bool2 = true;
                const deux = setTimeout(deux_a, 500);
            }
        }
    }

    function modif_group(_this) {
        console.log(_this.title);
        console.log(_this.className);

        console.log(_this.name);


    }

    function date_form_click2(_this) {
        console.log(_this.title);

        var date_form_1_ = document.getElementById('date_form_1_' + _this.title).value;
        var date_form_2_ = document.getElementById('date_form_2_' + _this.title).value;

        var date_form_3_ = document.getElementById('date_form_3_' + _this.title).value;
        var date_form_4_ = document.getElementById('date_form_4_' + _this.title).value;






        console.log(date_form_1_);
        console.log(date_form_2_);
        console.log(date_form_3_);
        console.log(date_form_4_);






        var ok = new Information("update/date_form_click2.php");


        ok.add("id_projet", _this.title);

        ok.add("date_form_1_", date_form_1_);
        ok.add("date_form_2_", date_form_2_);
        ok.add("date_form_3_", date_form_3_);
        ok.add("date_form_4_", date_form_4_);



    

        ok.push();


    }


    
</script>
 