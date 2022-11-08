<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBinderRequest;
use App\Http\Requests\UpdateBinderRequest;
use App\Models\Binder;

class BinderController extends Controller
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
     * @param  \App\Http\Requests\StoreBinderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBinderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Binder  $binder
     * @return \Illuminate\Http\Response
     */
    public function show(Binder $binder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Binder  $binder
     * @return \Illuminate\Http\Response
     */
    public function edit(Binder $binder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBinderRequest  $request
     * @param  \App\Models\Binder  $binder
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBinderRequest $request, Binder $binder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Binder  $binder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Binder $binder)
    {
        //
    }
}
