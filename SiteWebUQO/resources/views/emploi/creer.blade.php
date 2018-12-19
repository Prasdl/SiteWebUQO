@extends('layouts.template')



@section('template')

    <h1>CRÉER UNE OFFRE D'EMPLOI</h1>

    <?php
    // définition des variables et leurs initialisation
    $EmployeurError = $coordoError = $connError = $nbetuError = $descripError ="";
    $emp = $coordo = $conn = $descrip = $nbetu = "";

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

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["coordo"])) {
                $coordoError = "Les coordonnées sont requises";
            }
        }
    }
    ?>

    <form method="post" action="">
        Employeur: <input type="text" name="Employeur" value="<?php echo $emp;?>">
        <span class="error">* <?php echo $EmployeurError;?></span>
        <br><br>
        Coordonnées: <input type="text" name="coordo" value="<?php echo $coordo;?>">
        <span class="error">* <?php echo $coordoError;?></span>
        <br><br>
        Type d'étudiant: <select name="etu" onchange="if (this.selectedIndex) doSomething();">
            <option>Diplômé, génie</option>
            <option>Diplômé, info</option>
            <option>Non diplômé, génie</option>
            <option>Non diplômé, info</option>
            <option>Sans importance</option>
        </select>
        <br><br>
        Connaissances spécifiques: <textarea name="conn" rows="5" cols="40"><?php echo $conn;?></textarea>
        <span class="error"><?php echo $connError;?></span>
        <br><br>
        Description Emploi: <textarea name="description" rows="5" cols="40"><?php echo $descrip;?></textarea>
        <span class="error"><?php echo $descripError;?></span>
        <br><br>
        Nombre d'étudiants: <input type="text" name="nbetu" value="<?php echo $nbetu;?>">
        <span class="error">* <?php echo $nbetuError;?></span>
        <br><br>

        Date de fin d'affichage: <!-- Credit: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
        <div class="main">
            <div class="row">
                <div class='col-sm-6'>
                    <div class="form-group">
                        <div class='input-group date' id='datetimepicker1'>
                            <input type='text' class="form-control" />
                            <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    $(function () {
                        $('#datetimepicker1').datetimepicker();
                    });
                </script>
            </div>
        </div>

        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

@endsection


