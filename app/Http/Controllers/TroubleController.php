<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTroubleRequest;
use App\Http\Requests\UpdateTroubleRequest;
use App\Models\Trouble;

class TroubleController extends Controller
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
     * @param  \App\Http\Requests\StoreTroubleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTroubleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trouble  $trouble
     * @return \Illuminate\Http\Response
     */
    public function show(Trouble $trouble)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trouble  $trouble
     * @return \Illuminate\Http\Response
     */
    public function edit(Trouble $trouble)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTroubleRequest  $request
     * @param  \App\Models\Trouble  $trouble
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTroubleRequest $request, Trouble $trouble)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trouble  $trouble
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trouble $trouble)
    {
        //
    }
}
