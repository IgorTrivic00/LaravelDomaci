<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Grad;
use Illuminate\Http\Request;
use App\Http\Resources\GradResource;

class GradController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Grad  $grad
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $grad = Grad::find($id);
        return new GradResource($grad);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grad  $grad
     * @return \Illuminate\Http\Response
     */
    public function edit(Grad $grad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Grad  $grad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grad $grad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grad  $grad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grad $grad)
    {
        //
    }
}
