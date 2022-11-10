<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectsRequest;
use App\Http\Requests\UpdateProjectsRequest;
use App\Models\Project;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TaskController;

use Illuminate\Support\Facades\Log;
use App\Classes\Util\Util;
use Exception;

use App\Classes\Const\DatabaseConst\ProjectTableConst as pr;
use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;
use App\Classes\Const\DatabaseConst\DivisionTableConst as dv;

use App\Models\Category;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Log::info(__METHOD__ . '(' . __LINE__ . ') start by user(' . Util::getUserId() . ')');
        Log::info(__METHOD__ . '(' . __LINE__ . ') end by user(' . Util::getUserId() . ')');
        return $this->getProjectsView($this->getMyProjectList());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Log::info(__METHOD__ . '(' . __LINE__ . ') start by user(' . Util::getUserId() . ')');

        Log::info(__METHOD__ . '(' . __LINE__ . ') end by user(' . Util::getUserId() . ')');
        return view('projects.create', [
            'categories' => $this->getMyCategoryListFromCategoryController(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProjectsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectsRequest $request)
    {
        Log::info(__METHOD__ . '(' . __LINE__ . ') start by user(' . Util::getUserId() . ')');

        $validated = $request->validated();
        #$validated[ConstList::CONST_ORDERS_TABLE_CLM_NAME_ORDER_AT] = date("Y/m/d H:i:s");
        Log::debug($validated);

        $validated[cm::CONST_COMMON_CLM_NAME_USER_ID]
            = Util::getUserId();
        $validated[cm::CONST_COMMON_CLM_NAME_STATUS]
            = dv::CONST_VALUE_OF_PROJECT_STATUS_NOT_STARTED;

        try {
            $project = Project::create($validated);
            Log::notice(__METHOD__ . '(' . __LINE__ . ') user(' . Util::getUserId() . ') created knowledge date id(' . $project->id . ')');
        } catch (Exception $e) {
            return 'エラーが発生しました。';
        }


        Log::info(__METHOD__ . '(' . __LINE__ . ') end by user(' . Util::getUserId() . ')');

        return redirect()->Route('knowledge.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        Log::info(__METHOD__ . '(' . __LINE__ . ') start by user(' . Util::getUserId() . ')');


        Log::info(__METHOD__ . '(' . __LINE__ . ') end by user(' . Util::getUserId() . ')');
        session(['project' => $project]);
        return $this->showProjectDetail($project);
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
    public function update(UpdateProjectsRequest $request, Project $project)
    {
        Log::info(__METHOD__ . '(' . __LINE__ . ') start by user(' . Util::getUserId() . ')');
        $validated = $request->validated();
        try {
            $project->update($validated);
            Log::notice(__METHOD__ . '(' . __LINE__ . ') user(' . util::getUserId() . ' update the project(' . $project->id . ') !!');
        } catch (Exception $e) {
            return 'エラーが発生しました。';
        }

        Log::info(__METHOD__ . '(' . __LINE__ . ') end by user(' . Util::getUserId() . ')');
        return redirect()->Route('projects.show', [
            'project' => $project,
        ]);
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

    private function getProjectsView($projects)
    {
        Log::info(__METHOD__ . '(' . __LINE__ . ') start by user(' . Util::getUserId() . ')');
        Log::info(__METHOD__ . '(' . __LINE__ . ') end by user(' . Util::getUserId() . ')');
        return view('projects.index', [
            'projects' => $projects,
        ]);
    }

    private function showProjectDetail(Project $project)
    {
        Log::info(__METHOD__ . '(' . __LINE__ . ') start by user(' . Util::getUserId() . ')');
        $taskController = new TaskController();
        try{
            $tasks = $taskController->getTasksFromProject($project->id);
        } catch(Exception $e){
            return 'エラーが発生しました。';
        }

        Log::info(__METHOD__ . '(' . __LINE__ . ') end by user(' . Util::getUserId() . ')');
        return view('projects.show', [
            'project' => $project,
            'tasks' => $tasks,
            'categories' => $this->getMyCategoryListFromCategoryController(),
            'project_statuses' => $this->getListProjectStatuses(),
        ]);
    }

    private function getMyCategoryListFromCategoryController()
    {
        $categoryController = new CategoryController();
        $categories = $categoryController->getMyCategoryList();
        return $categories;
    }

    private function getListProjectStatuses()
    {
        return Util::getDivisionListFromDivisionMasterCode(dv::CONST_VALUE_DIVISION_MASTER_PROJECT_STATUS);
    }
}
