@extends('layouts.template')



@section('template')

    <h1>Programmes d'études de 2e cycle</h1>
    <ul>

        <li><p><a href="https://apps.uqo.ca/AdmissionEnLigne/Directives.aspx">Demande d'admission en ligne</a></p></li>
        <li><p>Programmes de 2e cycle</p></li>
        <ul>
            <li><p><a href="http://etudier.uqo.ca/programmes/1642">Maîtrise en sciences et technologies de l'information (profil mémoire)</a></p></li>
            <li><p><a href="http://etudier.uqo.ca/programmes/1643">Maîtrise en sciences et technologies de l'information (profil professionnel)</a></p></li>
            <li> <p><a href="http://etudier.uqo.ca/programmes/1641">Diplôme d'études supérieures spécialisées en sciences et technologies de l'information</a></p></li>
            <li> <p><a href="http://etudier.uqo.ca/programmes/0642">Programme court de deuxième cycle en télécommunications et sécurité</a></p></li>
            <li><p><a href="http://etudier.uqo.ca/programmes/0641">Programme court de deuxième cycle en traitement des données</a></p></li>
        </ul> 

        <li><p>Programmes de 3e cycle</p></li>
            <ul>
                <li><p><a href="http://etudier.uqo.ca/programmes/3081">Doctorat en sciences et technologies de l'information</a></p></li>
            </ul>
    </ul>

    <h1>Renseignements utiles pour les étudiants de 2e cycle</h1>
    <ul>

        <!-- Le "panel"   -->
        <div class="card">
            <div class="card-header" id="Formulaires">
                <h5 class="mb-0">
                    <!-- Le bouton du "panel"   -->
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFormulaires" aria-expanded="false" aria-controls="collapseFormulaires">
                        <li><p style="color: black">Formulaires</p></li>
                    </button>
                </h5>
            </div>


            <!-- Le contenu  du "panel"  (cacher par défaut) -->
            <div id="collapseFormulaires" class="collapse" >
                <div class="card-body">
                    <ul>
                        <li><p>Formulaires généraux</p></li>

                        <ul>
                            <li><p><a href="">Absence autorisée</a></p></li>
                            <li><p><a href="">INF6093 Lectures dirigées</a></p></li>
                            <li><p><a href="https://uqo.ca/docs/10267">Évaluation trimestrielle</a></p></li>
                        </ul>


                        <li><p>Projet mémoire (INF6111)</p></li>

                        <ul>
                            <li><p>Étape 1</p></li>
                            <ul>
                                <li><p><a href="https://uqo.ca/docs/10020">Nomination du directeur de recherche</a></p></li>
                                <li><p><a href="https://uqo.ca/docs/10266">Approbation du sujet de recherche</a></p></li>
                                <li><p><a href="">Inscription au projet de mémoire</a> <a href="http://w4.uqo.ca/dii/stat/docuM/projet_memoire/ContenuINF6111.pdf">(Contenu du projet de mémoire)</a></p></li>  <!–– To Do faire donwload onclik ––>
                                <li><p><a href="https://uqo.ca/ethique/formulaires">Certificat d’approbation éthique</a></p></li>
                            </ul>

                            <li><p>Étape 2</p></li>
                            <ul>
                                <li><p><a href="https://uqo.ca/docs/10293">Nomination des membres du jury</a></p></li>
                                <li><p><a href="">Présentation du projet de mémoire</a></p></li>
                                <li><p><a href="">Évaluation du projet de mémoire</a></p></li>
                            </ul>
                        </ul>

                        <li><p>Mémoire (INF6021)</p></li>
                        <!–– To Do faire si "Mémoire (INF6021)" select ovrir ul ––>
                        <ul>
                            <li><p><a href="">Template Word pour le mémoire</a></p></li>
                            <li><p><a href="">Template latex pour le mémoire</a></p></li>

                            <li><p>Étape 1</p></li>
                            <ul>
                                <li><p><a href="https://uqo.ca/docs/10292">Dépôt initial du mémoire de maîtrise</a></p></li>
                                <li><p><a href="">Présentation du mémoire</a></p></li>
                                <li><p><a href="">Évaluation individuelle du mémoire de maîtrise</a></p></li>
                                <li><p><a href="">Évaluation synthèse du mémoire de maîtrise</a></p></li>
                            </ul>

                            <li><p>Étape 2</p></li>
                            <ul>
                                <li><p><a href="https://uqo.ca/docs/10297">Attestation de dépôt final - mémoire</a></p></li>
                                <li><p><a href="">Dépôt final du mémoire de maîtrise (archivage)</a></p></li>
                                <li><p><a href="http://w4.uqo.ca/dii/stat/docuM/memoire/autorisation.pdf">Formulaire pour le dépôt légal de Bibliothèque et archive Canada</a></p></li>
                            </ul>
                        </ul>



                        <li><p>Essai (INF6014)</p></li>
                        <!–– To Do faire si "Essai (INF6014)" select ovrir ul ––>
                        <ul>
                            <li><p><a href="">Guide pour l'essai</a></p></li>
                            <li><p><a href="">Template Word pour l’essai (maîtrise)</a></p></li>
                            <li><p><a href="">Template Word pour l’essai (DESS)</a></p></li>

                            <li><p>Étape 1</p></li>
                            <ul>
                                <li><p><a href="https://uqo.ca/docs/10020">Nomination du directeur de recherche</a></p></li>
                                <li><p><a href="">Inscription à l’essai (INF6014)</a></p></li>
                            </ul>

                            <li><p>Étape 2</p></li>
                            <ul>
                                <li><p><a href="https://uqo.ca/docs/10293">Nomination des membres du jury</a></p></li>
                                <li><p><a href="">Dépôt initial de l’essai</a></p></li>
                                <li><p><a href="">Annonce de présentation orale de l’essai (DESS)</a></p></li>
                                <li><p><a href="">Annonce de présentation orale de l’essai (maîtrise)</a></p></li>
                                <li><p><a href="">Évaluation individuelle</a></p></li>
                                <li><p><a href="">Évaluation synthèse de l’essai</a></p></li>
                            </ul>
                            <li><p>Étape 3</p></li>
                            <ul>
                                <li><p><a href="">Dépôt final de l’essai</a></p></li>
                                <li><p><a href="">Attestation de dépôt final de l’essai</a></p></li>
                            </ul>
                        </ul>

                        <li><p>Stage et Rapport de stage (INF5016, INF6028)</p></li>
                        <!–– To Do faire si "Stage et Rapport de stage (INF5016, INF6028)" select ovrir ul ––>
                        <ul>
                            <li><p><a href="">Guide</a></p></li>
                            <li><p><a href="">Template Word pour le rapport de stage (maîtrise)</a></p></li>
                            <li><p><a href="">Template Word pour le rapport de stage (DESS)</a></p></li>

                            <li><p>Étape 1</p></li>
                            <ul>
                                <li><p><a href="">Choix du responsable de stage (INF5016)</a></p></li>
                                <li><p><a href="">Inscription au stage (INF5016)</a></p></li>
                                <li><p><a href="">Inscription au rapport de stage (INF6028)</a></p></li>
                                <li><p><a href="">Certificat d’approbation éthique</a></p></li>
                                <li><p><a href="">Évaluation du stage par le superviseur (INF5016)</a></p></li>
                                <li><p><a href="">Évaluation synthèse du stage (INF5016)</a></p></li>
                            </ul>

                            <li><p>Étape 2</p></li>
                            <ul>
                                <li><p><a href="https://uqo.ca/docs/10293"></a>Nomination des membres du jury</p></li>
                                <li><p><a href=""></a>Dépôt initial du rapport de stage (INF6028)</p></li>
                                <li><p><a href="">Annonce de présentation orale du rapport de stage (maîtrise)</a></p></li>
                                <li><p><a href="">Annonce de présentation orale du rapport de stage (DESS)</a></p></li>
                                <li><p><a href="">Évaluation synthèse du rapport de stage (INF6028)</a></p></li>
                                <li><p><a href="">Évaluation individuelle du rapport de stage (INF6028)</a></p></li>
                            </ul>
                            <li><p>Étape 3</p></li>
                            <ul>
                                <li><p><a href="">Attestation de dépôt final du rapport de stage</a></p></li>
                                <li><p><a href="">Dépôt final du rapport de stage (archivage)</a></p></li>
                            </ul>
                        </ul>
                    </ul>

                </div>
            </div>
        </div>



        <li><p>Bourses et aide financière</p></li>
        <ul>
            <li><p><a href="https://uqo.ca/etudiants/financer-vos-etudes/bourses-d-etudes">Bourses internes de l'UQO</a></p></li>
            <li><p><a href="http://www.nserc-crsng.gc.ca/Students-Etudiants/PG-CS/CGSM-BESCM_fra.asp">Bourses du CRSNG</a></p></li>
            <li><p><a href="http://www.frqnt.gouv.qc.ca/fr/bourses-et-subventions">Bourses du FQRNT</a></p></li>
            <li><p><a href="http://w4.uqo.ca/pelc/caldi/francais/bourses.htm">Bourse de la chaire en calcul distribué (CALDI)</a></p></li>
        </ul>


        <!-- Le "panel"   -->
        <div class="card">
            <div class="card-header" id="Programmation">
                <h5 class="mb-0">
                    <!-- Le bouton du "panel"   -->
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseProgrammation" aria-expanded="false" aria-controls="collapseProgrammation">
                        <li><p style="color: black">Programmation des cours de 2e cycle</p></li>
                    </button>
                </h5>
            </div>

            <!-- Le contenu  du "panel"  (cacher par défaut) -->
            <div id="collapseProgrammation" class="collapse" >
                <div class="card-body">

                    <ul>
                        <li><p>Programmation 2017-2018</p></li>
                        <ul>
                            <li><p>Automne 2017</p></li>
                            <ul>
                                <li><p>INF6123 Structures de données avancées</p></li>
                                <li><p>INF6193 Intelligence d'affaires</p></li>
                                <li><p>INF6243 Techniques d’apprentissage</p></li>
                                <li><p>INF6163 Introduction à la cryptographie</p></li>
                                <li><p>INF6273 Technologie avancée en télécommunication</p></li>
                            </ul>
                            <li><p>Hiver 2018</p></li>
                            <ul>
                                <li><p>INF6031 Rédaction et présentation scientifiques</p></li>
                                <li><p>INF6153 Systèmes de contrôle d'accès aux données</p></li>
                                <li><p>INF7093 Éléments avancés d'analyse d'images</p></li>
                                <li><p>INF6143 Bases de données avancées</p></li>
                            </ul>

                        </ul>

                        <li><p>Programmation 2018-2019</p></li>
                        <ul>
                            <li><p>À venir</p></li>

                        </ul>

                    </ul>

                </div>
            </div>
        </div>


        <li><p><a href="">Offres de stage disponibles</a></p></li>

        <li><p><a href="http://w4.uqo.ca/dii/stat/foire_questions_2e_cycle.html">Foire aux questions</a></p></li>

        <li><p><a href="https://apps.uqo.ca/AdmissionEnLigne/Directives.aspx">Demande d'admission en ligne</a></p></li>

        <li><p>Programmes de 2e cycle</p></li>
        <ul>
            <li><p><a href="http://etudier.uqo.ca/programmes/1642">Maîtrise en sciences et technologies de l'information (profil mémoire)</a></p></li>
            <li><p><a href="http://etudier.uqo.ca/programmes/1643">Maîtrise en sciences et technologies de l'information (profil professionnel)</a></p></li>
            <li> <p><a href="http://etudier.uqo.ca/programmes/1641">Diplôme d'études supérieures spécialisées en sciences et technologies de l'information</a></p></li>
            <li> <p><a href="http://etudier.uqo.ca/programmes/0642">Programme court de deuxième cycle en télécommunications et sécurité</a></p></li>
            <li><p><a href="http://etudier.uqo.ca/programmes/0641">Programme court de deuxième cycle en traitement des données</a></p></li>
        </ul>

    </ul>

@endsection

