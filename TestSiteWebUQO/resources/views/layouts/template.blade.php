<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        .sidenav {
            height: 100%;
            width: 220px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #1c6381;
            overflow-x: hidden;
            padding-top: 20px;
        }

        .sidenav a {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 25px;
            color: #111;
            display: block;
        }

        .sidenav p {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 15px;
            color: white;
            display: block;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }


        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }

        .main {
            margin-left: 220px;
            font-size: 28px;
            padding: 0px 10px;
        }

        .navtop
        {
            margin-left: 200px;
            padding: 0px 10px;
        }
        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 80px;
            background: #000000;
            color: #FFFFFF;
            text-align: center;
            margin-left: 200px;
            padding: 0px 10px;
        }
        .white{
            color: #FFFFFF;
        }
        a:hover {
            color: #f1f1f1;
        }

    </style>
</head>
<body>

<div class="navtop">
    <nav class="navbar navbar-inverse">
        <a class="navbar-brand" href="https://uqo.ca/">UQO</a>
        <ul class="nav navbar-nav">
            <li><a href="/">Acceuil</a></li>
            <li><a href="/partenaire">Partenaires éducatifs</a></li>
            <li><a href="https://authentification.uqo.ca/cas/login?service=https%3A%2F%2Fuqo.ca%2Fuser">Intranet de l'UQO</a></li>
            <li><a href="">Courriel</a></li>
            <li><a href="https://uqo.ca/biblio">Bibliothèque</a></li>
            <li><a href="">Intranet</a></li>
            <li><a href="/plansite">Plan du site</a></li>
            <li><a href=""><span class="glyphicon glyphicon-search"></span></a></li>
        </ul>
    </nav>
</div>

<div class="sidenav">
    <a href="/informatique">INFO</a>
    <a href="/genie">GÉNIE</a>
    <p>PROGRAMMES D'ÉTUDES</p>
    <a href="/programmes/premiercycle">1er cycle</a>
    <a href="/programmes/cycledeuxtrois">2ᵉ et 3ᵉ cycles</a>
    <a href="/programmes/plancours">Plans de cours</a>
    <a href="https://moodle.uqo.ca/">Moodle</a>
    <p>ÉTUDIANTS</p>
    <a href="/etudiant/cycleuninfo">1er cycle informatique</a>
    <a href="/etudiant/cycleungenie">1er cycle génie</a>
    <a href="/etudiant/cycledeux">2ᵉ cycle</a>
    <a href="/etudiant/cycletrois">3ᵉ cycle</a>
    <p>RECHERCHE</p>
    <a href="/recherche/domaine">Domaines de spécialisation</a>
    <a href="/recherche/equipe">Équipes de recherche</a>
    <p>PERSONNEL</p>
    <a href="/personnel/personnel">Professeurs</a>
    <a href="/personnel/professeurs">Personnel</a>
    <p>EMPLOIS</p>
    <a href="#">Créer une offre d'emploi</a>
    <a href="#">Offres d'emplois courantes</a>
</div>

<div class="main">
    @yield('template')
</div>

</body>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Département d'informatique et d'ingénierie - Université du Québec en Outaouais</p>
                <p>101, Saint-Jean-Bosco, C.P. 1250, succursale Hull, Gatineau (Québec) Canada, J8X 3X7 Tél.: 819-773-1600 Télécopieur: 819-773-1638</p>
                <p><a class="white" href="#">Pour nous joindre</a></p>
            </div>
        </div>
    </div>
</footer>


</html>

