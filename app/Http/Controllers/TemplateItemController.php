<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTemplateItemRequest;
use App\Http\Requests\UpdateTemplateItemRequest;
use App\Models\TemplateItem;

class TemplateItemController extends Controller
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
     * @param  \App\Http\Requests\StoreTemplateItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTemplateItemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TemplateItem  $templateItem
     * @return \Illuminate\Http\Response
     */
    public function show(TemplateItem $templateItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TemplateItem  $templateItem
     * @return \Illuminate\Http\Response
     */
    public function edit(TemplateItem $templateItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTemplateItemRequest  $request
     * @param  \App\Models\TemplateItem  $templateItem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTemplateItemRequest $request, TemplateItem $templateItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TemplateItem  $templateItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(TemplateItem $templateItem)
    {
        //
    }
}
