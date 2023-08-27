<?php

namespace App\Http\Controllers;

use App\Models\Industrija;
use App\Http\Resources\IndustrijaResource;
use Illuminate\Http\Request;

class IndustrijaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $industrije = Industrija::all();
        return IndustrijaResource::collection($industrije);
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
    public function show(Industrija $industrija)
    {
        return new IndustrijaResource($industrija);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Industrija $industrija)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Industrija $industrija)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($industrija_id)
    {
        Industrija::destroy($industrija_id);
        return response()->json('Uspesno obrisano!');
    }
}
