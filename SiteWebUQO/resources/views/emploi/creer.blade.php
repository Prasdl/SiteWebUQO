@extends('layouts.template')



@section('template')

    <h1>Créer une offre d'emploi</h1>

    <?php
    
    // définition des variables et leurs initialisation
    $EmployeurError = $coordoError = $connError = $nbetuError = $descripError  ="";
    $emp = $coordo = $conn = $descrip = $nbetu =  "";

    //vérifier si il y a un nom
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["Employeur"])) {
        $EmployeurError = "L'employeur est requis";
    } else {
        $emp = test_input($_POST["Employeur"]);
        // vérifier si le nom ne contient que des lettres et des espaces
        if (!preg_match("/^[a-zA-Z ]*$/",$emp)) {
            $EmployeurError = "Seules les lettres et les espaces sont autorisés";
        }
    }
    }

        //vérifier si il y a les coordonnées
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["coordo"])) {
                $coordoError = "Les coordonnées sont requises";
            }
            else {
                $emp = test_input($_POST["Employeur"]);
                // vérifier si le nom ne contient que des lettres et des espaces
                if (!preg_match("/^[0-9]",$emp)) {
                    $EmployeurError = "Seules les nombre sont autoriseés";
                }
        }
        }

        //vérifier si il y a un nombre plus que 0
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["$nbetu"])) {
                $nbetuError = "Ils faut un nombre minimun d'étudiants";
            }
        }


        //vérifier si il y a une description
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["$descrip"])) {
                $descripError = "Ils faut une description de l'emplois";
            }
        }


        //vérifier si il y a les connaissances spécifique
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["$conn"])) {
                $connError = "Ils faut les connaissances spécifique";
            }
        }

    ?>

    <form method="post" action="/emploi/creer">
    @csrf
        Employeur: <input type="text" name="Employeur" value="<?php echo $emp;?>">
        <span class="error">* <?php echo $EmployeurError;?></span>

        Coordonnées: <input type="text" name="Coordonnees" value="<?php echo $coordo;?>">
        <span class="error">* <?php echo $coordoError;?></span>
        <br><br>
        Type d'étudiant: <select name="TypeEtudiant" onchange="if (this.selectedIndex) doSomething();">
            <option>Diplômé, génie</option>
            <option>Diplômé, info</option>
            <option>Non diplômé, génie</option>
            <option>Non diplômé, info</option>
            <option>Sans importance</option>
        </select>
        <br><br>
        Connaissances spécifiques: <textarea name="Connaissances" rows="2" cols="20"><?php echo $conn;?></textarea>
        <span class="error">*<?php echo $connError;?></span>
        <br><br>
        Description Emploi: <textarea name="DescriptionEmploi" rows="2" cols="20"><?php echo $descrip;?></textarea>
        <span class="error">*<?php echo $descripError;?></span>
        <br><br>
        Nombre d'étudiants: <input type="text" name="NombreEtudiants" value="<?php echo $nbetu;?>">
        <span class="error">* <?php echo $nbetuError;?></span>
        <br><br>

        <!-- Source du DateTimePicker (Modifié): https://formden.com/download-code/form_MlKtmY4x.html -->
        <!-- HTML Form (wrapped in a .bootstrap-iso div) -->
        <div class="bootstrap-iso">
        <div class="container-fluid">
        <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="form-group ">
            <label class="control-label col-sm-2 requiredField" for="DateFinAffichage">
            Date de fin d'affichage
            <span class="asteriskField">
                *
            </span>
            </label>
            <div class="col-sm-10">
            <div class="input-group">
                <div class="input-group-addon">
                <i class="fa fa-calendar">
                </i>
                </div>
                <input class="form-control" id="DateFinAffichage" name="DateFinAffichage" placeholder="JJ/MM/AAAA" type="text"/>
            </div>
            </div>
            </div>
            <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
            <input name="_honey" style="display:none" type="text"/>
            </div>
            </div>
        </div>
        </div>
        </div>
    </div>

    <!-- Extra JavaScript/CSS added manually in "Settings" tab -->
    <!-- Include jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <!-- Include Date Range Picker -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

    <script>
        $(document).ready(function(){
            var date_input=$('input[name="DateFinAffichage"]'); //our date input has the name "date"
            var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
            date_input.datepicker({
            format: 'yyyy/mm/dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
	})
    </script>
    <br><br>
    <input type="submit" value="Créer">
    </form>

@endsection


