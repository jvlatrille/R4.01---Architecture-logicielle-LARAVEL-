<?php

namespace App\Http\Controllers\API;

use App\Models\Sauce;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SauceController extends Controller
{
    // Retourner la liste des sauces
    public function index()
    {
        return response()->json(Sauce::all());
    }

    // Enregistrer une nouvelle sauce et renvoyer l'objet créé
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

        $sauce = Sauce::create($data);
        return response()->json($sauce, 201);
    }

    // Afficher les détails d'une sauce
    public function show(Sauce $sauce)
    {
        return response()->json($sauce);
    }

    // Mettre à jour une sauce et renvoyer l'objet mis à jour
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
        return response()->json($sauce);
    }

    // Supprimer une sauce
    public function destroy(Sauce $sauce)
    {
        $sauce->delete();
        return response()->json(null, 204);
    }
}
