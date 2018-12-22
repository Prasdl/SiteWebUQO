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




                <div class="entry">
                    <div class="picture">
                        <a href="dyn/profs/rokia.missaoui.php">
                            <img alt="Rokia Missaoui" style="border:1px solid" width="143" height="143" src="/img/personne/RokiaMissaoui.png">
                        </a>
                    </div>
                    <div class="status2">&nbsp;</div>
                    <div class="textsmall">
                    <span class="textbold">
                    <a href="dyn/profs/rokia.missaoui.php">Rokia&nbsp;Missaoui</a>
                    <br>
                    </span>
                        <b>Bur. : </b>B-2032<br>
                        <b>Tél. : </b>1709<br>
                        <span class="textvsmall">rokia.missaoui@uqo.ca</span>
                    </div>
                </div>
                <div class="entry">
                    <div class="picture">
                        <a href="dyn/profs/andrzej.pelc.php">
                            <img alt="Andrzej Pelc" style="border:1px solid" width="143" height="143" src="/img/personne/AndrzejPelc.png">
                        </a>
                    </div>
                    <div class="status2">&nbsp;</div>
                    <div class="textsmall">
                    <span class="textbold">
                    <a href="dyn/profs/andrzej.pelc.php">Andrzej&nbsp;Pelc</a>
                    <br>
                    </span>
                        <b>Bur. : </b>B-2028<br>
                        <b>Tél. : </b>1625<br>
                        <span class="textvsmall">andrzej.pelc@uqo.ca</span>
                    </div>
                </div>

                <div class="entry">
                    <div class="picture">
                        <a href="dyn/profs/shamsodin.taheri.php">
                            <img alt="Shamsodin Taheri" style="border:1px solid" width="143" height="143" src="/img/personne/ShamsodinTaheri.png">
                        </a>
                    </div>
                    <div class="status2">&nbsp;</div>
                    <div class="textsmall">
                    <span class="textbold">
                    <a href="dyn/profs/shamsodin.taheri.php">Shamsodin&nbsp;Taheri</a>
                    <br>
                    </span>
                        <b>Bur. : </b>B-2006<br>
                        <b>Tél. : </b>1608<br>
                        <span class="textvsmall">shamsodin.taheri@uqo.ca</span>
                    </div>
                </div>


                <div class="entry">
                    <div class="picture">
                        <a href="dyn/profs/larbi.talbi.php">
                            <img alt="Larbi Talbi" style="border:1px solid" width="143" height="143" src="/img/personne/LarbiTalbi.png">
                        </a>
                    </div>
                    <div class="status2">&nbsp;</div>
                    <div class="textsmall">
                    <span class="textbold">
                    <a href="dyn/profs/larbi.talbi.php">Larbi&nbsp;Talbi</a>
                    <br>
                    </span>
                        <b>Bur. : </b>B-2036<br>
                        <b>Tél. : </b>1721<br>
                        <span class="textvsmall">larbi.talbi@uqo.ca</span>
                    </div>
                </div>


                <div class="entry">
                    <div class="picture">
                        <a href="dyn/profs/marek.zaremba.php">
                            <img alt="Marek Zaremba" style="border:1px solid" width="143" height="143" src="/img/personne/MarekZaremba.png">
                        </a>
                    </div>
                    <div class="status2">&nbsp;</div>
                    <div class="textsmall">
                    <span class="textbold">
                    <a href="dyn/profs/marek.zaremba.php">Marek&nbsp;Zaremba</a>
                    <br>
                    </span>
                        <b>Bur. : </b>B-2030<br>
                        <b>Tél. : </b>1616<br>
                        <span class="textvsmall">marek.zaremba@uqo.ca</span>
                    </div>
                </div>
            </div>

    </div>


@endsection