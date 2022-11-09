<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectMemberRequest;
use App\Http\Requests\UpdateProjectMemberRequest;
use App\Models\ProjectMember;

class ProjectMemberController extends Controller
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
     * @param  \App\Http\Requests\StoreProjectMemberRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectMemberRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectMember  $projectMember
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectMember $projectMember)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectMember  $projectMember
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectMember $projectMember)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectMemberRequest  $request
     * @param  \App\Models\ProjectMember  $projectMember
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectMemberRequest $request, ProjectMember $projectMember)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectMember  $projectMember
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectMember $projectMember)
    {
        //
    }
}
