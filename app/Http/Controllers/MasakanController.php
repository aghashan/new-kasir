<?php

namespace App\Http\Controllers;

use App\Models\masakan;
use App\Http\Requests\StoremasakanRequest;
use App\Http\Requests\UpdatemasakanRequest;

class MasakanController extends Controller
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
     * @param  \App\Http\Requests\StoremasakanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoremasakanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\masakan  $masakan
     * @return \Illuminate\Http\Response
     */
    public function show(masakan $masakan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\masakan  $masakan
     * @return \Illuminate\Http\Response
     */
    public function edit(masakan $masakan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemasakanRequest  $request
     * @param  \App\Models\masakan  $masakan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatemasakanRequest $request, masakan $masakan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\masakan  $masakan
     * @return \Illuminate\Http\Response
     */
    public function destroy(masakan $masakan)
    {
        //
    }
}
