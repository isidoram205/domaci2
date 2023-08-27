<?php

namespace App\Http\Controllers;

use App\Models\Krema;
use App\Http\Resources\KremaResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class KremaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kreme= Krema::all();
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
        $validator = Validator::make($request->all(), [
            'proizvodjac_id'=>'required',
            'user_id'=>'required',
            'naziv'=>'required|string|max:255',
            'cena'=>'required',
            'link'=>'required|string|max:120',
            'tipKreme'=>'required|string'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $krema->proizvodjac_id = $request->proizvodjac_id;
        $krema->user_id = $request->user_id;
        $krema->naziv = $request->naziv;
        $krema->cena = $request->cena;
        $krema->link = $request->link;
        $krema->tipKreme = $request->tipKreme;

        $krema->save();
        return response()->json(['Krema je azurirana', new KremaResource($krema)]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Krema $krema_id)
    {
        Krema::destroy($krema_id);
        return response()->json('Krema je uspesno obrisana!');
    }
}
