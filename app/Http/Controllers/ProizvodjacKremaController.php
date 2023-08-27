<?php

namespace App\Http\Controllers;

use App\Models\Krema;
use App\Http\Resources\KremaResource;
use Illuminate\Http\Request;

class ProizvodjacKremaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($proizvodjac_id)
    {
        $kreme = Krema::get()->where('proizvodjac_id', $proizvodjac_id);
        if(is_null($kreme)){
            return response()->json('Nisu pronadjene kreme', 404);
        }
        return KremaResource::collection($kreme);
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
    public function show(Krema $krema)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Krema $krema)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Krema $krema)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Krema $krema)
    {
        //
    }
}
