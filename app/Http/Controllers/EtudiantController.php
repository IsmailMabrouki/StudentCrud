<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Etudiant;
use Illuminate\Http\Request;


class EtudiantController extends Controller
{
    public function index(){
        
        $etudiants = Etudiant::orderBy("nom","asc")->paginate(5);
        return view('etudiant', compact("etudiants"));
    }

    public function create(){
        
        $classes = Classe::all();
        return view('createEtudiant', compact("classes"));
    }

    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            "nom" => "required",
            "prenom" => "required",
            "classe_id" => "required"
        ]);

        Etudiant::create([
            "nom" => $request->nom,
            "prenom" => $request->prenom,
            "classe_id" => $request->classe_id
        ]);
        // session()->flash("success", "l'Etudiant a bien été ajouté");
        // return redirect()->route('etudiant');
        return back()->with("success","Etudiant Ajouté avec succè !");
        return redirect()->route("etudiant");
    }
}
