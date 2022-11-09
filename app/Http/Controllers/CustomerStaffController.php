<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerStaffRequest;
use App\Http\Requests\UpdateCustomerStaffRequest;
use App\Models\CustomerStaff;

class CustomerStaffController extends Controller
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
     * @param  \App\Http\Requests\StoreCustomerStaffRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerStaffRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CustomerStaff  $customerStaff
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerStaff $customerStaff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustomerStaff  $customerStaff
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomerStaff $customerStaff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomerStaffRequest  $request
     * @param  \App\Models\CustomerStaff  $customerStaff
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerStaffRequest $request, CustomerStaff $customerStaff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomerStaff  $customerStaff
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerStaff $customerStaff)
    {
        //
    }
}
