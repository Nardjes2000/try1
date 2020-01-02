<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\these;

class TheseController extends Controller
{
  /*
  |--------------------------------------------------------------------------
  | Controlleur des théses
  |--------------------------------------------------------------------------
  | Ce controlleur est résponsable de l'ajout et de la suppression et de la mise à jour des théses
  |
  */



    /**
    *   Méthode permettant de récuperer tous les théses de la bdd.
    * @return object[]  tableaux contenant les thèses recuperées de la bdd
    */

    public function index()
    {
      $these = These::all();
      return $these->toJson();
    }


    /**
    *   Méthode permettant d'afficher une thése
    *  @param these
    * @return object thése affichée
    */

    public function show(these $these)
    {
        return $these;
    }


    /**
    *   Méthode permettant de créer et d'ajouter une thèse dans la bdd
    * @param request requette emise par le naviguateur
    * @return string  réponse en json
    */


    public function store(Request $request)
    {
     $these = these::create($request->all());

          return response()->json('Succes!');

    }


    /**
    *   Méthode permettant de faire la mise à jour d'une thèse à partir d'une requette récupérée
    * @param request requette emise par le naviguateur
    * @param these
    * @return object réponse en json
    */


    public function update(Request $request, these $these)
    {
        $these->update($request->all());

        return response()->json($these, 200);
    }


    /**
    *   Méthode permettant de supprimer une thèse de la base de données
    *   @param these la thèse à supprimer
    * @return object réponse en json
    */

    public function delete(these $these)
    {
        $these->delete();

        return response()->json(null, 204);
    }

}
