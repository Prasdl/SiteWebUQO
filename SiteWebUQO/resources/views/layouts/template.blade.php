<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- importer le JQuery -->
    <script src="{{ asset('resources/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    
    <!--formden.js communicates with FormDen server to validate fields and submit via AJAX -->
    <script type="text/javascript" src="https://formden.com/static/cdn/formden.js"></script>

    <!-- Special version of Bootstrap that is isolated to content wrapped in .bootstrap-iso -->
    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

    <!-- Le boostrap  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Librairies pour le DateTimePicker -->
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

    <!-- Bootstrap Date-Picker Plugin (Source: https://formden.com/blog/date-picker)-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" media="screen" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="./css/prettify-1.0.css" rel="stylesheet">
    <link href="./css/base.css" rel="stylesheet">
    <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>

    <!-- fonctionne pas  -->
    <link rel="stylesheet" type="text/css" href="public/css/styletemplate.css">

    <!-- Librairie pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <style>
        @media screen and (max-height: 900px) {
            .sidenav a {font-size: 18px;}
            .bottom_border {display: none;}
        }

        body{
            background-image: url('img/background');
        }

        .main {
            position: static;
            padding-left: 25px;
            font-size: 16px;
            height: 100%;
            padding-top: 52px;
            padding-bottom: 500px;
            background-color: #d8d8d8;
            width:80%;
            margin: auto;
        }

        .navtop
        {
            padding: 0px 0px;
            width: 100%;
        }

        a:hover {
            color: #f1f1f1;
        }


        li.dropdown {
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color:  #222222;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {background-color: #f1f1f1; color: black }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        /*footer*/
        .col_white { color:#FFF;}
        footer { width:100%; background-color:#222222; position: fixed;  bottom: 0px; padding:10px 0px 25px 0px ;}
        .pt2 { padding-top:40px ; margin-bottom:20px ;}
        footer p { font-size:13px; color:#CCC; padding-bottom:0px; margin-bottom:8px;}
        .mb10 { padding-bottom:15px ;}
        .footer_ul { margin:0px ; list-style-type:none ; font-size:14px; padding:0px 0px 10px 0px ; }
        .footer_ul li {padding:0px 0px 5px 0px;}
        .footer_ul li a{ color:#CCC;}
        .footer_ul li a:hover{ color:#fff; text-decoration:none;}
        .fleft { float:left;}
        .padding-right { padding-right:10px; }

        .footer_ul2 {margin:0px; list-style-type:none; padding:0px;}
        .footer_ul2 li p { display:table; }
        .footer_ul2 li a:hover { text-decoration:none;}
        .footer_ul2 li i { margin-top:5px;}

        .bottom_border { border-bottom:1px solid #323f45;}
        .bottom_border h5 { padding: 0px; margin-bottom: 5px; margin-top: 0px;}
        .foote_bottom_ul {
            list-style-type:none;
            padding:0px;
            display:table;
            margin-top: 10px;
            margin-right: auto;
            margin-bottom: 10px;
            margin-left: auto;
        }
        .foote_bottom_ul li { display:inline;}
        .foote_bottom_ul li a { color:#999; margin:0 12px;}

        .social_footer_ul { display:table; margin:15px auto 0 auto; list-style-type:none;  }
        .social_footer_ul li { padding-left:20px; padding-top:0px; float:left; }
        .social_footer_ul li a { color:#CCC; border:1px solid #CCC; padding:8px;border-radius:50%;}
        .social_footer_ul li i {  width:20px; height:20px; text-align:center;}
    </style>


    <!–– Fonction pour faire apparaitre ou disparaitre la bar de recherche ––>
    <script>
        function show() {
            var x = document.getElementById("txtrecherche");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>

    </head>

<body>

<!–– Bar de navigation  ––>
<div class="navtop"  style="position: fixed;top: 0px;" >
    <nav class="navbar navbar-inverse">
        <a class="navbar-brand" href="https://uqo.ca/">UQO</a>
        <ul class="nav navbar-nav">
            <li><a href="/">Acceuil</a></li>
            

            <li class="dropdown"><a href="javascript:void(0)" class="dropbtn">Liens utiles</a>
                <div class="dropdown-content">
                    <a href="/partenaire">Partenaires éducatifs</a>
                    <a href="https://authentification.uqo.ca/cas/login?service=https%3A%2F%2Fuqo.ca%2Fuser">Intranet de l'UQO</a>
                    <a href="">Courriel</a>
                    <a href="https://moodle.uqo.ca/" >Moodle</a>
                    <a href="https://uqo.ca/biblio">Bibliothèque</a>
                    <a href="">Intranet</a>
                    <a href="/plansite">Plan du site</a>    
                </div>
            </li>

            <li class="dropdown"><a href="javascript:void(0)" class="dropbtn">Information programmes d'études</a>
                <div class="dropdown-content">
                    <a href="/informatique">Informatique</a>
                    <a href="/genie">Génies</a>
                    <a  href="/programmes/premiercycle" >1er cycle</a>
                    <a href="/programmes/cycledeuxtrois" >2ᵉ et 3ᵉ cycles</a>
                    <a  href="/programmes/plancours">Plans de cours</a>                   
                </div>
            </li>

            <li class="dropdown"><a href="javascript:void(0)" class="dropbtn">Recherche et personnel</a>
                <div class="dropdown-content">
                    <a href="/recherche/domaine">Domaines de spécialisation</a>
                    <a href="/recherche/equipe">Équipes de recherche</a>
                    <a href="/personnel/professeurs">Professeurs</a>
                    <a href="/personnel/personnel">Personnel</a>
                </div>
            </li>

            <li class="dropdown"><a href="javascript:void(0)" class="dropbtn">Emplois</a>
                <div class="dropdown-content">
                    <a href="/emploi/creer">Créer une offre d'emploi</a>
                    <a href="emploi/offres">Offres d'emplois disponibles</a>
                </div>
            </li>

            <li ><a onclick="show();"><span class="glyphicon glyphicon-search"  ></span></a></li>
            <li >
                <form id="txtrecherche" method="get" style="display: none" action="http://www.google.com/search">
                    <input type="text" name="q" size="31" maxlength="255" value="" />
                    <input type="submit" value="Search" />
                </form>
            </li>

        </ul>
    </nav>

</div>


<div class="main" >@yield('template')</div>

</body>

<!–– Footer ––>

<footer class="footer">
    <!--
    <div class="container bottom_border">
        <div class="row">
            <div class=" col-sm-6 col-md  col-12 col">
                <h5 class="headin5 col_white pt2">Pour nous joindre</h5>
                <!--info--> <!--
                <p class="mb10">Département d'informatique et d'ingénierie - Université du Québec en Outaouais</p>
                
            </div>
                <p><i class="fa fa-location-arrow"></i>101, Saint-Jean-Bosco, C.P. 1250, succursale Hull, Gatineau (Québec) Canada, J8X 3X7</p>
                <p><i class="fa fa-phone"></i> Tél.: 819-773-1600 Télécopieur: 819-773-1638</p>
                <p><i class="fa fa fa-envelope"></i> info@example.com </p>
        </div>
                -->
    </div>


    <div class="container">
        <!--
        <ul class="foote_bottom_ul">
            <li><a href="https://uqo.ca/">UQO</a></li>
            <li><a href="/">Acceuil</a></li>
        </ul>
        -->
        <p class="text-center">Copyright @2018 | Conçu par Martine Chamberland et Jean-Philipe Tremblay</p>
        <!--Réseaux sociaux-->
        <ul class="social_footer_ul">
            <li><a href="https://www.facebook.com/Universite.Quebec.Outaouais/"><i class="fa fa-facebook-f"></i></a></li>
            <li><a href="https://twitter.com/uqo?lang=en"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://www.linkedin.com/school/universite-du-quebec-en-outaouais/"><i class="fa fa-linkedin"></i></a></li>
        </ul>
    </div>
    
</footer>

</html>

