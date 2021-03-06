@extends('layouts.template')

<!DOCTYPE html>
<html>
<head>

</head>
<body>

@section('template')


    <h1>ÉQUIPES DE RECHERCHE</h1>

    <h2><a href="">Centre de recherche en photonique</a></h2>
    <ul>
        <!-- Le "panel"   -->
        <div class="card">
            <div class="card-header" id="photonique">
                <h5 class="mb-0">
                    <!-- Le bouton du "panel"   -->
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsephotonique" aria-expanded="false" aria-controls="collapsephotonique">
                            <img alt="photonique" style="border:1px solid" width="100" height="100" src="/img/photonique.png">
                        </button>
                </h5>
            </div>
            <!-- Le contenu  du "panel"  (cacher par défaut) -->
            <div id="collapsephotonique" class="collapse" >
                <div class="card-body">
                    <li><p><a href="http://www.chairs-chaires.gc.ca/chairholders-titulaires/profile-fra.aspx?profileID=450">Chaire de recherche du Canada en photonique</a></p></li>
                    <li><p>Domaines de recherche: senseurs et systèmes photoniques électroniques, communication en fibres optiques et sans fil</p></li>
                    <li><p>Applications: sécurité nationale (détection de matériaux explosifs), génie civile (mesures de l'intégrité de constructions, environnement (détection de polluants)</p></li>
                    <li><p><a href="">Description détaillée des activités</a></p></li>
                </div>
            </div>
        </div>
    </ul>


    <h2><a href="">CALDI - Chaire de recherche en calcul distribué</a></h2>
    <ul>
        <!-- Le "panel"   -->
        <div class="card">
            <div class="card-header" id="CALDI">
                <h5 class="mb-0">
                    <!-- Le bouton du "panel"   -->
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseCALDI" aria-expanded="false" aria-controls="collapseCALDI">
                        <img alt="CALDI" style="border:1px solid" width="100" height="100" src="/img/CALDI.png">
                    </button>
                </h5>
            </div>
            <!-- Le contenu  du "panel"  (cacher par défaut) -->
            <div id="collapseCALDI" class="collapse" >
                <div class="card-body">
                    <li><p>Communication dans des environnements partiellement inconnus</p></li>
                    <li><p>Communication dans des réseaux défectueux</p></li>
                    <li><p>Exploration des réseaux</p></li>
                    <li><p>Communication dans les réseaux sans fil et les réseaux mobiles</p></li>
                </div>
            </div>
        </div>
    </ul>

    <h2><a href="http://larim.uqo.ca/index.html">LARIM : LAboratoire de Recherche sur l'Information Multimédia</a></h2>
    <ul>
        <!-- Le "panel"   -->
        <div class="card">
            <div class="card-header" id="LARIM">
                <h5 class="mb-0">
                    <!-- Le bouton du "panel"   -->
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseLARIM" aria-expanded="false" aria-controls="collapseLARIM">
                        <img alt="LARIM" style="border:1px solid" width="100" height="100" src="/img/LARIM.png">
                    </button>
                </h5>
            </div>
            <!-- Le contenu  du "panel"  (cacher par défaut) -->
            <div id="collapseLARIM" class="collapse" >
                <div class="card-body">
                    <li><p>Analyse formelle de concepts pour la fouille de données (data mining)</p></li>
                    <li><p>Fouille dans les cubes de données</p></li>
                    <li><p>Recherche d'images selon le contenu</p></li>
                    <li><p>Extraction de caractéristiques visuelles d'images avec application à la résolution de problèmes en foresterie</p></li>
                    <li><p>Fouille de motifs (patterns) séquentiels enrichis</p></li>
                    <li><p>Techniques de watermarking pour la sécurité des données multimédia</p></li>
                </div>
            </div>
        </div>
    </ul>

    <h2><a href="">LSSI : Laboratoire de Systèmes Spatiaux Intelligents</a></h2>
    <ul>
        <!-- Le "panel"   -->
        <div class="card">
            <div class="card-header" id="LSSI">
                <h5 class="mb-0">
                    <!-- Le bouton du "panel"   -->
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseLSSI" aria-expanded="false" aria-controls="collapseLSSI">
                        <img alt="LSSI" style="border:1px solid" width="100" height="100" src="/img/LSSI.png">
                    </button>
                </h5>
            </div>
            <!-- Le contenu  du "panel"  (cacher par défaut) -->
            <div id="collapseLSSI" class="collapse" >
                <div class="card-body">
                    <li><p>Application de l'intelligence artificielle dans les domaines de la télédétection, du support décisionnel, de la robotique, etc.</p></li>
                    <li><p>Méthodes et outils pour le traitement adaptatif d'images satellites et de données Lidar</p></li>
                    <li><p>Apprentissage automatique et réseaux neuronaux</p></li>
                    <li><p>Détection de formes et classification en temps réel</p></li>
                </div>
            </div>
        </div>
    </ul>


    <h2><a href="">LRSI - Laboratoire de Recherche en Sécurité Informatique</a></h2>
    <ul>
        <!-- Le "panel"   -->
        <div class="card">
            <div class="card-header" id="LRSI">
                <h5 class="mb-0">
                    <!-- Le bouton du "panel"   -->
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseLRSI" aria-expanded="false" aria-controls="collapseLRSI">
                        <img alt="LRSI" style="border:1px solid" width="100" height="100" src="/img/LRSI.png">
                    </button>
                </h5>
            </div>
            <!-- Le contenu  du "panel"  (cacher par défaut) -->
            <div id="collapseLRSI" class="collapse" >
                <div class="card-body">
                    <li><p>Mise en place d'un cadre et d'outils logiciels pour le développement formel et systématique des protocoles de sécurité et des protocoles de e-commerce.</p></li>
                    <li><p>Élaboration de techniques formelles et d'outils informatiques pour la vérification des systèmes de détection d'intrusions.</p></li>
                    <li><p>Élaboration de méthodologies pour la vérification et l'analyse des configurations dans les systèmes pare-feux.</p></li>
                    <li><p>Élaboration de techniques de détection de codes malicieux dans les logiciels.</p></li>
                    <li><p>Compilation certifiée.</p></li>
                </div>
            </div>
        </div>
    </ul>

    <h2><a href="">LIMA - Laboratoire d'Ingénierie des Microsystèmes Avancés</a></h2>
    <ul>
        <!-- Le "panel"   -->
        <div class="card">
            <div class="card-header" id="LIMA">
                <h5 class="mb-0">
                    <!-- Le bouton du "panel"   -->
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseLIMA" aria-expanded="false" aria-controls="collapseLIMA">
                        <img alt="LIMA" style="border:1px solid" width="100" height="100" src="/img/LIMA.png">
                    </button>
                </h5>
            </div>
            <!-- Le contenu  du "panel"  (cacher par défaut) -->
            <div id="collapseLIMA" class="collapse" >
                <div class="card-body">
                    <li><p>Prototypage rapide des circuits numériques à grande complexité</p></li>
                    <li><p>Développement de nouveaux concepts architecturaux d'algorithmes implantables sur circuits VLSI</p></li>
                    <li><p>Conception des réseaux de capteurs thermomécaniques appliqués aux systèmes sur puce (SoC)</p></li>
                </div>
            </div>
        </div>
    </ul>

    <h2><a href="">LRCL - Laboratoire de recherche en communications sans fil large bande</a></h2>
    <ul>
        <!-- Le "panel"   -->
        <div class="card">
            <div class="card-header" id="LRCL">
                <h5 class="mb-0">
                    <!-- Le bouton du "panel"   -->
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseLRCL" aria-expanded="false" aria-controls="collapseLRCL">
                        <img alt="LRCL" style="border:1px solid" width="100" height="100" src="/img/LRCL.png">
                    </button>
                </h5>
            </div>
            <!-- Le contenu  du "panel"  (cacher par défaut) -->
            <div id="collapseLRCL" class="collapse" >
                <div class="card-body">
                    <li><p>Les communications à haut débit par diffusion sur des édifices</p></li>
                    <li><p>La caractérisation du canal de propagation intra-immeuble en EHF</p></li>
                    <li><p>Les communications dans les mines souterraines en ultra-large bande (UWB)</p></li>
                    <li><p>Le développement de dispositifs microondes, MMIC, SIW, CPW, etc.</p></li>
                </div>
            </div>
        </div>
    </ul>

@endsection

</body>
</html>