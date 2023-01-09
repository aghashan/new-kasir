<?php

namespace App\Http\Controllers;

use App\Models\detail_pesanan;
use App\Http\Requests\Storedetail_pesananRequest;
use App\Http\Requests\Updatedetail_pesananRequest;

class DetailPesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/admin/content/detailpesanan/index');
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
     * @param  \App\Http\Requests\Storedetail_pesananRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storedetail_pesananRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\detail_pesanan  $detail_pesanan
     * @return \Illuminate\Http\Response
     */
    public function show(detail_pesanan $detail_pesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\detail_pesanan  $detail_pesanan
     * @return \Illuminate\Http\Response
     */
    public function edit(detail_pesanan $detail_pesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatedetail_pesananRequest  $request
     * @param  \App\Models\detail_pesanan  $detail_pesanan
     * @return \Illuminate\Http\Response
     */
    public function update(Updatedetail_pesananRequest $request, detail_pesanan $detail_pesanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\detail_pesanan  $detail_pesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(detail_pesanan $detail_pesanan)
    {
        //
    }
}
