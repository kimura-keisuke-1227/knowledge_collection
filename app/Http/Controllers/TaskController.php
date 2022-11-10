<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use Illuminate\Support\Facades\Log;
use App\Classes\Util\Util;

use App\Classes\Const\DatabaseConst\ProjectTableConst as pr;
use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;

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
        return view('task.create',[
            
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
        $validated[cm::CONST_COMMON_CLM_NAME_STATUS] = 0;
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
        Log::info(__METHOD__.'('.__LINE__.') end by user(' . Util::getUserId() .')');
        return view('task.show',[
            'task' => $task,
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
}
