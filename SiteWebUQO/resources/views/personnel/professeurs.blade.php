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
                    <p>&nbsp;&nbsp;&nbsp;Ph.D.</p>
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
                        <li class="cours">
                            <a href="">INF6103&nbsp;&nbsp;Analyse et conception des protocoles de sécurité</a>&nbsp;&nbsp;(Aut 2015)</li>
                        <li class="cours">
                            <a href="">INF1433&nbsp;&nbsp;Initiation à la sécurité informatique</a>&nbsp;&nbsp;(Aut 2016)</li>
                        <li class="cours">
                            <a href="">GEN1273&nbsp;&nbsp;Modélisation et simulation</a>&nbsp;&nbsp;(Aut 2016)</li>
                        <li class="cours">
                            <a href="">INF6233&nbsp;&nbsp;Sécurité informatique et méthodes formelles</a>&nbsp;&nbsp;(Aut 2016)</li>
                        <li class="cours">
                            <a href="">INF1433&nbsp;&nbsp;Initiation à la sécurité informatique</a>&nbsp;&nbsp;(Aut 2017)</li>
                    </ul>
                    <p class="profEnteteSection">Stagiaires postdoctoraux : </p>
                    <ul>
                        <li>Yacine Bouzida (2008-2009)</li>
                    </ul>
                    <p class="profEnteteSection">Étudiants ayant terminé : </p>
                    <ul>
                        <li>Fatiha&nbsp;Djebbar,
                            &nbsp;Architecture logicielle distribuée pour un système d'instrumentation générique et temps réel basé sur la nouvelle génération des senseurs photoniques&nbsp;(2003, M.Sc., codirecteur)
                        </li>
                        <li>Adnane&nbsp;El Kabbal,
                            &nbsp;Un Système de Types pour l'Analyse des Pare-feux&nbsp;(2005, M.Sc.)
                        </li>
                        <li>Luke&nbsp;Sullivan,
                            &nbsp;La correction des protocoles de non-répudiation.&nbsp;(2006, M.Sc.)
                        </li>
                        <li>Liviu&nbsp;Pene,
                            &nbsp;Méthodes formelles pour la correction des protocoles de sécurité&nbsp;(2004, M.Sc.)
                        </li>
                        <li>Ibrahim&nbsp;Keita,
                            &nbsp;Sécurité des services Web: restauration d'un message SOAP après détection d'une attaque par enveloppement sur un élément signé.&nbsp;(2010, M.Sc.)
                        </li>
                        <li>Ikhlass&nbsp;Hattak,
                            &nbsp;Analyse formelle des politiques de sécurité&nbsp;(2010, M.Sc.)
                        </li>
                        <li>Madjid&nbsp;Ouharoun,
                            &nbsp;Technologies de détection d'intruision.&nbsp;(2010, M.Sc.)
                        </li>
                        <li>Hassen&nbsp;Khalifa,
                            &nbsp;Détection des anomalies entre les contraintes dans les politiques de contrôle d'accès&nbsp;(2013, M.Sc., codirecteur)
                        </li>
                        <li>Sourour&nbsp;Jemili,
                            &nbsp;Analyse de risques dans les systèmes de contrôle d'accès.&nbsp;(2013, M.Sc.)
                        </li>
                        <li>Bone&nbsp;Maboudou,
                            &nbsp;Un environnement pour la modélisation des systèmes de contrôle d'accès.&nbsp;(2015, M.Sc.)
                        </li>
                    </ul>
                    <p class="profEnteteSection">Étudiants en cours de supervision : </p>
                    <ul>
                        <li>Liviu&nbsp;Pene,
                            &nbsp;Consolidation de la sécurité de réseaux avec les languages de spécification dévoués pour des pares-feu distribués et des grappes.&nbsp;(Doctorat)
                        </li>
                        <li>Christian&nbsp;Bucur,
                            &nbsp;Contrôle d'accès aux données.&nbsp;(Doctorat, codirecteur)
                        </li>
                        <li>Ikhlass&nbsp;Hattak,
                            &nbsp;Gestion de l'identité dans les architectures orientées services.&nbsp;(Doctorat)
                        </li>
                        <li>Nadjate&nbsp;Saïdani,
                            &nbsp;Analyse sémantique de contenu multimédia.&nbsp;(Doctorat)
                        </li>
                        <li>Sofiene&nbsp;Boulares,
                            &nbsp;Approche basée sur les flux d’informations pour le calcul du risque dans les systèmes de contrôle d'accès.&nbsp;(Doctorat, codirecteur)
                        </li>
                        <li>Oussama&nbsp;Hattack,
                            &nbsp;Développement et évaluation d'une application pour analyser les politiques de contrôle d'accès aux données dans un système d'information.&nbsp;(Maîtrise, codirecteur)
                        </li>
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
                        <p>&nbsp;&nbsp;&nbsp;Ph.D.</p>
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
                            <li class="cours">
                                <a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF1483_2015_1_01.html">INF1483&nbsp;&nbsp;Programmation graphique 2D/3D</a>&nbsp;&nbsp;(Hiv 2015)</li>
                            <li class="cours">
                                <a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF6243_2015_1_01.html">INF6243&nbsp;&nbsp;Techniques d'apprentissage</a>&nbsp;&nbsp;(Hiv 2015)</li>
                            <li class="cours">
                                <a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF7093_2015_3_01.html">INF7093&nbsp;&nbsp;Éléments avancés d'analyse d'images</a>&nbsp;&nbsp;(Aut 2015)</li>
                            <li class="cours">
                                <a href="http://w4.uqo.ca/d_info/dynHTML/plans/MAT1243_2016_1_01.html">MAT1243&nbsp;&nbsp;Probabilités et statistiques</a>&nbsp;&nbsp;(Hiv 2016)</li>
                            <li class="cours">
                                <a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF6243_2016_3_01.html">INF6243&nbsp;&nbsp;Techniques d'apprentissage</a>&nbsp;&nbsp;(Aut 2016)</li>
                            <li class="cours">
                                <a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF6243_2017_3_01.html">INF6243&nbsp;&nbsp;Techniques d'apprentissage</a>&nbsp;&nbsp;(Aut 2017)</li>
                        </ul>
                        <p class="profEnteteSection">Étudiants ayant terminé : </p>
                        <ul>
                            <li>Marouene&nbsp;Mejri,
                                &nbsp;Modélisation Statistique de Transformées Multirésolutions et Application à la Détection de Défauts de Textures&nbsp;(2013, M.Sc.)</li>
                            <li>Ekpao Anani&nbsp;Passigue,
                                &nbsp;Analyse et détection de pourriels textuels dans les réseaux sociaux par apprentissage&nbsp;(2015, M.Sc.)</li>
                            <li>Guillaume&nbsp;Larivière,
                                &nbsp;Segmentation d'objets: approches par analyse de forme et apprentissage probabiliste&nbsp;(2012, M.Sc.)</li>
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
                    <p>&nbsp;&nbsp;&nbsp;Ph.D.</p>
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
                        <li>
                            <a href="http://larim.uqo.ca/index.html">LARIM : LAboratoire de Recherche sur l'Information Multimédia</a>
                        </li>
                    </ul>
                    <p class="profEnteteSection">Publications:</p>
                    <ul>
                        <li>
                            <a href="http://w3.uqo.ca/baazna01/publications.html">Liste des publications</a>
                        </li>
                    </ul>
                    <p class="profEnteteSection">Cours enseignés au cours des deux dernières années : </p>
                    <ul>
                        <li class="cours">
                            <a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF1173_2014_3_01.html">INF1173&nbsp;&nbsp;Analyse et gestion des exigences</a>&nbsp;&nbsp;(Aut 2014)</li>
                        <li class="cours">
                            <a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF6223_2016_1_01.html">INF6223&nbsp;&nbsp;Systèmes de communications multimédias</a>&nbsp;&nbsp;(Hiv 2016)</li>
                        <li class="cours">
                            <a href="http://w4.uqo.ca/d_info/dynHTML/plans/GEN1423_2016_1_01.html">GEN1423&nbsp;&nbsp;Génie logiciel</a>&nbsp;&nbsp;(Hiv 2016)</li>
                        <li class="cours">
                            <a href="http://w4.uqo.ca/d_info/dynHTML/plans/GEN1223_2017_3_01.html">GEN1223&nbsp;&nbsp;Analyse et traitement numérique des signaux</a>&nbsp;&nbsp;(Aut 2017)</li>
                    </ul>
                    <p class="profEnteteSection">Étudiants ayant terminé : </p>
                    <ul>
                        <li>Ali Jabeur&nbsp;Bouzidi,
                            &nbsp;Développement de techniques de marquage d’authentification pour la protection de données multimédias&nbsp;(2009, M.Sc.)</li>
                        <li>Khaled&nbsp;Barhoumi,
                            &nbsp;Approche par marquage pour l'évaluation de la qualité d'image dans les dans les applications multimédias.&nbsp;(2012, M.Sc.)</li>
                        <li>Marouene&nbsp;Mejri,
                            &nbsp;Modélisation Statistique de Transformées Multirésolutions et Application à la Détection de Défauts de Textures&nbsp;(2013, M.Sc., codirecteur)</li>
                        <li>Anis&nbsp;Ounissi,
                            &nbsp;Analyse de la robustesse de la signature ordinale dans les attaques de clonage d'image par déplacement de copie.&nbsp;(2014, M.Sc.)</li>
                        <li>Zaied&nbsp;Ben Maaouia,&nbsp;Recherche d'images par le contenu pour la détection de copies dans les bases de données multimédias.&nbsp;(2015, M.Sc.)</li>
                    </ul>
                    <p class="profEnteteSection">Étudiants en cours de supervision : </p>
                    <ul>
                        <li>Asal&nbsp;Rouhafzay,&nbsp;&nbsp;(Doctorat)</li>
                        <li>Alain&nbsp;Théroux,
                            &nbsp;Détection et prédiction d'actions humaines par caractérisation de la forme contextuelle et l'apprentissage automatique.&nbsp;(Maîtrise, codirecteur)</li>
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


                    <p>&nbsp;&nbsp;&nbsp;Ph.D.</p>
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
                        <li class="cours">
                            <a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF3803_2014_3_01.html">INF3803&nbsp;&nbsp;Télématique</a>&nbsp;&nbsp;(Aut 2014)</li>
                        <li class="cours">
                            <a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF1183_2015_3_01.html">INF1183&nbsp;&nbsp;Intelligence artificielle</a>&nbsp;&nbsp;(Aut 2015)</li>
                        <li class="cours">
                            <a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF1573_2016_1_01.html">INF1573&nbsp;&nbsp;Programmation II</a>&nbsp;&nbsp;(Hiv 2016)</li>
                        <li class="cours">
                            <a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF6273_2016_3_01.html">INF6273&nbsp;&nbsp;Technologies avancées en télécommunication</a>&nbsp;&nbsp;(Aut 2016)</li>
                        <li class="cours">
                            <a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF1183_2017_1_01.html">INF1183&nbsp;&nbsp;Intelligence artificielle</a>&nbsp;&nbsp;(Hiv 2017)</li>
                        <li class="cours">
                            <a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF3803_2017_3_01.html">INF3803&nbsp;&nbsp;Télématique</a>&nbsp;&nbsp;(Aut 2017)</li>
                        <li class="cours">
                            <a href="http://w4.uqo.ca/d_info/dynHTML/plans/INF6273_2017_3_01.html">INF6273&nbsp;&nbsp;Technologies avancées en télécommunication</a>&nbsp;&nbsp;(Aut 2017)</li>
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


                    <p>&nbsp;&nbsp;&nbsp;Ph.D.</p>
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



                <div class="entry">
                    <div class="picture">
                        <a href="dyn/profs/alain.charbonneau.php">
                            <img alt="Alain Charbonneau" style="border:1px solid" width="143" height="143" src="/img/personne/AlainCharbonneau.png">
                        </a>
                    </div>
                    <div class="status2">&nbsp;</div>
                    <div class="textsmall">
                    <span class="textbold">
                    <a href="dyn/profs/alain.charbonneau.php">Alain&nbsp;Charbonneau</a>
                    <br>
                    </span>
                        <b>Bur. : </b>B-2026<br>
                        <b>Tél. : </b>1704<br>
                        <span class="textvsmall">alain.charbonneau@uqo.ca</span>
                    </div>
                </div>


                <div class="entry">
                    <div class="picture">
                        <a href="dyn/profs/jurek.czyzowicz.php">
                            <img alt="Jurek Czyzowicz" style="border:1px solid" width="143" height="143" src="/img/personne/JurekCzyzowicz.png">
                        </a>
                    </div>
                    <div class="status2">&nbsp;</div>
                    <div class="textsmall">
                    <span class="textbold">
                    <a href="dyn/profs/jurek.czyzowicz.php">Jurek&nbsp;Czyzowicz</a>
                    <br>
                    </span>
                        <b>Bur. : </b>B-2020<br>
                        <b>Tél. : </b>1618<br>
                        <span class="textvsmall">jurek@uqo.ca</span>
                    </div>
                </div>


                <div class="entry">
                    <div class="picture">
                        <a href="dyn/profs/alan.davoust.php">
                            <img alt="Alan Davoust" style="border:1px solid" width="143" height="143" src="/img/personne/AlanDavoust.png">
                        </a>
                    </div>
                    <div class="status2">&nbsp;</div>
                    <div class="textsmall">
                    <span class="textbold">
                    <a href="dyn/profs/alan.davoust.php">Alan&nbsp;Davoust</a>
                    <br>
                    </span>
                        <b>Bur. : </b>B-2073<br>
                        <b>Tél. : </b> <br>
                        <span class="textvsmall"> </span>
                    </div>
                </div>


                <div class="entry">
                    <div class="picture">
                        <a href="dyn/profs/tinko.eftimov.php">
                            <img alt="Tinko Eftimov" style="border:1px solid" width="143" height="143" src="/img/personne/TinkoEftimov.png">
                        </a>
                    </div>
                    <div class="status2">&nbsp;</div>
                    <div class="textsmall">
                    <span class="textbold">
                    <a href="dyn/profs/tinko.eftimov.php">Tinko&nbsp;Eftimov</a>
                    <br>
                    </span>
                        <b>Bur. : </b>B-2018<br>
                        <b>Tél. : </b>1734<br>
                        <span class="textvsmall">tinko.eftimov@uqo.ca</span>
                    </div>
                </div>


                <div class="entry">
                    <div class="picture">
                        <a href="dyn/profs/karim.elguemhioui.php">
                            <img alt="Karim El Guemhioui" style="border:1px solid" width="143" height="143" src="/img/personne/KarimElGuemhioui.png">
                        </a>
                    </div>
                    <div class="status2">&nbsp;</div>
                    <div class="textsmall">
                    <span class="textbold">
                    <a href="dyn/profs/karim.elguemhioui.php">Karim&nbsp;El Guemhioui</a>
                    <br>
                    </span>
                        <b>Bur. : </b>B-0123<br>
                        <b>Tél. : </b>1620<br>
                        <span class="textvsmall">karim.elguemhioui@uqo.ca</span>
                    </div>
                </div>


                <div class="entry">
                    <div class="picture">
                        <a href="dyn/profs/michal.iglewski.php">
                            <img alt="Michal Iglewski" style="border:1px solid" width="143" height="143" src="/img/personne/MichalIglewski.png">
                        </a>
                    </div>
                    <div class="status2">&nbsp;</div>
                    <div class="textsmall">
                    <span class="textbold">
                    <a href="dyn/profs/michal.iglewski.php">Michal&nbsp;Iglewski</a>
                    <br>
                    </span>
                        <b>Bur. : </b>B-2024<br>
                        <b>Tél. : </b>1602<br>
                        <span class="textvsmall">iglewski@uqo.ca</span>
                    </div>
                </div>


                <div class="entry">
                    <div class="picture">
                        <a href="dyn/profs/michael.korwin-pawlowski.php">
                            <img alt="Michael Korwin-Pawlowski" style="border:1px solid" width="143" height="143" src="/img/personne/MichaelKorwin-Pawlowski.png">
                        </a>
                    </div>
                    <div class="status2">&nbsp;</div>
                    <div class="textsmall">
                    <span class="textbold">
                    <a href="dyn/profs/michael.korwin-pawlowski.php">Michael&nbsp;Korwin-Pawlowski</a>
                    <br>
                    </span>
                        <b>Bur. : </b>B-2008<br>
                        <b>Tél. : </b>1626<br>
                        <span class="textvsmall">michael.korwin-pawlowski@uqo.ca</span>
                    </div>
                </div>


                <div class="entry">
                    <div class="picture">
                        <a href="dyn/profs/ahmed.lakhssassi.php">
                            <img alt="Ahmed Lakhssassi" style="border:1px solid" width="143" height="143" src="/img/personne/AhmedLakhssassi.png">
                        </a>
                    </div>
                    <div class="status2">&nbsp;</div>
                    <div class="textsmall">
                    <span class="textbold">
                    <a href="dyn/profs/ahmed.lakhssassi.php">Ahmed&nbsp;Lakhssassi</a>
                    <br>
                    </span>
                        <b>Bur. : </b>B-2014<br>
                        <b>Tél. : </b>1610<br>
                        <span class="textvsmall">ahmed.lakhssassi@uqo.ca</span>
                    </div>
                </div>


                <div class="entry">
                    <div class="picture">
                        <a href="dyn/profs/frederic.lesage.php">
                            <img alt="Frédéric Lesage" style="border:1px solid" width="143" height="143" src="/img/personne/FredericLesage.png">
                        </a>
                    </div>
                    <div class="status2">&nbsp;</div>
                    <div class="textsmall">
                    <span class="textbold">
                    <a href="dyn/profs/frederic.lesage.php">Frédéric&nbsp;Lesage</a>
                    <br>
                    </span>
                        <b>Bur. : </b>B-0125<br>
                        <b>Tél. : </b>1620<br>
                        <span class="textvsmall">frederic.lesage@uqo.ca</span>
                    </div>
                </div>


                <div class="entry">
                    <div class="picture">
                        <a href="dyn/profs/luigi.logrippo.php">
                            <img alt="Luigi Logrippo" style="border:1px solid" width="143" height="143" src="/img/personne/LuigiLogrippo.png">
                        </a>
                    </div>
                    <div class="status2">&nbsp;</div>
                    <div class="textsmall">
                    <span class="textbold">
                    <a href="dyn/profs/luigi.logrippo.php">Luigi&nbsp;Logrippo</a>
                    <br>
                    </span>
                        <b>Bur. : </b>B-2010<br>
                        <b>Tél. : </b>1885<br>
                        <span class="textvsmall">luigi.logrippo@uqo.ca</span>
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