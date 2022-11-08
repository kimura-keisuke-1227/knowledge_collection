<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTagBinderRequest;
use App\Http\Requests\UpdateTagBinderRequest;
use App\Models\TagBinder;

class TagBinderController extends Controller
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
     * @param  \App\Http\Requests\StoreTagBinderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTagBinderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TagBinder  $tagBinder
     * @return \Illuminate\Http\Response
     */
    public function show(TagBinder $tagBinder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TagBinder  $tagBinder
     * @return \Illuminate\Http\Response
     */
    public function edit(TagBinder $tagBinder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTagBinderRequest  $request
     * @param  \App\Models\TagBinder  $tagBinder
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTagBinderRequest $request, TagBinder $tagBinder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TagBinder  $tagBinder
     * @return \Illuminate\Http\Response
     */
    public function destroy(TagBinder $tagBinder)
    {
        //
    }
}
