@extends('layouts.template')

@section('template')

    <div id="contenu" class="panel panel-default">
        <p class="text" id="cliquer">Cliquer un nom ou une photo pour avoir plus d'information sur le professeur.<br>
        </p>
        <!-- Le "panel"   -->
        <div class="card">
            <div class="card-header" id="Omar">
                <h5 class="mb-0">
                    <!-- Le bouton du "panel"   -->
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOmar" aria-expanded="false" aria-controls="collapseOmar">
                        <img alt="Omar Abdul Wahab" style="border:1px solid" width="143" height="143" src="/img/personne/OmarAbdulWahab.png">
                        <p style="color: black">Omar&nbsp;Abdul&nbsp;Wahab</p>
                    </button>
                </h5>
            </div>
            <!-- Le contenu  du "panel"  (cacher par défaut) -->
            <div id="collapseOmar" class="collapse" >
                <div class="card-body">
                    <p>Ph.D.</p>
                    <p>(...)</p>
                    <p>Position :  </p>
                    <p>Bureau : B-2024, Pavillon Lucien-Brault</p>
                </div>
            </div>
        </div>


        <!-- Le "panel"   -->
        <div class="card">
            <div class="card-header" id="kamel">
                <h5 class="mb-0">
                    <!-- Le bouton du "panel"   -->
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsekamel" aria-expanded="false" aria-controls="collapsekamel">
                        <img alt="Kamel Adi" style="border:1px solid" width="143" height="143" src="/img/personne/KamelAdi.png">
                        <p style="color: black">Kamel&nbsp;Adi</p>
                    </button>
                </h5>
            </div>
<!-- Le contenu  du "panel"  (cacher par défaut) -->
            <div id="collapsekamel" class="collapse" >
                <div class="card-body">
                    <p>Ph.D.</p>
                    <p>(Université Laval)</p>
                        <p>Position :  Professeur régulier</p>
                        <p>Bureau : B-2012, Pavillon Lucien-Brault</p>
                        <p>Téléphone :(819) 595-3900 poste 1813</p>
                        <p>Courriel : <a title="Envoyer un courriel au professeur Kamel Adi" href="mailto:kamel.adi@uqo.ca">kamel.adi@uqo.ca</a></p>
                        <p>Plus d'informations : <a title="Visiter le site Web du professeur" href="http://w3.uqo.ca/adi/">http://w3.uqo.ca/adi/</a></p>
                    <p style="clear:both" class="profEnteteSection">Thèmes de recherche : </p>
                    <p>Langages et sémantiques formelles, sécurité informatique, commerce électronique, génie logiciel, spécifications algébriques, réécriture et surréduction, théorie des catégories.</p>
                    <p class="profEnteteSection">Publications:</p>
                    <ul>
                        <li>Allez voir la liste des productions dans cette <a href="http://apps.uqo.ca/DosEtuCorpsProf/PageProfesseur.aspx?id=kamel.adi@uqo.ca">page</a>
                        </li>
                    </ul>
                    <p class="profEnteteSection">Cours enseignés au cours des deux dernières années : </p>
                    <ul>
                        <li class="cours"><a href="">INF6103&nbsp;&nbsp;Analyse et conception des protocoles de sécurité</a>&nbsp;&nbsp;(Aut 2015)</li>
                        <li class="cours"><a href="">INF1433&nbsp;&nbsp;Initiation à la sécurité informatique</a>&nbsp;&nbsp;(Aut 2016)</li>
                        <li class="cours"><a href="">GEN1273&nbsp;&nbsp;Modélisation et simulation</a>&nbsp;&nbsp;(Aut 2016)</li>
                        <li class="cours"><a href="">INF6233&nbsp;&nbsp;Sécurité informatique et méthodes formelles</a>&nbsp;&nbsp;(Aut 2016)</li>
                        <li class="cours"><a href="">INF1433&nbsp;&nbsp;Initiation à la sécurité informatique</a>&nbsp;&nbsp;(Aut 2017)</li>
                    </ul>
                    <p class="profEnteteSection">Stagiaires postdoctoraux : </p>
                    <ul>
                        <li>Yacine Bouzida (2008-2009)</li>
                    </ul>
                    <p class="profEnteteSection">Étudiants ayant terminé : </p>
                    <ul>
                        <li>Fatiha&nbsp;Djebbar,&nbsp;Architecture logicielle distribuée pour un système d'instrumentation générique et temps réel basé sur la nouvelle génération des senseurs photoniques&nbsp;(2003, M.Sc., codirecteur)</li>
                        <li>Adnane&nbsp;El Kabbal,&nbsp;Un Système de Types pour l'Analyse des Pare-feux&nbsp;(2005, M.Sc.)</li>
                        <li>Luke&nbsp;Sullivan,&nbsp;La correction des protocoles de non-répudiation.&nbsp;(2006, M.Sc.)</li>
                        <li>Liviu&nbsp;Pene,&nbsp;Méthodes formelles pour la correction des protocoles de sécurité&nbsp;(2004, M.Sc.)</li>
                        <li>Ibrahim&nbsp;Keita,&nbsp;Sécurité des services Web: restauration d'un message SOAP après détection d'une attaque par enveloppement sur un élément signé.&nbsp;(2010, M.Sc.)</li>
                        <li>Ikhlass&nbsp;Hattak,&nbsp;Analyse formelle des politiques de sécurité&nbsp;(2010, M.Sc.)</li>
                        <li>Madjid&nbsp;Ouharoun,&nbsp;Technologies de détection d'intruision.&nbsp;(2010, M.Sc.)</li>
                        <li>Hassen&nbsp;Khalifa,&nbsp;Détection des anomalies entre les contraintes dans les politiques de contrôle d'accès&nbsp;(2013, M.Sc., codirecteur)</li>
                        <li>Sourour&nbsp;Jemili,&nbsp;Analyse de risques dans les systèmes de contrôle d'accès.&nbsp;(2013, M.Sc.)</li>
                        <li>Bone&nbsp;Maboudou,&nbsp;Un environnement pour la modélisation des systèmes de contrôle d'accès.&nbsp;(2015, M.Sc.)</li>
                    </ul>
                    <p class="profEnteteSection">Étudiants en cours de supervision : </p>
                    <ul>
                        <li>Liviu&nbsp;Pene,&nbsp;Consolidation de la sécurité de réseaux avec les languages de spécification dévoués pour des pares-feu distribués et des grappes.&nbsp;(Doctorat)</li>
                        <li>Christian&nbsp;Bucur,&nbsp;Contrôle d'accès aux données.&nbsp;(Doctorat, codirecteur)</li>
                        <li>Ikhlass&nbsp;Hattak,&nbsp;Gestion de l'identité dans les architectures orientées services.&nbsp;(Doctorat)</li>
                        <li>Nadjate&nbsp;Saïdani,&nbsp;Analyse sémantique de contenu multimédia.&nbsp;(Doctorat)</li>
                        <li>Sofiene&nbsp;Boulares,&nbsp;Approche basée sur les flux d’informations pour le calcul du risque dans les systèmes de contrôle d'accès.&nbsp;(Doctorat, codirecteur)</li>
                        <li>Oussama&nbsp;Hattack,&nbsp;Développement et évaluation d'une application pour analyser les politiques de contrôle d'accès aux données dans un système d'information.&nbsp;(Maîtrise, codirecteur)</li>
                    </ul>
                </div>
          </div>
        </div>


        <!-- Le "panel"   -->
        <div class="card">
            <div class="card-header" id="Mohand">
                <h5 class="mb-0">
                    <!-- Le bouton du "panel"   -->
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseMohand" aria-expanded="false" aria-controls="collapseMohand">
                        <img alt="Mohand S. Allili" style="border:1px solid" width="143" height="143" src="/img/personne/MohandS.Allili.png">
                        <p style="color: black">Mohand S.&nbsp;Allili</p>
                    </button>
                </h5>
            </div>
            <!-- Le contenu  du "panel"  (cacher par défaut) -->
            <div id="collapseMohand" class="collapse" >
                <div class="card-body">
                        <p>Ph.D.</p>
                        <p>(Université de Sherbrooke)</p>
                        <p>Position :  Professeur régulier</p>
                        <p>Bureau : B-2022, Pavillon Lucien-Brault</p>
                        <p>Téléphone : (819) 595-3900 poste 1601</p>
                        <p>Courriel : <a title="Envoyer un courriel au professeur Mohand S. Allili" href="mailto:mohandsaid.allili@uqo.ca">mohandsaid.allili@uqo.ca</a></p>
                        <p>Plus d'informations : <a title="Visiter le site Web du professeur" href="http://w3.uqo.ca/allimo01/">http://w3.uqo.ca/allimo01/</a></p>
                        <p style="clear:both" class="profEnteteSection">Thèmes de recherche : </p>
                        <p>Vision par ordinateur, reconnaissance de formes, infographie, traitement numérique d'images et de vidéos.</p>
                        <p class="profEnteteSection">Publications:</p>
                        <ul>
                            <li>Allez voir la liste des productions dans cette <a href="http://apps.uqo.ca/DosEtuCorpsProf/PageProfesseur.aspx?id=mohandsaid.allili@uqo.ca">page</a></li>
                        </ul>
                        <p class="profEnteteSection">Cours enseignés au cours des deux dernières années : </p>
                        <ul>
                            <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF1483_2015_1_01.html">INF1483&nbsp;&nbsp;Programmation graphique 2D/3D</a>&nbsp;&nbsp;(Hiv 2015)</li>
                            <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF6243_2015_1_01.html">INF6243&nbsp;&nbsp;Techniques d'apprentissage</a>&nbsp;&nbsp;(Hiv 2015)</li>
                            <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF7093_2015_3_01.html">INF7093&nbsp;&nbsp;Éléments avancés d'analyse d'images</a>&nbsp;&nbsp;(Aut 2015)</li>
                            <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/MAT1243_2016_1_01.html">MAT1243&nbsp;&nbsp;Probabilités et statistiques</a>&nbsp;&nbsp;(Hiv 2016)</li>
                            <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF6243_2016_3_01.html">INF6243&nbsp;&nbsp;Techniques d'apprentissage</a>&nbsp;&nbsp;(Aut 2016)</li>
                            <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF6243_2017_3_01.html">INF6243&nbsp;&nbsp;Techniques d'apprentissage</a>&nbsp;&nbsp;(Aut 2017)</li>
                        </ul>
                        <p class="profEnteteSection">Étudiants ayant terminé : </p>
                        <ul>
                            <li>Marouene&nbsp;Mejri,&nbsp;Modélisation Statistique de Transformées Multirésolutions et Application à la Détection de Défauts de Textures&nbsp;(2013, M.Sc.)</li>
                            <li>Ekpao Anani&nbsp;Passigue,&nbsp;Analyse et détection de pourriels textuels dans les réseaux sociaux par apprentissage&nbsp;(2015, M.Sc.)</li>
                            <li>Guillaume&nbsp;Larivière,&nbsp;Segmentation d'objets: approches par analyse de forme et apprentissage probabiliste&nbsp;(2012, M.Sc.)</li>
                        </ul>
                        <p class="profEnteteSection">Étudiants en cours de supervision : </p>
                        <ul>
                            <li>Ouiza&nbsp;Ouyed,&nbsp;Analyse de mouvements en utilisant les modèles probabilistes.&nbsp;(Doctorat)</li>
                            <li>N'Dah Daniel&nbsp;Yapi,&nbsp;Modélisation probabilistes des transformées multirésolution par des modèles de mélanges Gaussienne généralisées multivariées:
                                Application à la détection de défaut, à l'extration et la discrimination de texture.&nbsp;(Doctorat)</li>
                            <li>Nadjate&nbsp;Saïdani,&nbsp;Analyse sémantique de contenu multimédia.&nbsp;(Doctorat, codirecteur)</li>
                            <li>Alain&nbsp;Théroux,&nbsp;Détection et prédiction d'actions humaines par caractérisation de la forme contextuelle et l'apprentissage automatique.&nbsp;(Maîtrise)</li>
                            <li>Aymen&nbsp;Talbi,&nbsp;Exploration et visualisation de l'évolution temporelle et spatiale d'un corpus visuel.&nbsp;(Maîtrise)</li>
                        </ul>
                    </div>
                </div>
            </div>


        <!-- Le "panel"   -->
        <div class="card">
            <div class="card-header" id="Nadia">
                <h5 class="mb-0">
                    <!-- Le bouton du "panel"   -->
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseNadia" aria-expanded="false" aria-controls="collapseNadia">
                        <img alt="Nadia Baaziz" style="border:1px solid" width="143" height="143" src="/img/personne/NadiaBaaziz.png">
                        <p style="color: black">Nadia&nbsp;Baaziz</p>
                    </button>
                </h5>
            </div>
            <!-- Le contenu  du "panel"  (cacher par défaut) -->
            <div id="collapseNadia" class="collapse" >
                <div class="card-body">
                    <p>Ph.D.</p>
                    <p>(Université de Rennes I)</p>
                    <div id="profinfo">
                        <p>Position :  Professeur régulier</p>
                        <p>Bureau : B-2041, Pavillon Lucien-Brault</p>
                        <p>Téléphone : (819) 595-3900 poste 1600</p>
                        <p>Courriel : <a title="Envoyer un courriel au professeur Nadia Baaziz" href="mailto:nadia.baaziz@uqo.ca">nadia.baaziz@uqo.ca</a></p>
                        <p>Plus d'informations : <a title="Visiter le site Web du professeur" href="http://w3.uqo.ca/baazna01/">http://w3.uqo.ca/baazna01/</a></p>
                    </div>
                    <p style="clear:both" class="profEnteteSection">Thèmes de recherche : </p>
                    <p>Traitement numérique d'images et vidéo, approches par ondelettes, par contourlettes, codage et compression, standards JPEG, MPEG, bases de données d'images, extraction de primitives pour l'indexation, sécurité des données multimédias par watermarking.</p>
                    <p class="profEnteteSection">Groupes de recherche : </p>
                    <ul>
                        <li><a href="http://larim.uqo.ca/index.html">LARIM : LAboratoire de Recherche sur l'Information Multimédia</a></li>
                    </ul>
                    <p class="profEnteteSection">Publications:</p>
                    <ul>
                        <li><a href="http://w3.uqo.ca/baazna01/publications.html">Liste des publications</a></li>
                    </ul>
                    <p class="profEnteteSection">Cours enseignés au cours des deux dernières années : </p>
                    <ul>
                        <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF1173_2014_3_01.html">INF1173&nbsp;&nbsp;Analyse et gestion des exigences</a>&nbsp;&nbsp;(Aut 2014)</li>
                        <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF6223_2016_1_01.html">INF6223&nbsp;&nbsp;Systèmes de communications multimédias</a>&nbsp;&nbsp;(Hiv 2016)</li>
                        <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/GEN1423_2016_1_01.html">GEN1423&nbsp;&nbsp;Génie logiciel</a>&nbsp;&nbsp;(Hiv 2016)</li>
                        <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/GEN1223_2017_3_01.html">GEN1223&nbsp;&nbsp;Analyse et traitement numérique des signaux</a>&nbsp;&nbsp;(Aut 2017)</li>
                    </ul>
                    <p class="profEnteteSection">Étudiants ayant terminé : </p>
                    <ul>
                        <li>Ali Jabeur&nbsp;Bouzidi,&nbsp;Développement de techniques de marquage d’authentification pour la protection de données multimédias&nbsp;(2009, M.Sc.)</li>
                        <li>Khaled&nbsp;Barhoumi,&nbsp;Approche par marquage pour l'évaluation de la qualité d'image dans les dans les applications multimédias.&nbsp;(2012, M.Sc.)</li>
                        <li>Marouene&nbsp;Mejri,&nbsp;Modélisation Statistique de Transformées Multirésolutions et Application à la Détection de Défauts de Textures&nbsp;(2013, M.Sc., codirecteur)</li>
                        <li>Anis&nbsp;Ounissi,&nbsp;Analyse de la robustesse de la signature ordinale dans les attaques de clonage d'image par déplacement de copie.&nbsp;(2014, M.Sc.)</li>
                        <li>Zaied&nbsp;Ben Maaouia,&nbsp;Recherche d'images par le contenu pour la détection de copies dans les bases de données multimédias.&nbsp;(2015, M.Sc.)</li>
                    </ul>
                    <p class="profEnteteSection">Étudiants en cours de supervision : </p>
                    <ul>
                        <li>Asal&nbsp;Rouhafzay,&nbsp;&nbsp;(Doctorat)</li>
                        <li>Alain&nbsp;Théroux,&nbsp;Détection et prédiction d'actions humaines par caractérisation de la forme contextuelle et l'apprentissage automatique.&nbsp;(Maîtrise, codirecteur)</li>
                        <li>Youssef&nbsp;Akalal,&nbsp;Moments de Zernike et recherche d'images par le contenu.&nbsp;(Maîtrise)</li>
                    </ul>

                </div>
            </div>
        </div>

        <!-- Le "panel"   -->
        <div class="card">
            <div class="card-header" id="Ilham">
                <h5 class="mb-0">
                    <!-- Le bouton du "panel"   -->
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseIlham" aria-expanded="false" aria-controls="collapseIlham">
                        <img alt="Ilham Benyahia" style="border:1px solid" width="143" height="143" src="/img/personne/IlhamBenyahia.png">
                        <p style="color: black">Ilham&nbsp;Benyahia</p>
                    </button>
                </h5>
            </div>
            <!-- Le contenu  du "panel"  (cacher par défaut) -->
            <div id="collapseIlham" class="collapse" >
                <div class="card-body">
                    <p>Ph.D.</p>
                    <p>(Université de Paris 6)</p>
                    <p>Position :  Professeur régulier</p>
                    <p>Bureau : B-2034, Pavillon Lucien-Brault</p>
                    <p>Téléphone : (819) 595-3900 poste 1749</p>
                    <p>Courriel : <a title="Envoyer un courriel au professeur Ilham Benyahia" href="mailto:ilham.benyahia@uqo.ca">ilham.benyahia@uqo.ca</a></p>
                    <p>Plus d'informations : <a title="Visiter le site Web du professeur" href="http://w3.uqo.ca/benyahia/">http://w3.uqo.ca/benyahia/</a></p>
                    <p style="clear:both" class="profEnteteSection">Thèmes de recherche : </p>
                    <p>Gestion des informations, architecture des logiciels, systèmes temps réel, algorithmes génétiques, gestion de réseaux de télécommunication, programmation génétique, cadres réutilisables.</p>
                    <p class="profEnteteSection">Publications:</p>
                    <ul>
                        <li>Allez voir la liste des productions dans cette <a href="http://apps.uqo.ca/DosEtuCorpsProf/PageProfesseur.aspx?id=ilham.benyahia@uqo.ca">page</a></li>
                    </ul>
                    <p class="profEnteteSection">Cours enseignés au cours des deux dernières années : </p>
                    <ul>
                        <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF3803_2014_3_01.html">INF3803&nbsp;&nbsp;Télématique</a>&nbsp;&nbsp;(Aut 2014)</li>
                        <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF1183_2015_3_01.html">INF1183&nbsp;&nbsp;Intelligence artificielle</a>&nbsp;&nbsp;(Aut 2015)</li>
                        <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF1573_2016_1_01.html">INF1573&nbsp;&nbsp;Programmation II</a>&nbsp;&nbsp;(Hiv 2016)</li>
                        <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF6273_2016_3_01.html">INF6273&nbsp;&nbsp;Technologies avancées en télécommunication</a>&nbsp;&nbsp;(Aut 2016)</li>
                        <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF1183_2017_1_01.html">INF1183&nbsp;&nbsp;Intelligence artificielle</a>&nbsp;&nbsp;(Hiv 2017)</li>
                        <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF3803_2017_3_01.html">INF3803&nbsp;&nbsp;Télématique</a>&nbsp;&nbsp;(Aut 2017)</li>
                        <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF6273_2017_3_01.html">INF6273&nbsp;&nbsp;Technologies avancées en télécommunication</a>&nbsp;&nbsp;(Aut 2017)</li>
                    </ul>
                    <p class="profEnteteSection">Étudiants ayant terminé : </p>
                    <ul>
                        <li>Thomas&nbsp;Legault,&nbsp;Automatisation de la spécification des comportements temps réel par des traitements adaptatifs&nbsp;(2005, M.Sc.)</li>
                        <li>Vincent&nbsp;Talbot,&nbsp;Mécanismes de décision préservant la performance des systèmes distribués dynamiques&nbsp;(2010, M.Sc.)</li>
                        <li>Karim&nbsp;Baratli,&nbsp;Conception et implémentation d'un outil de filtrage de netlist pour un système de prototypage rapide&nbsp;(2012, M.Sc., codirecteur)</li>
                        <li>Hanene&nbsp;Ben Yedder,&nbsp;Gestion adaptative des véhicules d'urgence utilisant des informations en temps réel.&nbsp;(2014, M.Sc.)</li>
                        <li>Nora&nbsp;Belghazi,&nbsp;Système adaptatif multicritère d'avertissements véhiculaires basé sur le comportement des conducteurs.&nbsp;(2015, M.Sc.)</li>
                        <li>Christian&nbsp;Dechamplain,&nbsp;Étude de solutions pour l'optimisation de l'équité et la qualité de service des flux dans les réseaux Vanet avec adressage conditionnel.&nbsp;(2015, M.Sc.)</li>
                    </ul>
                    <p class="profEnteteSection">Étudiants en cours de supervision : </p>
                    <ul>
                        <li>Giancarlo&nbsp;Colmenares Sayago,&nbsp;Un système multiagent pour  la conduite coopérative basée sur la  visualisation 3 D&nbsp;(Doctorat)</li>
                        <li>Tayeb&nbsp;Mesbah,&nbsp;À déterminer&nbsp;(Doctorat)</li>
                        <li>Bappa&nbsp;Muktar,&nbsp;À déterminer&nbsp;(Doctorat)</li>
                        <li>Ghazal&nbsp;Rouhafzay,&nbsp;À déterminer&nbsp;(Doctorat)</li>
                        <li>Claude Francis&nbsp;Njoh Njoh,&nbsp;Classification et prédiction de différents modèles de trafic dans un réseau de transport.&nbsp;(Maîtrise)</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Le "panel"   -->
        <div class="card">
            <div class="card-header" id="Wojtek">
                <h5 class="mb-0">
                    <!-- Le bouton du "panel"   -->
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseWojtek" aria-expanded="false" aria-controls="collapseWojtek">
                        <img alt="Wojtek J. Bock" style="border:1px solid" width="143" height="143" src="/img/personne/WojtekJ.Bock.png">
                        <p style="color: black">Wojtek J.&nbsp;Bock</p>
                    </button>
                </h5>
            </div>
            <!-- Le contenu  du "panel"  (cacher par défaut) -->
            <div id="collapseWojtek" class="collapse" >
                <div class="card-body">
                    <p>Ph.D.</p>
                    <p>(École Polytechnique de Varsovie)</p>
                    <p>Position :  Professeur régulier</p>
                    <p>Bureau : B-2016, Pavillon Lucien-Brault</p>
                    <p>Téléphone : (819) 595-3900 poste 1623</p>
                    <p>Courriel : <a title="Envoyer un courriel au professeur Wojtek J. Bock" href="mailto:wojtek.bock@uqo.ca">wojtek.bock@uqo.ca</a></p>
                    <p>Plus d'informations : <a title="Visiter le site Web du professeur" href="http://w3.uqo.ca/labopto/">http://w3.uqo.ca/labopto/</a></p>
                    <p style="clear:both" class="profEnteteSection">Thèmes de recherche : </p>
                    <p>Senseurs en fibres optiques, métrologie et calibration de paramètres non-électriques, optoélectronique.</p>
                    <p class="profEnteteSection">Groupes de recherche : </p>
                    <ul>
                        <li><a href="http://w3.uqo.ca/d_info/">titulaire de la Chaire de recherche du Canada en photonique</a></li>
                    </ul>
                    <p class="profEnteteSection">Publications:</p>
                    <ul>
                        <li>Allez voir la liste des productions dans cette <a href="http://apps.uqo.ca/DosEtuCorpsProf/PageProfesseur.aspx?id=wojtek.bock@uqo.ca">page</a></li>
                    </ul>
                    <p class="profEnteteSection">Prix et distinctions : </p>
                    <ul>
                        <li>Prix d'excellence en recherche de l'UQO en 1998</li>
                    </ul>
                    <p class="profEnteteSection">Étudiants ayant terminé : </p>
                    <ul>
                        <li>Aleksandra&nbsp;Czapla,&nbsp;Propriétés spectrales des réseaux à longue période dotées de cristaux liquides.&nbsp;(2015, Ph.D.)</li>
                        <li>Fatiha&nbsp;Djebbar,&nbsp;Architecture logicielle distribuée pour un système d'instrumentation générique et temps réel basé sur la nouvelle génération des senseurs photoniques&nbsp;(2003, M.Sc.)</li>
                    </ul>
                    <p class="profEnteteSection">Étudiants en cours de supervision : </p>
                    <ul>
                        <li>Daniel&nbsp;Brabant,&nbsp;Modelling ant optimization of long period gratings for sensing applications.&nbsp;(Doctorat)</li>
                        <li>Yasser&nbsp;Chiniforooshan,&nbsp;Novel Fiber-optic Fluorescence Sensor for Highly Sensitive and Specific Detection of Chemical Hazards&nbsp;(Doctorat)</li>
                        <li>Monika&nbsp;Janik,&nbsp;À déterminer&nbsp;(Doctorat)</li>
                    </ul>

                </div>
            </div>
        </div>


        <!-- Le "panel"   -->
        <div class="card">
            <div class="card-header" id="Alain">
                <h5 class="mb-0">
                    <!-- Le bouton du "panel"   -->
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseAlain" aria-expanded="false" aria-controls="collapseAlain">
                        <img alt="Alain Charbonneau" style="border:1px solid" width="143" height="143" src="/img/personne/AlainCharbonneau.png">
                        <p style="color: black">Alain&nbsp;Charbonneau</p>
                    </button>
                </h5>
            </div>
            <!-- Le contenu  du "panel"  (cacher par défaut) -->
            <div id="collapseAlain" class="collapse" >
                <div class="card-body">
                    <p>Ph.D.</p>
                    <p>(Université Laval)</p>
                    <p>Position :  Professeur régulier</p>
                    <p>Bureau : B-2026, Pavillon Lucien-Brault</p>
                    <p>Téléphone : (819) 595-3900 poste 1704</p>
                    <p>Courriel : <a title="Envoyer un courriel au professeur Alain Charbonneau" href="mailto:alain.charbonneau@uqo.ca">alain.charbonneau@uqo.ca</a></p>
                    <p>Plus d'informations : <a title="Visiter le site Web du professeur" href="http://w3.uqo.ca/charal02/">http://w3.uqo.ca/charal02/</a></p>
                </div>
                <p style="clear:both" class="profEnteteSection">Thèmes de recherche : </p>
                <p>Méthodes numériques. Éléments finis. Simulation numérique de guides optiques. Traduction automatique statistique. Méthodes de classification automatique de textes.</p>
                <p class="profEnteteSection">Publications:</p>
                <ul>
                    <li>Allez voir la liste des productions dans cette <a href="http://apps.uqo.ca/DosEtuCorpsProf/PageProfesseur.aspx?id=alain.charbonneau@uqo.ca">page</a></li>
                </ul>
                <p class="profEnteteSection">Cours enseignés au cours des deux dernières années : </p>
                <ul>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/GEN1373_2017_1_01.html">GEN1373&nbsp;&nbsp;Statistiques de l'ingénieur</a>&nbsp;&nbsp;(Hiv 2017)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/MAT1243_2017_1_01.html">MAT1243&nbsp;&nbsp;Probabilités et statistiques</a>&nbsp;&nbsp;(Hiv 2017)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/GEN1383_2017_1_01.html">GEN1383&nbsp;&nbsp;Méthodes d'analyse de l'ingénieur</a>&nbsp;&nbsp;(Hiv 2017)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/GEN1503_2017_3_01.html">GEN1503&nbsp;&nbsp;Mathématiques de l'ingénieur I</a>&nbsp;&nbsp;(Aut 2017)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/MAT3243_2017_3_01.html">MAT3243&nbsp;&nbsp;Analyse réelle</a>&nbsp;&nbsp;(Aut 2017)</li>
                </ul>
            </div>
        </div>
    </div>


    <!-- Le "panel"   -->
    <div class="card">
        <div class="card-header" id="Jurek">
            <h5 class="mb-0">
                <!-- Le bouton du "panel"   -->
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseJurek" aria-expanded="false" aria-controls="collapseJurek">
                    <img alt="Jurek Czyzowicz" style="border:1px solid" width="143" height="143" src="/img/personne/JurekCzyzowicz.png">
                    <p style="color: black">Jurek&nbsp;Czyzowicz</p>
                </button>
            </h5>
        </div>
        <!-- Le contenu  du "panel"  (cacher par défaut) -->
        <div id="collapseJurek" class="collapse" >
            <div class="card-body">
                <p>Ph.D.</p>
                <p>(Université de Varsovie)</p>
                <p>Position :  Professeur régulier</p>
                <p>Bureau : B-2020, Pavillon Lucien-Brault</p>
                <p>Téléphone : (819) 595-3900 poste 1618</p>
                <p>Courriel : <a title="Envoyer un courriel au professeur Jurek Czyzowicz" href="mailto:jurek@uqo.ca">jurek@uqo.ca</a></p>
                <p>Plus d'informations : <a title="Visiter le site Web du professeur" href="http://w3.uqo.ca/czyzju01/index.html">http://w3.uqo.ca/czyzju01/index.html</a></p>
                <p style="clear:both" class="profEnteteSection">Thèmes de recherche : </p>
                <p>Informatique théorique, algorithmique, géométrie algorithmique, planification de trajectoires, systèmes d'informations géographiques, programmation, structures de données.</p>
                <p class="profEnteteSection">Publications:</p>
                <ul>
                    <li>Allez voir la liste des productions dans cette <a href="http://apps.uqo.ca/DosEtuCorpsProf/PageProfesseur.aspx?id=jurek@uqo.ca">page</a></li>
                </ul>
                <p class="profEnteteSection">Cours enseignés au cours des deux dernières années : </p>
                <ul>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF6123_2015_3_01.html">INF6123&nbsp;&nbsp;Structures de données avancées</a>&nbsp;&nbsp;(Aut 2015)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF4063_2016_1_01.html">INF4063&nbsp;&nbsp;Structures des informations I</a>&nbsp;&nbsp;(Hiv 2016)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF4063_2016_3_01.html">INF4063&nbsp;&nbsp;Structures des informations I</a>&nbsp;&nbsp;(Aut 2016)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF6133_2016_3_01.html">INF6133&nbsp;&nbsp;Algorithmes géométriques</a>&nbsp;&nbsp;(Aut 2016)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF4063_2017_3_01.html">INF4063&nbsp;&nbsp;Structures des informations I</a>&nbsp;&nbsp;(Aut 2017)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF6123_2017_3_01.html">INF6123&nbsp;&nbsp;Structures de données avancées</a>&nbsp;&nbsp;(Aut 2017)</li>
                </ul>
                <p class="profEnteteSection">Étudiants ayant terminé : </p>
                <ul>
                    <li>Cédric&nbsp;Bastien,&nbsp;Équivalence des grammaires de fonction simple&nbsp;(2006, M.Sc.)</li>
                    <li>Jacquelin&nbsp;Caron,&nbsp;Une analyse des saisies optimales des polygones convexes.&nbsp;(2008, M.Sc.)</li>
                    <li>Geneviève&nbsp;Roberge,&nbsp;Visualisation des résultats de la fouille des données dans les treillis des concepts&nbsp;(2007, M.Sc., codirecteur)</li>
                    <li>Frédérick&nbsp;Lessard,&nbsp;Exploration optimale d'un segment de droite par deux agents mobiles.&nbsp;(2013, M.Sc.)</li>
                    <li>Mélanie&nbsp;Roy,&nbsp;Exploration des arbres par un essaim d'agents&nbsp;(2012, M.Sc., codirecteur)</li>
                    <li>Julian&nbsp;Anaya,&nbsp;Échange des messages entre agents mobiles dans les réseaux.&nbsp;(2014, M.Sc.)</li>
                    <li>Arthur&nbsp;Stec,&nbsp;Exploration optimale d'un segment de droite par un ensemble de robots mobiles.&nbsp;(2015, M.Sc.)</li>
                    <li>Ion&nbsp;Arbone,&nbsp;Immobilisation de polygones par des ensembles donnés de points.&nbsp;(2015, M.Sc.)</li>
                </ul>
                <p class="profEnteteSection">Étudiants en cours de supervision : </p>
                <ul>
                    <li>Jean&nbsp;Moussi,&nbsp;Algorithmes pour les agents mobiles.&nbsp;(Doctorat)</li>
                    <li>Maxime&nbsp;Godon,&nbsp;&nbsp;(Doctorat)</li>
                    <li>Alexandre&nbsp;Lemieux,&nbsp;Exploration d'un anneau par les robots mobiles.&nbsp;(Maîtrise)</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Le "panel"   -->
    <div class="card">
        <div class="card-header" id="Alan">
            <h5 class="mb-0">
                <!-- Le bouton du "panel"   -->
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseAlan" aria-expanded="false" aria-controls="collapseAlan">
                    <img alt="Alan Davoust" style="border:1px solid" width="143" height="143" src="/img/personne/AlanDavoust.png">
                    <p style="color: black">Alan&nbsp;Davoust</p>
                </button>
            </h5>
        </div>
        <!-- Le contenu  du "panel"  (cacher par défaut) -->
        <div id="collapseAlan" class="collapse" >
            <div class="card-body">
                <p>Ph.D.</p>
                <p>(...)</p>
                <p>Position :  </p>
                <p>Bureau : B-2073, Pavillon Lucien-Brault</p>
            </div>
        </div>
    </div>


    <!-- Le "panel"   -->
    <div class="card">
        <div class="card-header" id="Tinko">
            <h5 class="mb-0">
                <!-- Le bouton du "panel"   -->
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTinko" aria-expanded="false" aria-controls="collapseTinko">
                    <img alt="Tinko Eftimov" style="border:1px solid" width="143" height="143" src="/img/personne/TinkoEftimov.png">
                    <p style="color: black">Tinko&nbsp;Eftimov</p>
                </button>
            </h5>
        </div>
        <!-- Le contenu  du "panel"  (cacher par défaut) -->
        <div id="collapseTinko" class="collapse" >
            <div class="card-body">
                <p>Ph.D.</p>
                <p>(Université de Sofia)</p>
                <p>Position :  Professeur régulier</p>
                <p>Bureau : B-2018, Pavillon Lucien-Brault</p>
                <p>Téléphone :(819) 595-3900 poste 1734</p>
                <p>Courriel : <a title="Envoyer un courriel au professeur Tinko Eftimov" href="mailto:tinko.eftimov@uqo.ca">tinko.eftimov@uqo.ca</a></p>
                <p>Plus d'informations : <a title="Visiter le site Web du professeur" href="http://w3.uqo.ca/photonique/En/TEftimov.php">http://w3.uqo.ca/photonique/En/TEftimov.php</a></p>
                <p style="clear:both" class="profEnteteSection">Thèmes de recherche : </p>
                <p>Fibres optiques, polarisation, capteurs fibre optiques, multiplexage, fluorescence, calcul matriciel, conception des composants et modules optiques et spectroscopiques, éconophysique</p>
                <p class="profEnteteSection">Publications:</p>
                <ul>
                    <li>Allez voir la liste des productions dans cette <a href="http://apps.uqo.ca/DosEtuCorpsProf/PageProfesseur.aspx?id=tinko.eftimov@uqo.ca">page</a></li>
                </ul>
                <p class="profEnteteSection">Cours enseignés au cours des deux dernières années : </p>
                <ul>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/GEN0123_2017_1_01.html">GEN0123&nbsp;&nbsp;Physique mécanique et optique</a>&nbsp;&nbsp;(Hiv 2017)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/GEN1123_2017_1_01.html">GEN1123&nbsp;&nbsp;Électronique II</a>&nbsp;&nbsp;(Hiv 2017)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/GEN1653_2017_3_01.html">GEN1653&nbsp;&nbsp;Électromagnétisme appliqué</a>&nbsp;&nbsp;(Aut 2017)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/GEN1033_2017_3_01.html">GEN1033&nbsp;&nbsp;Statique</a>&nbsp;&nbsp;(Aut 2017)</li>
                </ul>
            </div>
        </div>
    </div>


    <!-- Le "panel"   -->
    <div class="card">
        <div class="card-header" id="Karim">
            <h5 class="mb-0">
                <!-- Le bouton du "panel"   -->
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseKarim" aria-expanded="false" aria-controls="collapseKarim">
                    <img alt="Karim El Guemhioui" style="border:1px solid" width="143" height="143" src="/img/personne/KarimElGuemhioui.png">
                    <p style="color: black">Karim&nbsp;El Guemhioui</p>
                </button>
            </h5>
        </div>
        <!-- Le contenu  du "panel"  (cacher par défaut) -->
        <div id="collapseKarim" class="collapse" >
            <div class="card-body">
                <p>Ph.D.</p>
                <p>(Université du Connecticut)</p>
                <p>Position :  Professeur régulier</p>
                <p>Bureau : B-0123, Pavillon Lucien-Brault</p>
                <p>Téléphone :(819) 595-3900 poste 1620</p>
                <p>Courriel : <a title="Envoyer un courriel au professeur Karim El Guemhioui" href="mailto:karim.elguemhioui@uqo.ca">karim.elguemhioui@uqo.ca</a></p>
                <p>Plus d'informations : <a title="Visiter le site Web du professeur" href="http://w3.uqo.ca/karim/">http://w3.uqo.ca/karim/</a></p>
                <p style="clear:both" class="profEnteteSection">Thèmes de recherche : </p>
                <p>Ingénierie logicielle. Orienté-objet. Systèmes distribués. Ingénierie dirigée par les modèles. Middleware.</p>
                <p class="profEnteteSection">Publications:</p>
                <ul>
                    <li>Allez voir la liste des productions dans cette <a href="http://apps.uqo.ca/DosEtuCorpsProf/PageProfesseur.aspx?id=karim.elguemhioui@uqo.ca">page</a></li>
                </ul>
                <p class="profEnteteSection">Cours enseignés au cours des deux dernières années : </p>
                <ul>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/GEN1423_2015_1_01.html">GEN1423&nbsp;&nbsp;Génie logiciel</a>&nbsp;&nbsp;(Hiv 2015)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF6031_2015_1_01.html">INF6031&nbsp;&nbsp;Rédaction et présentation scientifiques</a>&nbsp;&nbsp;(Hiv 2015)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF6253_2017_1_01.html">INF6253&nbsp;&nbsp;Web sémantique</a>&nbsp;&nbsp;(Hiv 2017)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF6031_2017_1_01.html">INF6031&nbsp;&nbsp;Rédaction et présentation scientifiques</a>&nbsp;&nbsp;(Hiv 2017)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF1163_2017_3_01.html">INF1163&nbsp;&nbsp;Modélisation et conception orientée objet</a>&nbsp;&nbsp;(Aut 2017)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/MAT1153_2017_3_01.html">MAT1153&nbsp;&nbsp;Structures discrètes</a>&nbsp;&nbsp;(Aut 2017)</li>
                </ul>
                <p class="profEnteteSection">Étudiants ayant terminé : </p>
                <ul>
                    <li>Aymeric Hubert&nbsp;Nys,&nbsp;Conception d'un service de licence transparent et évolutif pour CORBA&nbsp;(2005, M.Sc.)</li>
                    <li>Jamal&nbsp;Abd-Ali,&nbsp;Métamodélisation et transformation automatique de PSM dans une approche MDA&nbsp;(2006, M.Sc.)</li>
                    <li>Pascal&nbsp;Savard,&nbsp;Étude des techniques de marche en environnement virtuel de bureau&nbsp;(2007, M.Sc.)</li>
                </ul>
                <p class="profEnteteSection">Étudiants en cours de supervision : </p>
                <ul>
                    <li>Ebru&nbsp;Dalbudak,&nbsp;Utilisation des Méthodes Agiles et simulation dans les projets en Technologie de l’Information.&nbsp;(Doctorat, codirecteur)</li>
                    <li>Jamal&nbsp;Abd-Ali,&nbsp;Spécification des exigences de contrôle d’accès en modèles.&nbsp;(Doctorat)</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Le "panel"   -->
    <div class="card">
        <div class="card-header" id="Michal">
            <h5 class="mb-0">
                <!-- Le bouton du "panel"   -->
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseMichal" aria-expanded="false" aria-controls="collapseMichal">
                    <img alt="Michal Iglewski" style="border:1px solid" width="143" height="143" src="/img/personne/MichalIglewski.png">
                    <p style="color: black">Michal&nbsp;Iglewski</p>
                </button>
            </h5>
        </div>
        <!-- Le contenu  du "panel"  (cacher par défaut) -->
        <div id="collapseMichal" class="collapse" >
            <div class="card-body">
                <p>Ph.D.</p>
                <p>(Institut informatique de l'académie polonaise des sciences)</p>
                <p>Position :  Professeur régulier</p>
                <p>Bureau : B-2024, Pavillon Lucien-Brault</p>
                <p>Téléphone :(819) 595-3900 poste 1602</p>
                <p>Courriel : <a title="Envoyer un courriel au professeur Michal Iglewski" href="mailto:iglewski@uqo.ca">iglewski@uqo.ca</a></p>
                <p>Plus d'informations : <a title="Visiter le site Web du professeur" href="http://w3.uqo.ca/iglewski">http://w3.uqo.ca/iglewski</a></p>
            </div>
            <p style="clear:both" class="profEnteteSection">Thèmes de recherche : </p>
            <p>Génielogiciel, méthodes formelles, tests, internet, traitement automatique du langage naturel.</p>
            <p class="profEnteteSection">Publications:</p>
            <ul>
                <li>Allez voir la liste des productions dans cette <a href="http://apps.uqo.ca/DosEtuCorpsProf/PageProfesseur.aspx?id=iglewski@uqo.ca">page</a></li>
            </ul>
            <p class="profEnteteSection">Cours enseignés au cours des deux dernières années : </p>
            <ul>
                <li class="cours">
                    <a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF1583_2017_3_01.html">INF1583&nbsp;&nbsp;Développement des systèmes informatiques</a>&nbsp;&nbsp;(Aut 2017)</li>
            </ul>
            <p class="profEnteteSection">Étudiants ayant terminé : </p>
            <ul>
                <li>Luis Eugenio&nbsp;Cardenas,&nbsp;Génération automatique de tests à partir de la spécification de besoins&nbsp;(2007, M.Sc.)</li>
                <li>Éric&nbsp;Lafleur,&nbsp;Évaluation de la qualité des applications web&nbsp;(2008, M.Sc.)</li>
                <li>Ibrahim&nbsp;Keita,&nbsp;Sécurité des services Web: restauration d'un message SOAP après détection d'une attaque par enveloppement sur un élément signé.&nbsp;(2010, M.Sc., codirecteur)</li>
            </ul>
            <p class="profEnteteSection">Étudiants en cours de supervision : </p>
            <ul>
                <li>Wassim&nbsp;El-Kass,&nbsp;Intégration des environnements de traitements du Web sémantique et de l'information non-structuré.&nbsp;(Doctorat, codirecteur)</li>
                <li>Samir&nbsp;Chabou,&nbsp;Reconnaissance sémantique et contextuelle des entités et relations médicales pour répondre à des questions médicales bilingues basées sur le modèle PICO.&nbsp;(Doctorat)</li>
                <li>Valérie&nbsp;Levasseur,&nbsp;Utilisation du type de question dans la recherche sémantique d'articles médicaux avec la méthodologie PICO.&nbsp;(Maîtrise)</li>
                <li>Osman Hachi&nbsp;Mohamed,&nbsp;L'identification des éléments Intervention et Comparaison dans les textes médicaux&nbsp;(Maîtrise)</li>
            </ul>
        </div>
    </div>
    </div>


    <!-- Le "panel"   -->
    <div class="card">
        <div class="card-header" id="Michael">
            <h5 class="mb-0">
                <!-- Le bouton du "panel"   -->
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseMichael" aria-expanded="false" aria-controls="collapseMichael">
                    <img alt="Michael Korwin-Pawlowski" style="border:1px solid" width="143" height="143" src="/img/personne/MichaelKorwin-Pawlowski.png">
                    <p style="color: black">Michael&nbsp;Korwin-Pawlowski</p>
                </button>
            </h5>
        </div>
        <!-- Le contenu  du "panel"  (cacher par défaut) -->
        <div id="collapseMichael" class="collapse" >
            <div class="card-body">
                <p>Ph.D.</p>
                <p>(University of Waterloo)</p>
                <p>Position :  Professeur régulier</p>
                <p>Bureau : B-2008, Pavillon Lucien-Brault</p>
                <p>Téléphone : (819) 595-3900 poste 1626</p>
                <p>Courriel : <a title="Envoyer un courriel au professeur Michael Korwin-Pawlowski" href="mailto:michael.korwin-pawlowski@uqo.ca">michael.korwin-pawlowski@uqo.ca</a></p>
                <p>Plus d'informations : <a title="Visiter le site Web du professeur" href="http://www.uqo.ca/corps-professoral/prof/korwin-pawlowskimic.asp">http://www.uqo.ca/corps-professoral/prof/korwin-pawlowskimic.asp</a></p>
            </div>
            <p style="clear:both" class="profEnteteSection">Thèmes de recherche : </p>
            <p>Photonique: capteurs en fibres optiques, détection des matériaux explosifs par méthodes photoniques.
                Microélectronique: technologies VLSI sous-nanométriques, couches diélectriques ultraminces.
                Science de matériaux: technologies de couches minces pour capteurs en fibres optiques.
                Science, technologies et société: effets économiques et sociaux des nouvelles technologies.</p>
            <p class="profEnteteSection">Publications:</p>
            <ul>
                <li>Allez voir la liste des productions dans cette <a href="http://apps.uqo.ca/DosEtuCorpsProf/PageProfesseur.aspx?id=michael.korwin-pawlowski@uqo.ca">page</a></li>
            </ul>
            <p class="profEnteteSection">Cours enseignés au cours des deux dernières années : </p>
            <ul>
                <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/GEN1123_2016_1_01.html">GEN1123&nbsp;&nbsp;Électronique II</a>&nbsp;&nbsp;(Hiv 2016)</li>
                <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/GEN1363_2016_1_01.html">GEN1363&nbsp;&nbsp;Économique du génie</a>&nbsp;&nbsp;(Hiv 2016)</li>
                <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/GEN1023_2017_3_01.html">GEN1023&nbsp;&nbsp;Matériaux I</a>&nbsp;&nbsp;(Aut 2017)</li>
                <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/GEN1103_2017_3_01.html">GEN1103&nbsp;&nbsp;Électronique</a>&nbsp;&nbsp;(Aut 2017)</li>
                <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/SOC2673_2017_3_01.html">SOC2673&nbsp;&nbsp;Science, technologie, information et société</a>&nbsp;&nbsp;(Aut 2017)</li>
            </ul>
        </div>
    </div>
    </div>


    <!-- Le "panel"   -->
    <div class="card">
        <div class="card-header" id="Ahmed">
            <h5 class="mb-0">
                <!-- Le bouton du "panel"   -->
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseAhmed" aria-expanded="false" aria-controls="collapseAhmed">
                    <img alt="Ahmed Lakhssassi" style="border:1px solid" width="143" height="143" src="/img/personne/AhmedLakhssassi.png">
                    <p style="color: black">Ahmed&nbsp;Lakhssassi</p>
                </button>
            </h5>
        </div>
        <!-- Le contenu  du "panel"  (cacher par défaut) -->
        <div id="collapseAhmed" class="collapse" >
            <div class="card-body">
                <p>Ph.D.</p>
                <p>(Institut National de Recherche Scientifique)</p>
                <p>Position :  Professeur régulier</p>
                <p>Bureau : B-2014, Pavillon Lucien-Brault </p>
                <p>Téléphone :(819) 595-3900 poste 1610</p>
                <p>Courriel : <a title="Envoyer un courriel au professeur Ahmed Lakhssassi" href="mailto:ahmed.lakhssassi@uqo.ca">ahmed.lakhssassi@uqo.ca</a></p>
                <p>Plus d'informations : <a title="Visiter le site Web du professeur" href="http://w3.uqo.ca/lakhsasi/">http://w3.uqo.ca/lakhsasi/</a></p>
                <p style="clear:both" class="profEnteteSection">Thèmes de recherche : </p>
                <p>Aspects thermiques dans les Microsystèmes VLSI, systèmes embarqués et prototypage rapide sur FPGA, MEMS, réseau de senseurs embarqués, diffusion thermique dans les tissus biologique, monitorage, algorithmes de détection et de reconnaissance.</p>
                <p class="profEnteteSection">Publications:</p>
                <ul>
                    <li>Allez voir la liste des productions dans cette <a href="http://apps.uqo.ca/DosEtuCorpsProf/PageProfesseur.aspx?id=ahmed.lakhssassi@uqo.ca">page</a></li>
                </ul>
                <p class="profEnteteSection">Cours enseignés au cours des deux dernières années : </p>
                <ul>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/GEN6063_2014_1_SO.html">GEN6063&nbsp;&nbsp;Conception avancée des systèmes numériques programmables</a>&nbsp;&nbsp;(Hiv 2014)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/GEN6043_2014_3_01.html">GEN6043&nbsp;&nbsp;Conception avancée de microsystèmes intégrés</a>&nbsp;&nbsp;(Aut 2014)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/GEN1333_2016_1_01.html">GEN1333&nbsp;&nbsp;Conception de circuits intégrés</a>&nbsp;&nbsp;(Hiv 2016)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/GEN6093_2016_3_01.html">GEN6093&nbsp;&nbsp;Conception avancée des microsystèmes intégrés</a>&nbsp;&nbsp;(Aut 2016)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/GEN1243_2016_3_01.html">GEN1243&nbsp;&nbsp;Conception de systèmes digitaux</a>&nbsp;&nbsp;(Aut 2016)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/GEN1543_2017_1_01.html">GEN1543&nbsp;&nbsp;Ingénierie : aspects professionnels, éthiques, sociaux et environnementaux</a>&nbsp;&nbsp;(Hiv 2017)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF9006_2017_3_01.html">INF9006&nbsp;&nbsp;Examen de synthèse</a>&nbsp;&nbsp;(Aut 2017)</li>
                </ul>
                <p class="profEnteteSection">Étudiants ayant terminé : </p>
                <ul>
                    <li>Hicham&nbsp;Chaoui,&nbsp;Implantation sur FPGA d'une loi de commande adaptative neuronale supervisée pour une articulation flexible&nbsp;(2005, M.Sc.)</li>
                    <li>Charbel&nbsp;Boustany,&nbsp;Design et implémentation sur un circuit VLSI d'un algorithme de détection en temps réel des pics thermiques&nbsp;(2006, M.Sc.)</li>
                    <li>Karim&nbsp;Baratli,&nbsp;Conception et implémentation d'un outil de filtrage de netlist pour un système de prototypage rapide&nbsp;(2012, M.Sc.)</li>
                    <li>Michel&nbsp;Saydé,&nbsp;Méthode de détection de la contraintethermomécanique dans lesmicrosystèmes intégrés&nbsp;(2013, M.Sc.)</li>
                </ul>
                <p class="profEnteteSection">Étudiants en cours de supervision : </p>
                <ul>
                    <li>Mohammedi&nbsp;Yahya,&nbsp;Étude, modélisation et simulation du transport de chaleur dans les tissus biologiques  appliqué à la dosimétrie.&nbsp;(Doctorat)</li>
                    <li>Fathi&nbsp;Ben Hamouda,&nbsp;Les techniques de détection de multiples sources de chaleurs.&nbsp;(Doctorat)</li>
                    <li>Karim&nbsp;Baratli,&nbsp;Étude, conception et implémentation d'un algorithme pour la préservation de l'appariement des composantes critiques entre technologies des circuits intégrés.&nbsp;(Doctorat)</li>
                    <li>Mariem&nbsp;Ben Hamouda,&nbsp;Étude, modélisation et simulation du transport de chaleur dans les tissus biologiques.&nbsp;(Doctorat)</li>
                    <li>Youcef&nbsp;Fouzar,&nbsp;&nbsp;(Doctorat)</li>
                    <li>Idir&nbsp;Mellal,&nbsp;Étude, implémentation sur puce de l'équation du transport de chaleur dans les tissus biologiques.&nbsp;(Doctorat)</li>
                    <li>Mhamed&nbsp;Nour,&nbsp;Étude, modélisation non-linéaire du transport de chaleur dans les tissus biologique appliqué à la dosimétrie pulsée par laser.&nbsp;(Doctorat)</li>
                    <li>Aziz&nbsp;Oukaira,&nbsp;Système de monitorage thermique dans les microsystèmes VLSI.&nbsp;(Doctorat)</li>
                    <li>Sadreddine&nbsp;Sarray,&nbsp;Mesure des paramètres et la qualité d'un faisceau laser, et définir les paramètres critiques qui influencent la mesure, la précision, la sécurité humaine.&nbsp;(Doctorat)</li>
                    <li>Michel&nbsp;Saydé,&nbsp;&nbsp;(Doctorat)</li>
                    <li>Ebru&nbsp;Dalbudak,&nbsp;Utilisation des Méthodes Agiles et simulation dans les projets en Technologie de l’Information.&nbsp;(Doctorat)</li>
                    <li>Ouafaa&nbsp;Ettahri,&nbsp;À déterminer&nbsp;(Doctorat)</li>
                    <li>Mohammed Bougataya (doctorat, UQTR)</li>
                </ul>
            </div>
        </div>
    </div>


    <!-- Le "panel"   -->
    <div class="card">
        <div class="card-header" id="Frederic">
            <h5 class="mb-0">
                <!-- Le bouton du "panel"   -->
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFrederic" aria-expanded="false" aria-controls="collapseFrederic">
                    <img alt="Frédéric Lesage" style="border:1px solid" width="143" height="143" src="/img/personne/FredericLesage.png">
                    <p style="color: black">Frédéric&nbsp;Lesage</p>
                </button>
            </h5>
        </div>
        <!-- Le contenu  du "panel"  (cacher par défaut) -->
        <div id="collapseFrederic" class="collapse" >
            <div class="card-body">
                <p>Ph.D.</p>
                <p>(McMaster University)</p>
                <p>Position :  Professeur régulier</p>
                <p>Bureau : B-0125, Pavillon Lucien-Brault</p>
                <p>Téléphone :(819) 595-3900 poste 1620</p>
                <p>Courriel : <a title="Envoyer un courriel au professeur Frédéric Lesage" href="mailto:frederic.lesage@uqo.ca">frederic.lesage@uqo.ca</a></p>
                <p>Plus d'informations : <a title="Visiter le site Web du professeur" href="http://w3.uqo.ca/lesafr01/">http://w3.uqo.ca/lesafr01/</a></p>
                <p style="clear:both" class="profEnteteSection">Thèmes de recherche : </p>
                <p>Thermoélectricité, conversion de l’énergie thermique, modélisation mathématique de l’ébullition, récupération thermoélectrique de l’énergie solaire, caloducs, transport thermique, réchauffement de cellules photovoltaïques.</p>
                <p class="profEnteteSection">Publications:</p>
                <ul>
                    <li>Allez voir la liste des productions dans cette <a href="http://apps.uqo.ca/DosEtuCorpsProf/PageProfesseur.aspx?id=frederic.lesage@uqo.ca">page</a></li>
                </ul>
                <p class="profEnteteSection">Cours enseignés au cours des deux dernières années : </p>
                <ul>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/GEN1503_2015_3_01.html">GEN1503&nbsp;&nbsp;Mathématiques de l'ingénieur I</a>&nbsp;&nbsp;(Aut 2015)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/GEN1683_2017_1_01.html">GEN1683&nbsp;&nbsp;Énergies renouvelables</a>&nbsp;&nbsp;(Hiv 2017)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/GEN1643_2017_1_01.html">GEN1643&nbsp;&nbsp;Thermodynamique</a>&nbsp;&nbsp;(Hiv 2017)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF9073_2017_1_01.html">INF9073&nbsp;&nbsp;Séminaire en sciences et technologies de l'information</a>&nbsp;&nbsp;(Hiv 2017)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/GEN1523_2017_1_01.html">GEN1523&nbsp;&nbsp;Mathématiques de l'ingénieur II</a>&nbsp;&nbsp;(Hiv 2017)</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Le "panel"   -->
    <div class="card">
        <div class="card-header" id="Luigi">
            <h5 class="mb-0">
                <!-- Le bouton du "panel"   -->
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseLuigi" aria-expanded="false" aria-controls="collapseLuigi">
                    <img alt="Luigi Logrippo" style="border:1px solid" width="143" height="143" src="/img/personne/LuigiLogrippo.png">
                    <p style="color: black">Luigi&nbsp;Logrippo</p>
                </button>
            </h5>
        </div>
        <!-- Le contenu  du "panel"  (cacher par défaut) -->
        <div id="collapseLuigi" class="collapse" >
            <div class="card-body">
                <p>Ph.D.</p>
                <p>(University of Waterloo)</p>
                <p>Position :  Professeur régulier</p>
                <p>Bureau : B-2010, Pavillon Lucien-Brault</p>
                <p>Téléphone :(819) 595-3900 poste 1885</p>
                <p>Courriel : <a title="Envoyer un courriel au professeur Luigi Logrippo" href="mailto:luigi.logrippo@uqo.ca">luigi.logrippo@uqo.ca</a></p>
                <p>Plus d'informations : <a title="Visiter le site Web du professeur" href="http://w3.uqo.ca/luigi/">http://w3.uqo.ca/luigi/</a></p>
                <p style="clear:both" class="profEnteteSection">Thèmes de recherche : </p>
                <p>Méthodes formelles avec application à la conception de logiciels dans les domaines suivants : protocoles de communication; sécurité et contrôle d'accès;  fonctionnalités avancées dans Voix sur IP, interaction de fonctionnalités; commerce électronique; systèmes normatifs, leur analyse logique.</p>
                <p class="profEnteteSection">Publications:</p>
                <ul>
                    <li>Allez voir la liste des productions dans cette <a href="http://apps.uqo.ca/DosEtuCorpsProf/PageProfesseur.aspx?id=luigi.logrippo@uqo.ca">page</a></li>
                </ul>
                <p class="profEnteteSection">Cours enseignés au cours des deux dernières années : </p>
                <ul>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF6263_2015_3_01.html">INF6263&nbsp;&nbsp;Ingénierie des protocoles de communication</a>&nbsp;&nbsp;(Aut 2015)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF6153_2016_1_01.html">INF6153&nbsp;&nbsp;Système de contrôle d'accès aux données</a>&nbsp;&nbsp;(Hiv 2016)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF6031_2016_1_01.html">INF6031&nbsp;&nbsp;Rédaction et présentation scientifiques</a>&nbsp;&nbsp;(Hiv 2016)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF3723_2016_3_01.html">INF3723&nbsp;&nbsp;Systèmes d'exploitation</a>&nbsp;&nbsp;(Aut 2016)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF1153_2017_1_01.html">INF1153&nbsp;&nbsp;Cybercriminalité et techniques d'investigation</a>&nbsp;&nbsp;(Hiv 2017)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF9073_2017_1_01.html">INF9073&nbsp;&nbsp;Séminaire en sciences et technologies de l'information</a>&nbsp;&nbsp;(Hiv 2017)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF3723_2017_3_01.html">INF3723&nbsp;&nbsp;Systèmes d'exploitation</a>&nbsp;&nbsp;(Aut 2017)</li>
                </ul>
                <p class="profEnteteSection">Stagiaires postdoctoraux : </p>
                <ul>
                    <li>Yacine Bouzida (2008-2009)</li>
                </ul>
                <p class="profEnteteSection">Étudiants ayant terminé : </p>
                <ul>
                    <li>Omar&nbsp;Abahmane,&nbsp;Contrôle de flux d'informations basé sur la granularité.&nbsp;(2015, Ph.D.)</li>
                    <li>Mahdi&nbsp;Mankai,&nbsp;Vérification et analyse des politiques de contrôle d'accès : Application au langage XACML&nbsp;(2006, M.Sc.)</li>
                    <li>Ahmed Fahdel&nbsp;Layouni,&nbsp;Méthode formelle de détection d'interactions pour les politiques du contrôle d'appel téléphonique&nbsp;(2007, M.Sc.)</li>
                    <li>Gregory&nbsp;Estienne,&nbsp;Les fonctionnalités de présence en VoIPProgrammation de services sensibles au contexte en téléphonie sur IP&nbsp;(2008, M.Sc.) </li>
                    <li>Ikhlass&nbsp;Hattak,&nbsp;Analyse formelle des politiques de sécurité&nbsp;(2010, M.Sc., codirecteur)</li>
                    <li>Soufiene&nbsp;Boulares,&nbsp;Méthodes formelles pour contrôle d'accès.&nbsp;(2010, M.Sc.)</li>
                    <li>Yakine&nbsp;Layouni,&nbsp;Détection des conflits dans les politiques de contrôle d'accès&nbsp;(2010, M.Sc.)</li>
                    <li>Hassen&nbsp;Khalifa,&nbsp;Détection des anomalies entre les contraintes dans les politiques de contrôle d'accès&nbsp;(2013, M.Sc.)</li>
                    <li>Sourour&nbsp;Jemili,&nbsp;Analyse de risques dans les systèmes de contrôle d'accès.&nbsp;(2013, M.Sc., codirecteur)</li>
                    <li>Bone&nbsp;Maboudou,&nbsp;Un environnement pour la modélisation des systèmes de contrôle d'accès.&nbsp;(2015, M.Sc., codirecteur)</li>
                </ul>
                <p class="profEnteteSection">Étudiants en cours de supervision : </p>
                <ul>
                    <li>Christian&nbsp;Bucur,&nbsp;Contrôle d'accès aux données.&nbsp;(Doctorat)</li>
                    <li>Isnino&nbsp;Ibrahim Ahmed,,&nbsp;Contrôle d'accès aux données.&nbsp;(Doctorat)</li>
                    <li>Ikhlass&nbsp;Hattak,&nbsp;Gestion de l'identité dans les architectures orientées services.&nbsp;(Doctorat, codirecteur) </li>
                    <li>Agoh Josue&nbsp;Beke,&nbsp;À déterminer&nbsp;(Doctorat)</li>
                    <li>Abdelouadoud&nbsp;Stambouli,&nbsp;À déterminer&nbsp;(Doctorat)</li>
                    <li>Jamal&nbsp;Abd-Ali,&nbsp;Spécification des exigences de contrôle d’accès en modèles.&nbsp;(Doctorat, codirecteur)</li>
                    <li>Sofiene&nbsp;Boulares,&nbsp;Approche basée sur les flux d’informations pour le calcul du risque dans les systèmes de contrôle d'accès.&nbsp;(Doctorat)</li>
                    <li>Oussama&nbsp;Hattack,&nbsp;Développement et évaluation d'une application pour analyser les politiques de contrôle d'accès aux données dans un système d'information.&nbsp;(Maîtrise)</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Le "panel"   -->
    <div class="card">
        <div class="card-header" id="Rokia">
            <h5 class="mb-0">
                <!-- Le bouton du "panel"   -->
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseRokia" aria-expanded="false" aria-controls="collapseRokia">
                    <img alt="Rokia Missaoui" style="border:1px solid" width="143" height="143" src="/img/personne/RokiaMissaoui.png">
                    <p style="color: black">Rokia&nbsp;Missaoui</p>
                </button>
            </h5>
        </div>
        <!-- Le contenu  du "panel"  (cacher par défaut) -->
        <div id="collapseRokia" class="collapse" >
            <div class="card-body">
                <p>Ph.D.</p>
                <p>(Université de Montréal)</p>
                <p>Position :  Professeur régulier</p>
                <p>Bureau : B-2032, Pavillon Lucien-Brault</p>
                <p>Téléphone :(819) 595-3900 poste 1709</p>
                <p>Courriel : <a title="Envoyer un courriel au professeur Rokia Missaoui" href="mailto:rokia.missaoui@uqo.ca">rokia.missaoui@uqo.ca</a></p>
                <p>Plus d'informations : <a title="Visiter le site Web du professeur" href="http://w3.uqo.ca/missaoui/">http://w3.uqo.ca/missaoui/</a></p>
                <p style="clear:both" class="profEnteteSection">Thèmes de recherche : </p>
                <p>Bases de données avancées, performances, bases de données d'images, analyse formelle de concepts et treillis de Galois, prospection de données («Data Mining»).</p>
                <p class="profEnteteSection">Groupes de recherche : </p>
                <ul>
                    <li><a href="http://larim.uqo.ca/index.html">LARIM : LAboratoire de Recherche sur l'Information Multimédia</a></li>
                </ul>
                <p class="profEnteteSection">Publications:</p>
                <ul>
                    <li>Allez voir la liste des productions dans cette <a href="http://apps.uqo.ca/DosEtuCorpsProf/PageProfesseur.aspx?id=rokia.missaoui@uqo.ca">page</a></li>
                </ul>
                <p class="profEnteteSection">Prix et distinctions : </p>
                <ul>
                    <li>Prix d'excellence en recherche de l'UQO en 2005</li>
                </ul>
                <p class="profEnteteSection">Cours enseignés au cours des deux dernières années : </p>
                <ul>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF6143_2014_3_01.html">INF6143&nbsp;&nbsp;Base de données avancées</a>&nbsp;&nbsp;(Aut 2014)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF9073_2016_1_01.html">INF9073&nbsp;&nbsp;Séminaire en sciences et technologies de l'information</a>&nbsp;&nbsp;(Hiv 2016)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF6193_2016_3_01.html">INF6193&nbsp;&nbsp;Intelligence d'affaires</a>&nbsp;&nbsp;(Aut 2016)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF6143_2017_1_01.html">INF6143&nbsp;&nbsp;Base de données avancées</a>&nbsp;&nbsp;(Hiv 2017)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF6193_2017_3_01.html">INF6193&nbsp;&nbsp;Intelligence d'affaires</a>&nbsp;&nbsp;(Aut 2017)</li>
                </ul>
                <p class="profEnteteSection">Étudiants ayant terminé : </p>
                <ul>
                    <li>Diah&nbsp;Anggraini,&nbsp;Impact de la disparition d'un nœud sur la structure d'un réseau social.&nbsp;(2015, Ph.D.)</li>
                    <li>Vincent&nbsp;Guesdon,&nbsp;Détection efficace des contours&nbsp;(2004, M.Sc.)</li>
                    <li>Ganaël&nbsp;Jatteau,&nbsp;Approximation du treillis de concepts pour la fouille de données&nbsp;(2005, M.Sc.)</li>
                    <li>David&nbsp;Durand,&nbsp;Détection de relations spatiale entre les objets présents dans une image&nbsp;(2006, M.Sc.)</li>
                    <li>Abdelilah&nbsp;Balamane,&nbsp;Sélection d'attributs par dimension fractale&nbsp;(2007, M.Sc.)</li>
                    <li>Geneviève&nbsp;Roberge,&nbsp;Visualisation des résultats de la fouille des données dans les treillis des concepts&nbsp;(2007, M.Sc.)</li>
                    <li>El Mostafa&nbsp;Fadli,&nbsp;Modélisation probabiliste des cubes de données pour la fouille et l'approximation des données&nbsp;(2011, M.Sc.)</li>
                    <li>Beligh&nbsp;Ben Amor,&nbsp;Projection et sélection de motifs en analyse de concepts formels&nbsp;(2010, M.Sc.)</li>
                    <li>Mohamed&nbsp;Talbi,&nbsp;Une nouvelle approche de détectionde communautés dans les réseauxsociaux&nbsp;(2013, M.Sc.)</li>
                    <li>Ilhem&nbsp;Rima,&nbsp;Diagnostic de la dépression et prédiction de l'efficacité d'un traitement chez des patients atteints d'un désordre dépressif majeur.&nbsp;(2013, M.Sc.)</li>
                </ul>
                <p class="profEnteteSection">Étudiants en cours de supervision : </p>
                <ul>
                    <li>El Mostafa&nbsp;Fadli,&nbsp;Modélisation probabiliste des cubes de données pour la fouille et l'approximation des données&nbsp;(Doctorat)</li>
                    <li>Abir&nbsp;Messaoudi,&nbsp;Prédiction de l’évolution d’un réseau social multicouche suite à des changements de structure.&nbsp;(Doctorat)</li>
                    <li>Abdelilah&nbsp;Balamane,&nbsp;Découverte et gestion des motifs en analyse formelle des concepts.&nbsp;(Doctorat)</li>
                    <li>Kevin&nbsp;Emamirad,&nbsp;Conception et implémentation de nouvelle fonctionnalités dans un prototype de fouille de données.&nbsp;(Maîtrise)</li>
                    <li>Thitary&nbsp;Kong,&nbsp;Déstabilisation d'un réseau social par élimination de nœuds et de liens clés.&nbsp;(Maîtrise)</li>
                    <li>Sabri&nbsp;Krichen,&nbsp;Fouille et catégorisation de textes&nbsp;(Maîtrise)</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Le "panel"   -->
    <div class="card">
        <div class="card-header" id="Andrzej">
            <h5 class="mb-0">
                <!-- Le bouton du "panel"   -->
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseAndrzej" aria-expanded="false" aria-controls="collapseAndrzej">
                    <img alt="Andrzej Pelc" style="border:1px solid" width="143" height="143" src="/img/personne/AndrzejPelc.png">
                    <p style="color: black">Andrzej&nbsp;Pelc</p>
                </button>
            </h5>
        </div>
        <!-- Le contenu  du "panel"  (cacher par défaut) -->
        <div id="collapseAndrzej" class="collapse" >
            <div class="card-body">
                <p>Ph.D.</p>
                <p>(Université de Varsovie)</p>
                <p>Position :  Professeur régulier</p>
                <p>Bureau : B-2028, Pavillon Lucien-Brault</p>
                <p>Téléphone : (819) 595-3900 poste 1625</p>
                <p>Courriel : <a title="Envoyer un courriel au professeur Andrzej Pelc" href="mailto:andrzej.pelc@uqo.ca">andrzej.pelc@uqo.ca</a></p>
                <p>Plus d'informations : <a title="Visiter le site Web du professeur" href="http://w3.uqo.ca/pelc">http://w3.uqo.ca/pelc</a></p>
            </div>
            <p style="clear:both" class="profEnteteSection">Thèmes de recherche : </p>
            <p>Calcul réparti, construction et analyse d'algorithmes, traitement d'informations erronées, algorithmes de communication dans les réseaux, diagnostic des systèmes multiprocesseurs.</p>
            <p class="profEnteteSection">Groupes de recherche : </p>
            <ul>
                <li>
                    <a href="http://w3.uqo.ca/pelc/caldi/index.htm">titulaire de la Chaire de recherche en calcul distribué</a></li>
            </ul>
            <p class="profEnteteSection">Publications:</p>
            <ul>
                <li>
                    <a href="http://w3.uqo.ca/pelc/publ2.html">Liste des publications</a></li>
            </ul>
            <p class="profEnteteSection">Prix et distinctions : </p>
            <ul>
                <li>Prix d'excellence en recherche de l'UQO en 2003</li>
                <li>Concours de vulgarisation scientifique de DÉCOUVRIR 2004 de l'ACFAS (Association francophone pour le savoir)</li>
            </ul>
            <p class="profEnteteSection">Cours enseignés au cours des deux dernières années : </p>
            <ul>
                <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF4143_2014_1_01.html">INF4143&nbsp;&nbsp;Algorithmique I</a>&nbsp;&nbsp;(Hiv 2014)</li>
                <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF6043_2014_3_01.html">INF6043&nbsp;&nbsp;Algorithmique répartie</a>&nbsp;&nbsp;(Aut 2014)</li>
            </ul>
            <p class="profEnteteSection">Stagiaires postdoctoraux : </p>
            <ul>
                <li>David Ilcinkas (2006-2007)</li>
                <li>Euripides Markou (2003-2004)</li>
                <li>Dariusz Kowalski (2001-2002)</li>
                <li>Anders Dessmark (1999-2000)</li>
                <li>Petrisor Panaite (1996-1997)</li>
                <li>Leszek Gasieniec (1994-1995)</li>
                <li>Bernard Mans (1993-1994)</li>
                <li>Krzysztof Diks (1992-1994)</li>
            </ul>
            <p class="profEnteteSection">Étudiants ayant terminé : </p>
            <ul>
                <li>Samuel&nbsp;Guilbault,&nbsp;Rendez-vous asynchrone des agents mobiles dans les réseaux.&nbsp;(2014, Ph.D.)</li>
                <li>Michel&nbsp;Paquette,&nbsp;Algorithmes de communication dans les réseaux en présence de pannes byzantines&nbsp;(2004, M.Sc.)</li>
                <li>Éric&nbsp;Vachon,&nbsp;Recherche de trous noirs dans les réseaux informatiques à l'aide d'agents mobiles&nbsp;(2006, M.Sc.)</li>
                <li>Katia&nbsp;Larrivée,&nbsp;La diffusion de messages dans les réseaux radio anonymes&nbsp;(2006, M.Sc.)</li>
                <li>Samuel&nbsp;Guilbault,&nbsp;Diagnostic des pannes dans les systèmes multi-processeurs&nbsp;(2006, M.Sc.)</li>
                <li>Madjid&nbsp;Ouharoun,&nbsp;Technologies de détection d'intruision.&nbsp;(2010, M.Sc., codirecteur)</li>
                <li>Frédérick&nbsp;Lessard,&nbsp;Exploration optimale d'un segment de droite par deux agents mobiles.&nbsp;(2013, M.Sc., codirecteur)</li>
                <li>Samir&nbsp;Elouasbi,&nbsp;Le temps du rendez-vous synchrone dans les arbres:algorithmes déterministes versus algorithmes aléatoires.&nbsp;(2012, M.Sc.)</li>
                <li>Mélanie&nbsp;Roy,&nbsp;Exploration des arbres par un essaim d'agents&nbsp;(2012, M.Sc.)</li>
                <li>Julian&nbsp;Anaya,&nbsp;Échange des messages entre agents mobiles dans les réseaux.&nbsp;(2014, M.Sc., codirecteur)</li>
                <li>Anas&nbsp;Tiane,&nbsp;Rendez-vous synchrone dans les grilles.&nbsp;(2013, M.Sc.)</li>
                <li>David&nbsp;Caissy,&nbsp;Exploration de graphes hamiltoniens en présence de pannes de liens.&nbsp;(2015, M.Sc.)</li>
                <li>Miguel Vargas Martin (co-supervision à Carleton University), Enhancing hyperlink structure for improving web performance (2002, Ph.D.)</li>
            </ul>
            <p class="profEnteteSection">Étudiants en cours de supervision : </p>
            <ul>
                <li>Kokouvi&nbsp;Hounkanli,&nbsp;Algorithmes de communication dans des modèles restreints.&nbsp;(Doctorat)</li>
                <li>Samir&nbsp;Elouasbi,&nbsp;Algorithmes de rendez-vous avec communication&nbsp;(Doctorat)</li>
                <li>Issam&nbsp;Boutahar,&nbsp;Rendez-vous synchrone dans les graphes avec traces distinctes.&nbsp;(Maîtrise)</li>
                <li>Jalal&nbsp;Amarof,&nbsp;Le temps du rendez-vous synchrone dans les très grands environnements.&nbsp;(Maîtrise)</li>
                <li>Michel Paquette (doctorat, codirection à Carleton University)</li>
            </ul>
        </div>
    </div>
    </div>


    <!-- Le "panel"   -->
    <div class="card">
        <div class="card-header" id="Shamsodin">
            <h5 class="mb-0">
                <!-- Le bouton du "panel"   -->
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseShamsodin" aria-expanded="false" aria-controls="collapseShamsodin">
                    <img alt="Shamsodin Taheri" style="border:1px solid" width="143" height="143" src="/img/personne/ShamsodinTaheri.png">
                    <p style="color: black">Shamsodin&nbsp;Taheri</p>
                </button>
            </h5>
        </div>
        <!-- Le contenu  du "panel"  (cacher par défaut) -->
        <div id="collapseShamsodin" class="collapse" >
            <div class="card-body">
                <p>Ph.D.</p>
                <p>(Université du Québec à Chicoutimi)</p>
                <p>Position :  Professeur régulier</p>
                <p>Bureau : B-2006, Pavillon Lucien-Brault</p>
                <p>Téléphone :(819) 595-3900 poste 1608</p>
                <p>Courriel : <a title="Envoyer un courriel au professeur Shamsodin Taheri" href="mailto:shamsodin.taheri@uqo.ca">shamsodin.taheri@uqo.ca</a></p>
                <p>Plus d'informations : <a title="Visiter le site Web du professeur" href="http://w3.uqo.ca/tahesh01/">http://w3.uqo.ca/tahesh01/</a></p>
                <p style="clear:both" class="profEnteteSection">Thèmes de recherche : </p>
                <p>Électronique de puissance, Conversion de l'énergie, La transmission et distribution de l'énergie électrique, Énergies renouvelables,  Énergie éolienne, L'ingénierie des hautes tensions, Modélisation des systèmes électriques.</p>
                <p class="profEnteteSection">Publications:</p>
                <ul>
                    <li>Allez voir la liste des productions dans cette <a href="http://apps.uqo.ca/DosEtuCorpsProf/PageProfesseur.aspx?id=shamsodin.taheri@uqo.ca">page</a></li>
                </ul>
                <p class="profEnteteSection">Cours enseignés au cours des deux dernières années : </p>
                <ul>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/GEN1173_2016_3_01.html">GEN1173&nbsp;&nbsp;Systèmes asservis</a>&nbsp;&nbsp;(Aut 2016)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/MAT0123_2016_3_01.html">MAT0123&nbsp;&nbsp;Calcul différentiel et intégral</a>&nbsp;&nbsp;(Aut 2016)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/GEN1753_2016_3_01.html">GEN1753&nbsp;&nbsp;Machines électriques</a>&nbsp;&nbsp;(Aut 2016)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/GEN1153_2017_1_01.html">GEN1153&nbsp;&nbsp;Électrotechnique</a>&nbsp;&nbsp;(Hiv 2017)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/GEN1083_2017_1_01.html">GEN1083&nbsp;&nbsp;Dynamique des systèmes I</a>&nbsp;&nbsp;(Hiv 2017)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/GEN1663_2017_3_01.html">GEN1663&nbsp;&nbsp;Électronique de puissance</a>&nbsp;&nbsp;(Aut 2017)</li>
                </ul>
                <p class="profEnteteSection">Étudiants en cours de supervision : </p>
                <ul>
                    <li>Seyedkazem&nbsp;Hosseini,&nbsp;&nbsp;(Doctorat)</li>
                </ul>
            </div>
        </div>
    </div>


    <!-- Le "panel"   -->
    <div class="card">
        <div class="card-header" id="Larbi">
            <h5 class="mb-0">
                <!-- Le bouton du "panel"   -->
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseLarbi" aria-expanded="false" aria-controls="collapseLarbi">
                    <img alt="Larbi Talbi" style="border:1px solid" width="143" height="143" src="/img/personne/LarbiTalbi.png">
                    <p style="color: black">Larbi&nbsp;Talbi</p>
                </button>
            </h5>
        </div>
        <!-- Le contenu  du "panel"  (cacher par défaut) -->
        <div id="collapseLarbi" class="collapse" >
            <div class="card-body">
                <p>Ph.D.</p>
                <p>(Université Laval)</p>
                <p>Position :  Professeur régulier</p>
                <p>Bureau : B-2036, Pavillon Lucien-Brault</p>
                <p>Téléphone :(819) 595-3900 poste 1721</p>
                <p>Courriel : <a title="Envoyer un courriel au professeur Larbi Talbi" href="mailto:larbi.talbi@uqo.ca">larbi.talbi@uqo.ca</a></p>
                <p>Plus d'informations : <a title="Visiter le site Web du professeur" href="http://w3.uqo.ca/talbla01/">http://w3.uqo.ca/talbla01/</a></p>
                <p style="clear:both" class="profEnteteSection">Thèmes de recherche : </p>
                <p>Communications sans-fil, électronique générale, techniques de mesures radiométriques, technologie micro-onde et UHF, télécommunications.</p>
                <p class="profEnteteSection">Publications:</p>
                <ul>
                    <li>Allez voir la liste des productions dans cette <a href="http://apps.uqo.ca/DosEtuCorpsProf/PageProfesseur.aspx?id=larbi.talbi@uqo.ca">page</a></li>
                </ul>
                <p class="profEnteteSection">Cours enseignés au cours des deux dernières années : </p>
                <ul>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF9073_2014_1_01.html">INF9073&nbsp;&nbsp;Séminaire en sciences et technologies de l'information</a>&nbsp;&nbsp;(Hiv 2014)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF6163_2014_3_01.html">INF6163&nbsp;&nbsp;Introduction à la cryptographie</a>&nbsp;&nbsp;(Aut 2014)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF4023_2016_3_01.html">INF4023&nbsp;&nbsp;Architecture des ordinateurs I</a>&nbsp;&nbsp;(Aut 2016)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/GEN1433_2017_1_01.html">GEN1433&nbsp;&nbsp;Systèmes de communication</a>&nbsp;&nbsp;(Hiv 2017)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/GEN1143_2017_3_01.html">GEN1143&nbsp;&nbsp;Électromagnétisme</a>&nbsp;&nbsp;(Aut 2017)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF6163_2017_3_01.html">INF6163&nbsp;&nbsp;Introduction à la cryptographie</a>&nbsp;&nbsp;(Aut 2017)</li>
                </ul>
                <p class="profEnteteSection">Étudiants ayant terminé : </p>
                <ul>
                    <li>Ismaïl&nbsp;Ben Mabrouk,&nbsp;Caractérisation d'un canal minier à Goghz utilisant un système MIMO.&nbsp;(2012, Ph.D.)</li>
                    <li>Mohamed Tahar&nbsp;Haddad,&nbsp;Anticipation des crises d'épilepsie temporale combinant des méthodes statistiques et non-linéaires d'analyse d'électroencéphalographie.&nbsp;(2014, Ph.D.)</li>
                    <li>Imène&nbsp;Sassi,&nbsp;Développement de nouveaux modèles de cellules métamatériaux pour les applications en Radiofréquences.&nbsp;(2015, Ph.D.)</li>
                    <li>Bruno&nbsp;Ouellet,&nbsp;Étude d'intégration d'une interface réseau sans fil au sein de la technologie relais sous-réseau (Subnetwork Relay - SNR)&nbsp;(2004, M.Sc.)</li>
                    <li>Youssef&nbsp;Rissafi,&nbsp;Caractérisation d'un canal minier souterrain ultra-large bande (3 à 10 GHZ)&nbsp;(2007, M.Sc.)</li>
                    <li>Lahlou&nbsp;Ouchiha,&nbsp;Essaie: Classification supervisée de documents études comparatives&nbsp;(2016, M.Sc.)</li>
                </ul>
                <p class="profEnteteSection">Étudiants en cours de supervision : </p>
                <ul>
                    <li>Moustapha&nbsp;Mbaye,&nbsp;Conception d'un récepteur en technologie GIS&nbsp;(Doctorat)</li>
                    <li>Betty&nbsp;Savitri,&nbsp;Réalisation d'un réseau d'antennes basé sur la matrice de Butler en ulitisant les métamatériaux.&nbsp;(Doctorat)</li>
                    <li>Ousama&nbsp;Abu Safia,&nbsp;Développement de nouveaux types de ligne de transmission à base d'inclusions/Cellules métamatériaux et leurs applications potentielles.&nbsp;(Doctorat)</li>
                    <li>Vincent&nbsp;Fono,&nbsp;Modélisation analystique des mécanismes de propagation à l'intérieur d'une mine souterraine.&nbsp;(Doctorat)</li>
                    <li>Moulay&nbsp;El Azhari,&nbsp;à déterminer&nbsp;(Doctorat)</li>
                    <li>Yassine&nbsp;Zouaoui,&nbsp;À déterminer&nbsp;(Doctorat)</li>
                    <li>Salem&nbsp;Bousnadji,&nbsp;À déterminer&nbsp;(Doctorat)</li>
                    <li>Salem&nbsp;Bousnadji,&nbsp;À déterminer&nbsp;(Doctorat)</li>
                    <li>Mustapha&nbsp;Bennai,&nbsp;Caractérisation du canal indoor/outdoor pour les systems de la 5G dans les ondes millimétriques.&nbsp;(Doctorat)</li>
                    <li>Youssef&nbsp;Karmous,&nbsp;Modélisation numérique de circuits analogiques/RF/optiques.&nbsp;(Maîtrise)</li>
                    <li>Hmaied&nbsp;Moujahed,&nbsp;Réalisation d'un détecteur de crise épileptique&nbsp;(Maîtrise)</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Le "panel"   -->
    <div class="card">
        <div class="card-header" id="Marek">
            <h5 class="mb-0">
                <!-- Le bouton du "panel"   -->
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseMarek" aria-expanded="false" aria-controls="collapseMarek">
                    <img alt="Marek Zaremba" style="border:1px solid" width="143" height="143" src="/img/personne/MarekZaremba.png">
                    <p style="color: black">Marek&nbsp;Zaremba</p>
                </button>
            </h5>
        </div>
        <!-- Le contenu  du "panel"  (cacher par défaut) -->
        <div id="collapseMarek" class="collapse" >
            <div class="card-body">
                <p>Position :  Professeur régulier</p>
                <p>Bureau : B-2030, Pavillon Lucien-Brault</p>
                <p>Téléphone : (819) 595-3900 poste 1616</p>
                <p>Courriel : <a title="Envoyer un courriel au professeur Marek Zaremba" href="mailto:marek.zaremba@uqo.ca">marek.zaremba@uqo.ca</a></p>
                <p>Plus d'informations : <a title="Visiter le site Web du professeur" href="http://w3.uqo.ca/zaremba/">http://w3.uqo.ca/zaremba/</a></p>
                <p style="clear:both" class="profEnteteSection">Thèmes de recherche : </p>
                <p>Réseaux neuronaux, systèmes adaptatifs, graphisme par ordinateur, automatique systèmes en temps réel, traitement réparti.</p>
                <p class="profEnteteSection">Groupes de recherche : </p>
                <ul>
                    <li><a href="http://w3.uqo.ca/zaremba/LSSI/">Laboratoire de Systèmes Spatiaux Intelligents</a></li>
                </ul>
                <p class="profEnteteSection">Publications:</p>
                <ul>
                    <li>Allez voir la liste des productions dans cette <a href="http://apps.uqo.ca/DosEtuCorpsProf/PageProfesseur.aspx?id=marek.zaremba@uqo.ca">page</a></li>
                </ul>
                <p class="profEnteteSection">Prix et distinctions : </p>
                <ul>
                    <li>Président de l'IFAC - Canada</li>
                </ul>
                <p class="profEnteteSection">Cours enseignés au cours des deux dernières années : </p>
                <ul>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/GEN6103_2016_1_01.html">GEN6103&nbsp;&nbsp;Robotique</a>&nbsp;&nbsp;(Hiv 2016)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/GEN1593_2016_3_01.html">GEN1593&nbsp;&nbsp;Robotique et vision artificielle</a>&nbsp;&nbsp;(Aut 2016)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/GEN1093_2017_1_01.html">GEN1093&nbsp;&nbsp;Dynamique des systèmes II</a>&nbsp;&nbsp;(Hiv 2017)</li>
                    <li class="cours"><a href="http://w4.uqo.ca/d_info/dynHTML/plans/GEN1173_2017_3_01.html">GEN1173&nbsp;&nbsp;Systèmes asservis</a>&nbsp;&nbsp;(Aut 2017)</li>
                </ul>
                <p class="profEnteteSection">Étudiants ayant terminé : </p>
                <ul>
                    <li>Nicolas&nbsp;Therrien,&nbsp;Évaluation de techniques d'indexage pour la fusion de représentations&nbsp;(2007, M.Sc.)</li>
                    <li>Pablo Julian&nbsp;Pedrocca,&nbsp;Classification des eaux en fonction de la réponse aux senseurs à distance (images satellites).&nbsp;(2014, M.Sc.)</li>
                    <li>Hasna&nbsp;Hocini,&nbsp;Modèle de représentation des relations spatiales pour le système d'écriture des signes signwriting.&nbsp;(2015, M.Sc.)</li>
                </ul>
                <p class="profEnteteSection">Étudiants en cours de supervision : </p>
                <ul>
                    <li>Juan Carlos&nbsp;Davila Mesa,&nbsp;Modèles intégrés d'apprentissage automatique pour le monitoring de systèmes multimodaux.&nbsp;(Doctorat)</li>
                    <li>Fadi&nbsp;Halal,&nbsp;Contrôle hybride de la navigation pour les robots à comportement multiples.&nbsp;(Doctorat)</li>
                    <li>Giancarlo&nbsp;Colmenares Sayago,&nbsp;Un système multiagent pour  la conduite coopérative basée sur la  visualisation 3 D&nbsp;(Doctorat, codirecteur)</li>
                </ul>
            </div>
        </div>
    </div>



@endsection