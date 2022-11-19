<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTemplateItemRequest;
use App\Http\Requests\UpdateTemplateItemRequest;
use App\Models\TemplateItem;

use Illuminate\Support\Facades\Log;
use App\Classes\Util\Util;
use Exception;

use App\Classes\Const\DatabaseConst\DivisionTableConst as dv;
use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;
use App\Classes\Const\DatabaseConst\TemplateMasterTableConst as tm;

class TemplateItemController extends Controller
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
        return view('templateMasterHeader.create',[
            'myTemplateCategories' => $this->getMyTemplateCategories(),
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
        return view('templateMasterItem.create',[
            'inputTypes' => Util::getDivisionListFromDivisionMasterCode(dv::CONST_VALUE_DIVISION_MASTER_INPUT_TYPE),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTemplateItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTemplateItemRequest $request, $templateMasterHeader)
    {
        Log::info(__METHOD__.'('.__LINE__.') start by user(' . Util::getUserId() .')');
        $templateMasterHeader = $request->query('templateMasterHeader');
        Log::debug(__METHOD__.'('.__LINE__.') user(' . Util::getUserId() .') $templateMasterHeader:' . $request->templateMasterHeader);
        $validated = $request->validated();
        #$validated[ConstList::CONST_ORDERS_TABLE_CLM_NAME_ORDER_AT] = date("Y/m/d H:i:s");
        Log::debug($request);

        $validated[cm::CONST_COMMON_CLM_NAME_USER_ID] = Util::getUserId();
        $validated[tm::CONST_FOREIGN_ID_KEY_OF_TEMPLATE_MASTER_HEADERS_ID] = 1;

        try{
            $knowledge = TemplateItem::create($validated);
            Log::notice(__METHOD__.'('.__LINE__.') user(' .Util::getUserId() .') created knowledge date id(' .$knowledge->id .')');
        }
        catch(Exception $e){
            Log::error($e);
            return('エラーが発生しました。');
        }

        Log::info(__METHOD__.'('.__LINE__.') end by user(' . Util::getUserId() .')');

        return redirect() -> Route('knowledge.index');
        return (__METHOD__.'('.__LINE__.') end by user(' . Util::getUserId() .')');

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
