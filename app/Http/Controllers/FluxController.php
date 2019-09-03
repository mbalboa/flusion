<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flux;
use App\Fabricant;

class FluxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(['status'=>'ok','data'=>Flux::all()], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $flux = new Flux;

<<<<<<< HEAD
      $flux->idf = $request->idf;
      $flux->fichier = $request->fichier;
      $flux->repertoire = $request->repertoire;
      $flux->format = $request->format;
      $flux->type = $request->type;
      $flux->taille = $request->taille;
=======
      $flux->hostname = $request->hostname;
      $flux->systeme_exploitation = $request->systeme_exploitation;
      $flux->flavors = $request->flavors;
      $flux->reseau = $request->reseau;
      $flux->stockage = $request->stockage;
>>>>>>> 2abebc68150889f1b3f2e53fba301edfb2bdcac7
      $flux->fabricant_id = $request->fabricant_id;
      //$flux->fabricant_id = Fabricant::find($request->nom)->id;

      $flux->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($num)
    {
      $flux=Flux::find($num);

      if (!$flux)
        {
            return response()->json(['errors'=>array(['code'=>404,'message'=>'Aucun flux avec ce numéro'])],404);
        }
            return response()->json(['status'=>'ok','data'=>$flux],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
