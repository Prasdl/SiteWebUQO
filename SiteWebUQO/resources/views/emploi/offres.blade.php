@extends('layouts.template')



@section('template')

    <h1>Offres d'emploi disponibles</h1>

    <?php
    //use App\Offre;

    //Le dataset des offres (Appel du model Offre)
    $offres = App\Offre::all();

    //Fonction affichage (Crédit formattage des tables: https://stackoverflow.com/questions/17902483/show-values-from-a-mysql-database-table-inside-a-html-table-on-a-webpage)
    echo '<table class="data-table">
            <tr class="data-heading">';
            echo '<td>' . "Employeur: " . '</td>';
            echo '<td style="padding-left: 15px;">' . "Coordonnées: " . '</td>';
            echo '<td style="padding-left: 15px;">' . "Type d'étudiant: " . '</td>';
            echo '<td style="padding-left: 15px;">' . "Connaissances: " . '</td>';
            echo '<td style="padding-left: 15px;">' . "Description d'emploi: " . '</td>';
            echo '<td style="padding-left: 15px;">' . "Nombre d'étudiants: " . '</td>';
            echo '<td style="padding-left: 15px;">' . "Date de fin d''affichage: " . '</td>';
            echo '</tr>';
    foreach($offres as $offre){
        echo "<tr>";
        echo '<td style="padding-top: 10px;">' . $offre->Employeur . '</td>';
        echo '<td style="padding-left: 25px; padding-top: 10px;">' . $offre->Coordonnees . '</td>';
        echo '<td style="padding-left: 25px; padding-top: 10px;">' . $offre->TypeEtudiant . '</td>';
        echo '<td style="padding-left: 25px; padding-top: 10px;">' . $offre->Connaissances . '</td>';
        echo '<td style="padding-left: 25px; padding-top: 10px;">' . $offre->DescriptionEmploi . '</td>';
        echo '<td style="padding-left: 25px; padding-top: 10px;">' . $offre->NombreEtudiants . '</td>';
        echo '<td style="padding-left: 25px; padding-top: 10px;">' . $offre->DateFinAffichage . '</td>';
        echo '</tr>';
    }
    ?>

@endsection

