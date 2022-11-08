<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKnowledgeRequest;
use App\Http\Requests\UpdateKnowledgeRequest;
use App\Models\Knowledge;

use App\Http\Controllers\CategoryController as cat;

use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;
use App\Classes\Const\DatabaseConst\KnowledgeTableCommon as kn;
use App\Classes\Const\DatabaseConst\CategoryTableConst as csct;

use Illuminate\Support\Facades\Log;
use App\Classes\Util\Util;

class KnowledgeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Log::info(__METHOD__.'('.__LINE__.') start by user(' . Util::getUserId() .')');
        $knowledgeList = $this->getMyKnowledge();
        return view('knowledge.index',[
            'knowledge' => $knowledgeList
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
        $cat = new cat();

        $categories = $cat::getMyCategoryList();
        $route=Util::getRoute(
            kn::CONST_TABLE_NAME_OF_KNOWLEDGE,
            cm::CONST_STRING_ACTION_STORE
        );
        
        Log::info(__METHOD__.'('.__LINE__.') end by user(' . Util::getUserId() .')');
        return view('knowledge.create',[
             csct::CONST_TABLE_NAME_OF_CATEGORY=> $categories,
             cm::CONST_STRING_ROUTE => $route,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKnowledgeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKnowledgeRequest $request)
    {
        Log::info(__METHOD__.'('.__LINE__.') start by user(' . Util::getUserId() .')');

        $validated = $request->validated();
        #$validated[ConstList::CONST_ORDERS_TABLE_CLM_NAME_ORDER_AT] = date("Y/m/d H:i:s");
        Log::debug($validated);

        $validated[cm::CONST_COMMON_CLM_NAME_USER_ID] = Util::getUserId();
        $validated[cm::CONST_COMMON_CLM_NAME_FINAL_REFERENCE] = Util::getNowTime();


        $knowledge = Knowledge::create($validated);
        Log::notice(__METHOD__.'('.__LINE__.') user(' .Util::getUserId() .') created knowledge date id(' .$knowledge->id .')');

        Log::info(__METHOD__.'('.__LINE__.') end by user(' . Util::getUserId() .')');

        return redirect() -> Route('knowledge.index');
        return (__METHOD__.'('.__LINE__.') end by user(' . Util::getUserId() .')');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Knowledge  $knowledge
     * @return \Illuminate\Http\Response
     */
    public function show(Knowledge $knowledge)
    {
        Log::info(__METHOD__.'('.__LINE__.') start by user(' . Util::getUserId() .')');
        $cat = new cat();

        $categories = $cat::getMyCategoryList();
        $route=Util::getRoute(
            kn::CONST_TABLE_NAME_OF_KNOWLEDGE,
            cm::CONST_STRING_ACTION_STORE,
            
        );
        
        Log::info(__METHOD__.'('.__LINE__.') end by user(' . Util::getUserId() .')');
        return view('knowledge.show',[
            'knowledge' => $knowledge,
            csct::CONST_TABLE_NAME_OF_CATEGORY=> $categories,
            cm::CONST_STRING_ROUTE => $route,

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Knowledge  $knowledge
     * @return \Illuminate\Http\Response
     */
    public function edit(Knowledge $knowledge)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKnowledgeRequest  $request
     * @param  \App\Models\Knowledge  $knowledge
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKnowledgeRequest $request, Knowledge $knowledge)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Knowledge  $knowledge
     * @return \Illuminate\Http\Response
     */
    public function destroy(Knowledge $knowledge)
    {
        //
    }

    private function getMyKnowledge(){
        $knowledge = Knowledge::where(cm::CONST_COMMON_CLM_NAME_USER_ID,Util::getUserId())
            -> orderBy(cm::CONST_COMMON_CLM_NAME_ORDER)
            ->get();
        return $knowledge;
    }
}


