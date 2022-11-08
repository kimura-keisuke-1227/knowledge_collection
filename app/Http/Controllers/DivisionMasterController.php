<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDivisionMasterRequest;
use App\Http\Requests\UpdateDivisionMasterRequest;
use App\Models\DivisionMaster;

class DivisionMasterController extends Controller
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
     * @param  \App\Http\Requests\StoreDivisionMasterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDivisionMasterRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DivisionMaster  $divisionMaster
     * @return \Illuminate\Http\Response
     */
    public function show(DivisionMaster $divisionMaster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DivisionMaster  $divisionMaster
     * @return \Illuminate\Http\Response
     */
    public function edit(DivisionMaster $divisionMaster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDivisionMasterRequest  $request
     * @param  \App\Models\DivisionMaster  $divisionMaster
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDivisionMasterRequest $request, DivisionMaster $divisionMaster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DivisionMaster  $divisionMaster
     * @return \Illuminate\Http\Response
     */
    public function destroy(DivisionMaster $divisionMaster)
    {
        //
    }
}
