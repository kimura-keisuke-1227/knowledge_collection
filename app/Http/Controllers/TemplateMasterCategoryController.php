<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTemplateMasterCategoryRequest;
use App\Http\Requests\UpdateTemplateMasterCategoryRequest;
use App\Models\TemplateMasterCategory;

use Illuminate\Support\Facades\Log;
use App\Classes\Util\Util;
use Exception;

use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;

class TemplateMasterCategoryController extends Controller
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
        $templateMasterCategories = TemplateMasterCategory::all();

        return view('templateMasterCategory.index',[
            'templateMasterCategories' => $templateMasterCategories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Log::info(__METHOD__.'('.__LINE__.') start by user(' . Util::getUserId() .')');
        Log::info(__METHOD__.'('.__LINE__.') end by user(' . Util::getUserId() .')');
        return view('templateMasterCategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTemplateMasterCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTemplateMasterCategoryRequest $request)
    {
        Log::info(__METHOD__.'('.__LINE__.') start by user(' . Util::getUserId() .')');

        $validated = $request->validated();
        #$validated[ConstList::CONST_ORDERS_TABLE_CLM_NAME_ORDER_AT] = date("Y/m/d H:i:s");
        Log::debug($validated);

        $validated[cm::CONST_COMMON_CLM_NAME_USER_ID] = Util::getUserId();

        try{
            $knowledge = TemplateMasterCategory::create($validated);
            Log::notice(__METHOD__.'('.__LINE__.') user(' .Util::getUserId() .') created knowledge date id(' .$knowledge->id .')');
        }
        catch(Exception $e){
            return('エラーが発生しました。');
        }

        Log::info(__METHOD__.'('.__LINE__.') end by user(' . Util::getUserId() .')');

        return redirect() -> Route('templateMasterCategory.index');
        return (__METHOD__.'('.__LINE__.') end by user(' . Util::getUserId() .')');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TemplateMasterCategory  $templateMasterCategory
     * @return \Illuminate\Http\Response
     */
    public function show(TemplateMasterCategory $templateMasterCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TemplateMasterCategory  $templateMasterCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(TemplateMasterCategory $templateMasterCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTemplateMasterCategoryRequest  $request
     * @param  \App\Models\TemplateMasterCategory  $templateMasterCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTemplateMasterCategoryRequest $request, TemplateMasterCategory $templateMasterCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TemplateMasterCategory  $templateMasterCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(TemplateMasterCategory $templateMasterCategory)
    {
        //
    }
}
