<?php

namespace App\Http\Controllers;

use App\Models\Hpurchase;
use App\Http\Requests\StoreHpurchaseRequest;
use App\Http\Requests\UpdateHpurchaseRequest;

class HpurchaseController extends Controller
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
     * @param  \App\Http\Requests\StoreHpurchaseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHpurchaseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hpurchase  $hpurchase
     * @return \Illuminate\Http\Response
     */
    public function show(Hpurchase $hpurchase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hpurchase  $hpurchase
     * @return \Illuminate\Http\Response
     */
    public function edit(Hpurchase $hpurchase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHpurchaseRequest  $request
     * @param  \App\Models\Hpurchase  $hpurchase
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHpurchaseRequest $request, Hpurchase $hpurchase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hpurchase  $hpurchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hpurchase $hpurchase)
    {
        //
    }
}
