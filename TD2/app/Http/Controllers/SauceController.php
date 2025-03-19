<?php

namespace App\Http\Controllers;

use App\Models\Sauce;
use Illuminate\Http\Request;

class SauceController extends Controller
{
    // Afficher la liste des sauces
    public function index()
    {
        $sauces = Sauce::all();
        return view('sauces.index', compact('sauces'));
    }
    
    // Afficher le formulaire de création
    public function create()
    {
        return view('sauces.create');
    }
    
    // Enregistrer une nouvelle sauce
    public function store(Request $request)
    {
        $data = $request->validate([
            'userId'       => 'required|string',
            'name'         => 'required|string',
            'manufacturer' => 'required|string',
            'description'  => 'required|string',
            'mainPepper'   => 'required|string',
            'imageUrl'     => 'required|url',
            'heat'         => 'required|integer|min:1|max:10'
        ]);

        Sauce::create($data);
        return redirect()->route('sauces.index');
    }
    
    // Afficher les détails d'une sauce
    public function show(Sauce $sauce)
    {
        return view('sauces.show', compact('sauce'));
    }
    
    // Afficher le formulaire d'édition
    public function edit(Sauce $sauce)
    {
        return view('sauces.edit', compact('sauce'));
    }
    
    // Mettre à jour la sauce
    public function update(Request $request, Sauce $sauce)
    {
        $data = $request->validate([
            'userId'       => 'required|string',
            'name'         => 'required|string',
            'manufacturer' => 'required|string',
            'description'  => 'required|string',
            'mainPepper'   => 'required|string',
            'imageUrl'     => 'required|url',
            'heat'         => 'required|integer|min:1|max:10'
        ]);

        $sauce->update($data);
        return redirect()->route('sauces.index');
    }
    
    // Supprimer une sauce
    public function destroy(Sauce $sauce)
    {
        $sauce->delete();
        return redirect()->route('sauces.index');
    }
}
