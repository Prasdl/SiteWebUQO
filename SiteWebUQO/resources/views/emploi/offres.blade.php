@extends('layouts.template')



@section('template')

    <h1>CRÉER UNE OFFRE D'EMPLOI</h1>

    <?php
    //use App\Offre;

    //Le dataset des offres (Appel du model Offre)
    $offres = App\Offre::all();

    //Fonction test
    foreach($offres as $offre){
        echo $offre->id;
    }
    ?>

@endsection

