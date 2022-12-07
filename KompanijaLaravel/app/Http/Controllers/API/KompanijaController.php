<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Kompanija;
use Illuminate\Http\Request;
use App\Http\Resources\KompanijaResource;
use Illuminate\Support\Facades\Validator;

class KompanijaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kompanije = Kompanija::all();
        return KompanijaResource::collection($kompanije); 

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kompanija  $kompanija
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kompanija = Kompanija::find($id);
        return new KompanijaResource($kompanija);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kompanija  $kompanija
     * @return \Illuminate\Http\Response
     */
    public function edit(Kompanija $kompanija)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kompanija  $kompanija
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'naziv' => 'required|string',
            'adresa' => 'required|string',
            'email' => 'required|email',
            'website' => 'required|string',
		    'direktor' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $kompanija = Kompanija::find($id);

        if ($kompanija) {
            $kompanija->naziv = $request->naziv;
            $kompanija->adresa = $request->adresa;
            $kompanija->email = $request->email;
            $kompanija->website = $request->website;
            $kompanija->direktor = $request->direktor;


            $kompanija->save();

            return response()->json(['Kompanija je izmenjena!',new KompanijaResource($kompanija)]);
        } else {
            return response()->json('Neuspesna pretraga kompanije, ovaj id ne identifikuje nijednu kompaniju!');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kompanija  $kompanija
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kompanija = Kompanija::find($id);
        if ($kompanija) {
            $kompanija->delete();
            return response()->json(['Kompanija je uspesno obrisana!', new KompanijaResource($kompanija)]);
        } else {
            return response()->json(' Neuspesna pretraga kompanije, ovaj id ne identifikuje nijednu kompaniju!');
        }
    }

}
