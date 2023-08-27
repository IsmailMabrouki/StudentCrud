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

    public function edit(Etudiant $etudiant){
        $classes = Classe::all();
        return view('editEtudiant', compact("etudiant","classes"));

    }

    public function delete(Etudiant $etudiant){
        $nom_complet = $etudiant->nom ." ". $etudiant->prenom;
        $etudiant->delete();
        return back()->with("successDelete","Etudiant '$nom_complet' Supprimé avec succè !");
    }

    public function update(Request $request, Etudiant $etudiant){
        $request->validate([
            "nom" => "required",
            "prenom" => "required",
            "classe_id" => "required"
        ]);

        $etudiant->update([
            "nom" => $request->nom,
            "prenom" => $request->prenom,
            "classe_id" => $request->classe_id
        ]);
        return back()->with("successUpdate","Etudiant Modifié avec succè !");
    }
}
