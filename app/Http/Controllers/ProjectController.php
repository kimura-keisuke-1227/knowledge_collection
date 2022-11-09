<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectsRequest;
use App\Http\Requests\UpdateProjectsRequest;
use App\Models\Project;

use Illuminate\Support\Facades\Log;
use App\Classes\Util\Util;

use App\Classes\Const\DatabaseConst\ProjectTableConst as pr;
use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Log::info(__METHOD__.'('.__LINE__.') start by user(' . Util::getUserId() .')');
        Log::info(__METHOD__.'('.__LINE__.') end by user(' . Util::getUserId() .')');
        return $this->getProjectsView($this->getMyProjectList());
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
     * @param  \App\Http\Requests\StoreProjectsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function show(Project $projects)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $projects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectsRequest  $request
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectsRequest $request, Project $projects)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $projects)
    {
        //
    }

    private function getMyProjectList()
    {
        Log::info(__METHOD__ . '(' . __LINE__ . ') start by user(' . Util::getUserId() . ')');

        $projects = Project::where(cm::CONST_COMMON_CLM_NAME_USER_ID, Util::getUserId())
            ->get();

        Log::notice(__METHOD__ . '(' . __LINE__ . ') user(' . Util::getUserId() . ') got projects data from DB!!');
        Log::info(__METHOD__ . '(' . __LINE__ . ') end by user(' . Util::getUserId() . ')');
        return $projects;
    }

    private function getProjectsView($projects){
        Log::info(__METHOD__.'('.__LINE__.') start by user(' . Util::getUserId() .')');
        Log::info(__METHOD__.'('.__LINE__.') end by user(' . Util::getUserId() .')');
        return view('projects.index',[
            'projects' => $projects,
        ]);
    }
}
