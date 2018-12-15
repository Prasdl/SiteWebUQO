<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
    <link rel="stylesheet" type="text/css" href="styletemplate.css">

    <!-- Librairie pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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


<body>


<!–– Bar de navigation  ––>
<div class="navtop"  style="position: fixed;top: 0px;" >
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

            <li class="dropdown"><a href="javascript:void(0)" class="dropbtn">PROGRAMMES D'ÉTUDES</a>
                <div class="dropdown-content">
                    <a href="/informatique">INFO</a>
                    <a href="/genie">GÉNIE</a>
                    <a  href="/programmes/premiercycle" >1er cycle</a>
                    <a href="/programmes/cycledeuxtrois" >2ᵉ et 3ᵉ cycles</a>
                    <a  href="/programmes/plancours">Plans de cours</a>
                    <a  href="https://moodle.uqo.ca/" >Moodle</a>
                </div>
            </li>

            <li class="dropdown"><a href="javascript:void(0)" class="dropbtn">ÉTUDIANTS</a>
                <div class="dropdown-content">
                    <a href="/etudiant/cycleuninfo">1er cycle informatique</a>
                    <a href="/etudiant/cycleungenie">1er cycle génie</a>
                    <a href="/etudiant/cycledeux">2ᵉ cycle</a>
                    <a href="/etudiant/cycletrois">3ᵉ cycle</a>
                </div>
            </li>

            <li class="dropdown"><a href="javascript:void(0)" class="dropbtn">RECHERCHE</a>
                <div class="dropdown-content">
                    <a href="/recherche/domaine">Domaines de spécialisation</a>
                    <a href="/recherche/equipe">Équipes de recherche</a>
                </div>
            </li>

            <li class="dropdown"><a href="javascript:void(0)" class="dropbtn">PERSONNEL</a>
                <div class="dropdown-content">
                    <a href="/personnel/professeurs">Professeurs</a>
                    <a href="/personnel/personnel">Personnel</a>
                </div>
            </li>

            <li class="dropdown"><a href="javascript:void(0)" class="dropbtn">EMPLOIS</a>
                <div class="dropdown-content">
                    <a href="/emploi/creer">Créer une offre d'emploi</a>
                    <a href="emploi/offres">Offres d'emplois courantes</a>
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
    <div class="container bottom_border">
        <div class="row">
            <div class=" col-sm-4 col-md col-sm-4  col-12 col">
                <h5 class="headin5 col_white_ pt2">Pour nous joindre</h5>
                <!--info-->
                <p class="mb10">Département d'informatique et d'ingénierie - Université du Québec en Outaouais</p>
                <p><i class="fa fa-location-arrow"></i>101, Saint-Jean-Bosco, C.P. 1250, succursale Hull, Gatineau (Québec) Canada, J8X 3X7</p>
                <p><i class="fa fa-phone"></i> Tél.: 819-773-1600 Télécopieur: 819-773-1638</p>
                <p><i class="fa fa fa-envelope"></i> info@example.com </p>


            </div>

            <div class=" col-sm-4 col-md  col-12 col">
                <h5 class="headin5 col_white pt2">Follow us</h5>
                <!--twitter-->
                <ul class="footer_ul2">
                    <li><a href="#"><i class="fa fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
                    <li><a href="#"><i class="fa fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
                    <li><a href="#"><i class="fa fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
                </ul>

            </div>
        </div>
    </div>


    <div class="container">
        <ul class="foote_bottom_ul">
            <li><a href="https://uqo.ca/">UQO</a></li>
            <li><a href="/">Acceuil</a></li>
        </ul>

        <p class="text-center">Copyright @2018 | Conçu avec par <a href="#">Martine Chamberland et Jean-Philipe Tremblay</a></p>
        <!--Réseaux sociaux-->
        <ul class="social_footer_ul">
            <li><a href=""><i class="fa fa-facebook-f"></i></a></li>
            <li><a href=""><i class="fa fa-twitter"></i></a></li>
            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
            <li><a href=""><i class="fa fa-instagram"></i></a></li>
        </ul>

    </div>

</footer>



</html>

