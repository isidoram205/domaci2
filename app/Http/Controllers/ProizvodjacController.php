<?php

namespace App\Http\Controllers;

use App\Models\Proizvodjac;
use App\Http\Resources\ProizvodjacResource;
use Illuminate\Http\Request;

class ProizvodjacController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $proizvodjaci = Proizvodjac::all();
        return ProizvodjacResource::collection($proizvodjaci);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Proizvodjac $proizvodjac)
    {
        //
        return new ProizvodjacResource($proizvodjac);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proizvodjac $proizvodjac)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proizvodjac $proizvodjac)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proizvodjac $proizvodjac_id)
    {
        $proizvodjac = Proizvodjac::find($proizvodjac_id);
        if(is_null($proizvodjac)){
            return response()->json('Proizvodjac nije pronadjen', 404);
        }
        $proizvodjac->delete();
        return response()->json('Proizvodjac je obrisan');
    }
}
