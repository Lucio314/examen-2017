<?php

namespace App\Http\Controllers;


use App\Models\Candidat;
use App\Models\Filiere;
use Illuminate\Http\Request;

class CandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filieres = Filiere::all();
        if ($request->has('search')) {
            $search = $request->input('search');
            $candidats = Candidat::where('codefil', 'like', "%$search%")->get();

            return view('recherche', compact('candidats', 'filieres'));
        }

        $candidats = Candidat::all();

        return view('recherche', compact('candidats', 'filieres'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $filieres = Filiere::all();

        return view('saisi', compact('filieres'));
    }

    public function recherche()
    {
        return view('recherche');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->all();

        // Create a new Candidat instance
        $candidat = new Candidat();
        $candidat->nom = $request->nom;
        $candidat->prénom = $request->prénom;
        $candidat->datnais = $request->datnais;
        $candidat->ville = $request->ville;
        $candidat->sexe = $request->sexe;
        $candidat->codefil = $request->codefil;

        // Save the candidat
        $candidat->save();

        return redirect()->route('candidats.index')->with('success', "enregistrement effectué avec succès");
    }

    /**
     * Display the specified resource.
     */
    public function show(Candidat $candidat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Candidat $candidat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Candidat $candidat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Candidat $candidat)
    {
        //
    }
}
