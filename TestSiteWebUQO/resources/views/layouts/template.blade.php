<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- Bootstrap Date-Picker Plugin (Source: https://formden.com/blog/date-picker)-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" type="text/css" media="screen" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="./css/prettify-1.0.css" rel="stylesheet">
    <link href="./css/base.css" rel="stylesheet">
    <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">

    <!-- Librairies pour le DateTimePicker -->
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>


    <script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>

        @media screen and (max-height: 450px) {
            .sidenav a {font-size: 18px;}
        }

        .main {

            font-size: 16px;
            padding: 0px 10px;
            height: 100%;
            margin-top: 100px;
            background-color: #d8d8d8;
        }

        .navtop
        {
            padding: 0px 0px;
            width: 100%;
        }
        .footer {
            position: relative;
            width: 100%;
            height: 80px;
            background: #222222;
            color: #919d9d;
            text-align: center;
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

<div class="navtop" style="position: fixed;top: 0px;">
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

<!-- Ouvrer pas  -->
<div class="navtop" style="position: fixed;top: 46px;">
    <nav class="navbar navbar-inverse" >
     <div class="container-fluid">
         <ul class="nav navbar-nav">
           <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">PROGRAMMES D'ÉTUDES<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="/informatique">INFO</a></li>
                    <li><a href="/genie">GÉNIE</a></li>
                    <li><a  href="/programmes/premiercycle" >1er cycle</a></li>
                    <li><a href="/programmes/cycledeuxtrois" >2ᵉ et 3ᵉ cycles</a></li>
                    <li><a  href="/programmes/plancours">Plans de cours</a></li>
                    <li><a  href="https://moodle.uqo.ca/" >Moodle</a></li>
                </ul>
                </li>

             <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">ÉTUDIANTS<span class="caret"></span></a>
                 <ul class="dropdown-menu">
                     <li><a href="/etudiant/cycleuninfo">1er cycle informatique</a></li>
                     <li><a href="/etudiant/cycleungenie">1er cycle génie</a></li>
                     <li><a href="/etudiant/cycledeux">2ᵉ cycle</a></li>
                     <li><a href="/etudiant/cycletrois">3ᵉ cycle</a></li>
                 </ul>
             </li>

             <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">RECHERCHE<span class="caret"></span></a>
                 <ul class="dropdown-menu">
                     <li><a href="/recherche/domaine">Domaines de spécialisation</a></li>
                     <li><a href="/recherche/equipe">Équipes de recherche</a></li>
                 </ul>
             </li>

             <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">PERSONNEL<span class="caret"></span></a>
                 <ul class="dropdown-menu">
                     <li><a href="/personnel/personnel">Professeurs</a></li>
                     <li><a href="/personnel/professeurs">Personnel</a></li>
                 </ul>
             </li>

             <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">EMPLOIS<span class="caret"></span></a>
                 <ul class="dropdown-menu">
                     <li><a href="/emploi/creer">Créer une offre d'emploi</a></li>
                     <li><a href="emploi/offres">Offres d'emplois courantes</a></li>
                 </ul>
             </li>

            </ul>
        </div>
    </nav>
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

