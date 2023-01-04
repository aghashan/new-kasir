<?php

namespace App\Http\Controllers;

use App\Models\meja;
use App\Http\Requests\StoremejaRequest;
use App\Http\Requests\UpdatemejaRequest;

class MejaController extends Controller
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
     * @param  \App\Http\Requests\StoremejaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoremejaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\meja  $meja
     * @return \Illuminate\Http\Response
     */
    public function show(meja $meja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\meja  $meja
     * @return \Illuminate\Http\Response
     */
    public function edit(meja $meja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemejaRequest  $request
     * @param  \App\Models\meja  $meja
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatemejaRequest $request, meja $meja)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\meja  $meja
     * @return \Illuminate\Http\Response
     */
    public function destroy(meja $meja)
    {
        //
    }
}
