<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Offre;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('accueil');
    }

    public function create(){
        //
    }

    //Fonction de logout
    public function logout(Request $request){
        Auth::logout();
        return redirect('/');
    }

    //Inserer une offre dans la BD
    public function store(Request $request){
        //Creer l'offre
        $offre = new Offre();
        //Remplir l'offre
        $offre->Employeur = $request->post('Employeur');
        $offre->Coordonnees = $request->post('Coordonnees');
        $offre->TypeEtudiant = $request->post('TypeEtudiant');
        $offre->Connaissances = $request->post('Connaissances');
        $offre->DescriptionEmploi = $request->post('DescriptionEmploi');
        $offre->NombreEtudiants = $request->post('NombreEtudiants');
        $offre->DateFinAffichage = $request->post('DateFinAffichage');
        //On sauvegarde l'offre
        $offre->save();

        //Confirmation de l'entree
        echo '<script type="text/javascript">alert("Offre cree avec succes")</script>';

        //On emmene l'utilisateur vers l'affichage des offres
        return view('emploi/offres');
        //return view('emploi/offres');
    }

    //Affiche les offres dans la page d'affichage
    public function show(){
        //Le dataset des offres (Appel du model Offre)
        $offres = App/Offre::all();

        //Fonction test
        foreach($offres as $offre){
            echo $offre->id;
        }
    }

    //Editer l'offre dans la BD
    public function edit(Offre $offre){
        if (isset($_GET['id']))
        {
            $offre->nom = $_GET["id"];
            $offre->save();
        }

        // Retourner en arrière
        return redirect()->back();

    }

    //Supprimer l'offre dans la BD
    public function destroy(Offre $offre){
        // Supprimer l'offre
        $offre->delete();

        // Retourner en arrière
        return redirect()->back();

    }
}
