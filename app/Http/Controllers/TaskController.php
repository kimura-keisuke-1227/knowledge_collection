<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use Illuminate\Support\Facades\Log;
use App\Classes\Util\Util;

use App\Classes\Const\DatabaseConst\ProjectTableConst as pr;
use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;
use App\Classes\Const\DatabaseConst\TaskCommentTableConst as ts;
use App\Classes\Const\DatabaseConst\DivisionTableConst as dv;

use App\Models\Project;

use Exception;

class TaskController extends Controller
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
        $list_importance 
        = Util::getDivisionListFromDivisionMasterCode(dv::CONST_VALUE_DIVISION_MASTER_CODE_IMPORTANCE);
        $urgencies 
        = Util::getDivisionListFromDivisionMasterCode(dv::CONST_VALUE_DIVISION_MASTER_URGENCY);

        return view('task.create',[
            'list_importance' => $list_importance,
            'importance_normal' => dv::CONST_TEXT_OF_IMPORTANCE_NORMAL,
            'urgencies' => $urgencies,
            'urgency_normal'=> dv::CONST_TEXT_OF_URGENCY_NORMAL
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTaskRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTaskRequest $request)
    {
        Log::info(__METHOD__.'('.__LINE__.') start by user(' . Util::getUserId() .')');
        $validated = $request->validated();
        Log::debug(__METHOD__.'('.__LINE__.') $validated:');
        $project = session('project');
        $validated[cm::CONST_COMMON_CLM_NAME_USER_ID] = Util::getUserId();
        $validated[pr::CONST_FOREIGN_ID_KEY_OF_PROJECT_ID] = $project->id;
        $validated[cm::CONST_COMMON_CLM_NAME_STATUS] = dv::CONST_VALUE_OF_TASK_STATUS_NOT_STARTED;
        Log::debug( $validated);
        
        try{
            $task = Task::create($validated);
            Log::notice(__METHOD__.'('.__LINE__.') user(' . Util::getUserId() .') created a task(' . $task->id.')');
        }catch(Exception $e){
            return 'エラーが発生しました。';
        }

        Log::info(__METHOD__.'('.__LINE__.') end by user(' . Util::getUserId() .')');
        return redirect()-> Route('projects.show',['project' => $project]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        Log::info(__METHOD__.'('.__LINE__.') start by user(' . Util::getUserId() .')');
        $task_statuses =  $this->getListTaskStatuses();
        $list_importance 
            = Util::getDivisionListFromDivisionMasterCode(dv::CONST_VALUE_DIVISION_MASTER_CODE_IMPORTANCE);
        $urgencies 
            = Util::getDivisionListFromDivisionMasterCode(dv::CONST_VALUE_DIVISION_MASTER_URGENCY);

        Log::info(__METHOD__.'('.__LINE__.') end by user(' . Util::getUserId() .')');
        return view('task.show',[
            'task' => $task,
            'task_statuses' => $task_statuses,
            'list_importance' => $list_importance,
            'urgencies' => $urgencies,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTaskRequest  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        Log::info(__METHOD__.'('.__LINE__.') start by user(' . Util::getUserId() .')');
        $validated = $request-> validated();
        try{
            $task->update($validated);
            Log::notice(__METHOD__.'('.__LINE__.') user(' . util::getUserId() . ' update the task (' . $task->id .') !!');

        } catch(Exception $e){
            return 'エラーが発生しました。';
        }
        Log::info(__METHOD__.'('.__LINE__.') end by user(' . Util::getUserId() .')');
        $project = session('project');
        return redirect() -> Route('projects.show',[
            'project' => $project,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }

    public function getTasksFromProject($project_id){
        return Task::where(pr::CONST_FOREIGN_ID_KEY_OF_PROJECT_ID,$project_id)
        -> get();
    }

    private function getListTaskStatuses()
    {
        return Util::getDivisionListFromDivisionMasterCode(dv::CONST_VALUE_DIVISION_MASTER_TASK_STATUS);
    }
}
