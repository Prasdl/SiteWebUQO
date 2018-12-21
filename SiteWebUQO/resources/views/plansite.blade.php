@extends('layouts.template')

@section('template')

    <h1>PLAN DU SITE</h1>


        <!-- Le "panel"   -->
        <div class="card">
            <div class="card-header" id="Programmes">
                <h5 class="mb-0">
                    <!-- Le bouton du "panel"   -->
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseProgrammes" aria-expanded="false" aria-controls="collapseProgrammes">
                        <p>Programmes d'études</p>
                    </button>
                </h5>
            </div>
            <!-- Le contenu  du "panel"  (cacher par défaut) -->
            <div id="collapseProgrammes" class="collapse" >
                <div class="card-body">

                    <ul>
                        <li><p><a href="/programmes/premiercycle">Programmes d'études de 1er cycle</a></p></li>
                        <li><p><a href="/programmes/cycledeuxtrois">Programmes d'études de 2e et 3e cycles</a></p></li>
                        <li><p><a href="/programmes/plancours">Plans de cours</a></p></li>

                        <ul>
                            <li><p>Plans de cours par programmes</p></li>
                            <ul>
                                <li><p><a href="">7643 Bacc. en génie informatique</a></p></li>
                                <li><p><a href="">7833 Bacc. en informatique</a></p></li>
                                <li><p><a href="">4108 Certificat en informatique de gestion</a></p></li>
                                <li><p><a href="">4802 Certificat en technologies de l'information</a></p></li>
                                <li><p><a href="">3781 Maîtrise en informatique</a></p></li>
                                <li><p><a href="">3081 Doctorat en sciences et technologies de l'information</a></p></li>
                                <li><p><a href="">0000 Autres cours</a></p></li>
                            </ul>
                            <li><p>Plans de cours par session</p></li>
                            <ul>
                                <li><p><a href="">Hiver 2007</a></p></li>
                                <li><p><a href="">Automne 2006</a></p></li>
                                <li><p><a href="">Été 2006</a></p></li>
                                <li><p><a href="">Hiver 2006</a></p></li>
                                <li><p><a href="">Automne 2005</a></p></li>
                                <li><p><a href="">Été 2005</a></p></li>
                            </ul>
                        </ul>

                        <li><p><a href="/informatique">Module de l'informatique</a></p></li>
                        <li><p><a href="/genie">Module de l'ingénierie</a></p></li>
                    </ul>

                </div>
            </div>
        </div>

    </ul>


    <!-- Le "panel"   -->
    <div class="card">
        <div class="card-header" id="Etudiants1">
            <h5 class="mb-0">
                <!-- Le bouton du "panel"   -->
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEtudiants1" aria-expanded="false" aria-controls="collapseEtudiants1">
                    <p>Étudiants de 1er cycle</p>
                </button>
            </h5>
        </div>

        <!-- Le contenu  du "panel"  (cacher par défaut) -->
        <div id="collapseEtudiants1" class="collapse" >
            <div class="card-body">

                <ul>
                    <li><p><a href="/etudiant/cycleuninfo">Une séance d'exercices? Un travail dirigé? Un devoir?</a></p></li>
                    <li><p>Horaire des activités</p></li>
                    <ul>
                        <ul>
                            <li><p><a href="">Informatique - Automne 2006</a></p></li>
                            <li><p><a href="">Informatique - Hiver 2007</a></p></li>
                            <li><p><a href="">Génie Informatique - Automne 2006</a></p></li>
                            <li><p><a href="">Génie Informatique - Hiver 2007</a></p></li>
                        </ul>
                        <li><p><a href="">Séances de travaux pratiques, séances de travaux dirigés, séances d'exercices</a></p></li>
                        <li><p><a href="">Rapport de laboratoire</a></p></li>
                        <li><p><a href="">Plans des locaux de laboratoires de génie</a></p></li>
                        <li><p><a href="">Manuels</a></p></li>
                        <li><p><a href="">Listes des logiciels installés par local</a></p></li>
                        <li><p><a href="">Règles de sécurité aux laboratoires de génie</a></p></li>
                        <li><p><a href="">Associations professionnelles</a></p></li>
                    </ul>
                </ul>

            </div>
        </div>
    </div>


        <!-- Le "panel"   -->
        <div class="card">
            <div class="card-header" id="Etudiants2">
                <h5 class="mb-0">
                    <!-- Le bouton du "panel"   -->
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEtudiants2" aria-expanded="false" aria-controls="collapseEtudiants2">
                        <p>Étudiants de 2e et 3e cycles</p>
                    </button>
                </h5>
            </div>

            <!-- Le contenu  du "panel"  (cacher par défaut) -->
            <div id="collapseEtudiants2" class="collapse" >
                <div class="card-body">

                    <ul>
                        <li><p><a href="">Formulaires (maîtrise)</a></p></li>
                        <li><p><a href="">Formulaires (doctorat)</a></p></li>
                        <li><p><a href="">Nos étudiants de maîtrise</a></p></li>
                        <li><p><a href="">Diplômés du programme de maîtrise</a></p></li>
                    </ul>

                </div>
            </div>
        </div>

            <!-- Le "panel"   -->
            <div class="card">
                <div class="card-header" id="Recherche">
                    <h5 class="mb-0">
                        <!-- Le bouton du "panel"   -->
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseRecherche" aria-expanded="false" aria-controls="collapseRecherche">
                            <p>Recherche</p>
                        </button>
                    </h5>
                    </h5>
                </div>

                <!-- Le contenu  du "panel"  (cacher par défaut) -->
                <div id="collapseRecherche" class="collapse" >
                    <div class="card-body">

                        <ul>
                            <li><p><a href="/recherche/domaine">Domaines de spécialisation des professeurs</a></p></li>
                            <li><p><a href="/recherche/equipe">Équipes de recherche</a></p></li>
                            <li><p><a href="">Mémoires de maîtrise</a></p></li>
                            <li><p><a href="http://w4.uqo.ca/dii/rapports/rr0602abdali.pdf">Rapports de recherche</a></p></li>
                            <li><p><a href="">Projets de recherche sur la sécurité</a></p></li>
                        </ul>

                    </div>
                </div>
            </div>


                <!-- Le "panel"   -->
                <div class="card">
                    <div class="card-header" id="Personnel">
                        <h5 class="mb-0">
                            <!-- Le bouton du "panel"   -->
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsePersonnel" aria-expanded="false" aria-controls="collapsePersonnel">
                                <p>Personnel</p>
                            </button>
                        </h5>
                        </h5>
                    </div>

                    <!-- Le contenu  du "panel"  (cacher par défaut) -->
                    <div id="collapsePersonnel" class="collapse" >
                        <div class="card-body">

                            <ul>
                                <li><p><a href="/personnel/professeurs">Professeurs</a></p></li>
                                <li><p><a href="/personnel/personnel">Personnel de soutien</a></p></li>
                            </ul>

                        </div>
                    </div>
                </div>


                    <!-- Le "panel"   -->
                    <div class="card">
                        <div class="card-header" id="Informations">
                            <h5 class="mb-0">
                                <!-- Le bouton du "panel"   -->
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseInformations" aria-expanded="false" aria-controls="collapseInformations">
                                    <p>Informations générales</p>
                                </button>
                            </h5>
                            </h5>
                        </div>

                        <!-- Le contenu  du "panel"  (cacher par défaut) -->
                        <div id="collapseInformations" class="collapse" >
                            <div class="card-body">

                                <ul>
                                    <li><p><a href="/partenaire">Partenaires éducatifs</a></p></li>
                                    <li><p><a href="">Nouvelles</a></p></li>
                                    <li><p><a href="">Galerie de photos</a></p></li>
                                    <li><p><a href="">Pour nous joindre</a></p></li>
                                </ul>

                            </div>
                        </div>
                    </div>


@endsection

