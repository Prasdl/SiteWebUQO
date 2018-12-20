@extends('layouts.template')



@section('template')

    <h1>Créer une offre d'emploi</h1>

    <?php
    //use App\Offre;

    //Le dataset des offres (Appel du model Offre)
    $offres = App\Offre::all();

    //Fonction affichage (Crédit formattage des tables: https://stackoverflow.com/questions/17902483/show-values-from-a-mysql-database-table-inside-a-html-table-on-a-webpage)
    echo '<table class="data-table">
            <tr class="data-heading">';
            echo '<td>' . "Employeur: " . '</td>';
            echo '<td>' . "Coordonnées: " . '</td>';
            echo '<td>' . "Type d'étudiant: " . '</td>';
            echo '<td>' . "Connaissances: " . '</td>';
            echo '<td>' . "Description d'emploi: " . '</td>';
            echo '<td>' . "Nombre d'étudiants: " . '</td>';
            echo '<td>' . "Date de fin d''affichage: " . '</td>';
            echo '</tr>';
    foreach($offres as $offre){
        echo '<tr>';
        echo '<td>' . $offre->Employeur . '</td>';
        echo '<td>' . $offre->Coordonnees . '</td>';
        echo '<td>' . $offre->TypeEtudiant . '</td>';
        echo '<td>' . $offre->Connaissances . '</td>';
        echo '<td>' . $offre->DescriptionEmploi . '</td>';
        echo '<td>' . $offre->NombreEtudiants . '</td>';
        echo '<td>' . $offre->DateFinAffichage . '</td>';
        echo '</tr>';
    }
    ?>

@endsection

