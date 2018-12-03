@extends('layouts.template')

<!DOCTYPE html>
<html>
<head>

</head>
<body>

@section('template')


    <h1>PROGRAMMES D'ÉTUDES DE 1er CYCLE</h1>

    <li>Programmes de baccalauréat</li>
    <ul>
        <li><p><a href="http://etudier.uqo.ca/programmes/7833">Baccalauréat en informatique</a></p></li>
        <li><p><a href="http://etudier.uqo.ca/programmes/7033">Baccalauréat en informatique (cheminement coopératif)</a></p></li>
        <li><p><a href="http://etudier.uqo.ca/programmes/7643">Baccalauréat en génie informatique</a></p></li>
        <ul>
            <li><p>Concentration Systèmes informatiques</p></li>
            <ul>
                <li><p>Option générale</p></li>
                <li><p>Option Sécurité des systèmes d'information</p></li>
            </ul>
        </ul>
        <li><p><a href="http://etudier.uqo.ca/programmes/7543">Baccalauréat en génie électrique</a></p></li>
    </ul>

    <li>Programmes de certificat</li>
    <ul>
        <li><p><a href="http://etudier.uqo.ca/programmes/4802">Certificat en technologies de l'information</a></p></li>
        <li><p><a href="http://etudier.uqo.ca/programmes/4108">Certificat en informatique de gestion</a></p></li>
    </ul>
    <li>Programmes courts</li>
    <ul>
        <li><p><a href="http://etudier.uqo.ca/programmes/0542">Programme court de premier cycle en gestion des technologies de l'information</a></p></li>

    </ul>
    <li><a href="https://apps.uqo.ca/AdmissionEnLigne/Directives.aspx">Demande d'admission en ligne</a></li>

@endsection

</body>
</html>