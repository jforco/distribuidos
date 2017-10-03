<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Anuncio;
use Illuminate\Http\Request;
use Illuminate\Database\Query\Builder;
class AnuncioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anuncios = Anuncio::where('anuncio_activo', '=', true)->get()->toArray();

        return response()->json($anuncios, 201);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $anuncio = Anuncio::create($request->all());
        return response()->json($anuncio, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Anuncio  $anuncio
     * @return \Illuminate\Http\Response
     */
    public function show(Anuncio $anuncio)
    {
        //
        return $anuncio;
    }

  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Anuncio  $anuncio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anuncio $anuncio)
    {
        //
        $anuncio->update($request->all());

        return response()->json($anuncio, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Anuncio  $anuncio
     * @return \Illuminate\Http\Response
     */
    /*public function destroy(Anuncio $anuncio)
    {
        //
        $article->anuncio_activo = false;

        return response()->json(null, 204);
    }*/
}
