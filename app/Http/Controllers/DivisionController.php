<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDivisionRequest;
use App\Http\Requests\UpdateDivisionRequest;
use App\Models\Division;

use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;
use App\Classes\Const\DatabaseConst\DivisionTableConst as dv;

use Illuminate\Support\Facades\Log;
use App\Classes\Util\Util;
use Exception;

class DivisionController extends Controller
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
     * @param  \App\Http\Requests\StoreDivisionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDivisionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Division  $division
     * @return \Illuminate\Http\Response
     */
    public function show(Division $division)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Division  $division
     * @return \Illuminate\Http\Response
     */
    public function edit(Division $division)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDivisionRequest  $request
     * @param  \App\Models\Division  $division
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDivisionRequest $request, Division $division)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Division  $division
     * @return \Illuminate\Http\Response
     */
    public function destroy(Division $division)
    {
        //
    }

    public static function getMyDivisionList($user_id,$division_code){
        Log::info(__METHOD__.'('.__LINE__.') start by user(' . Util::getUserId() .') $division_code:' . $division_code);
        if(true){
            $divisions = Division::where(cm::CONST_COMMON_CLM_NAME_USER_ID , $user_id);
        }

        $divisions =  $divisions->where(dv::CONST_CLM_NAME_OF_DIVISION_MASTERS_TABLE_DIVISION_MASTER_CODE,$division_code);

        try{
            $divisions = $divisions->get();
            Log::notice(__METHOD__.'('.__LINE__.') user(' . Util::getUserId() .') got divisions');
        } catch(Exception $e){
            return 'エラーが発生しました。';
        }
        Log::info(__METHOD__.'('.__LINE__.') end by user(' . Util::getUserId() .')');
        return $divisions;
    }
}
