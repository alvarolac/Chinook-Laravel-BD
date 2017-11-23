<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class ArtistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


      return view('buscarArtista');
      //$result = DB::select('select "Name" from "Artist"');
      //return $result;
      //return ("Hola desde el index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return ("Hola desde el create");
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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


    public function buscarArtista()
    {

        $idBuscar = $_GET['id'];
        if($idBuscar == "")
          return ("ID Incorrecto!");

        $artistas = DB::select('select "Name", "Title" from "Artist" INNER JOIN "Album" ON ("Artist"."ArtistId" = "Album"."ArtistId") WHERE "Artist"."ArtistId" = ?',[$idBuscar]);
        $count = DB::select('select "Name" from "Artist" WHERE "Artist"."ArtistId" = ?',[$idBuscar]);

        if(sizeof($count) == 0)
          return ("Artista No Encontrado!");


        return view('mostrarArtista', compact('artistas'));


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
