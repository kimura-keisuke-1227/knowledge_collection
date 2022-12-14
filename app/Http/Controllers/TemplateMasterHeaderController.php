<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTemplateMasterHeaderRequest;
use App\Http\Requests\UpdateTemplateMasterHeaderRequest;
use App\Models\TemplateMasterHeader;

use App\Http\Controllers\TemplateMasterCategoryController;

use Illuminate\Support\Facades\Log;
use App\Classes\Util\Util;
use Exception;

use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;
use App\Classes\Const\SessionKeyConst as sk;

use App\Http\Controllers\TemplateItemController;

class TemplateMasterHeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Log::info(__METHOD__.'('.__LINE__.') start by user(' . Util::getUserId() .')');
        $templateMasterHeaders = TemplateMasterHeader::all(); 
        Log::info(__METHOD__.'('.__LINE__.') end by user(' . Util::getUserId() .')');
        return view('templateMasterHeader.index',[
            'templateMasterHeaders' => $templateMasterHeaders,
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
        return view('templateMasterHeader.create',[
            'myTemplateCategories' => $this->getMyTemplateCategories(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTemplateMasterHeaderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTemplateMasterHeaderRequest $request)
    {
        Log::info(__METHOD__.'('.__LINE__.') start by user(' . Util::getUserId() .')');

        $validated = $request->validated();
        #$validated[ConstList::CONST_ORDERS_TABLE_CLM_NAME_ORDER_AT] = date("Y/m/d H:i:s");
        Log::debug($validated);

        $validated[cm::CONST_COMMON_CLM_NAME_USER_ID] = Util::getUserId();

        try{
            $knowledge = TemplateMasterHeader::create($validated);
            Log::notice(__METHOD__.'('.__LINE__.') user(' .Util::getUserId() .') created knowledge date id(' .$knowledge->id .')');
        }
        catch(Exception $e){
            return('?????????????????????????????????');
        }

        Log::info(__METHOD__.'('.__LINE__.') end by user(' . Util::getUserId() .')');

        return redirect() -> Route('template.index');
        return (__METHOD__.'('.__LINE__.') end by user(' . Util::getUserId() .')');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TemplateMasterHeader  $templateMasterHeader
     * @return \Illuminate\Http\Response
     */
    public function show(TemplateMasterHeader $template)
    {
        Log::info(__METHOD__.'('.__LINE__.') start by user(' . Util::getUserId() .')');
        Log::debug(__METHOD__.'('.__LINE__.') user(' . Util::getUserId() .') $templateMasterHeader:');
        Log::debug($template);
        session([
            sk::CONST_SESSION_KEY_FOR_TEMPLATE_MASTER_HEADER=>$template
        ]);
        $templateItemList = TemplateItemController::getTemplateItemList($template->id);
        Log::info(__METHOD__.'('.__LINE__.') end by user(' . Util::getUserId() .')');
        return view('templateMasterHeader.show',[
            'templateMasterHeader' => $template,
            'myTemplateCategories' => $this->getMyTemplateCategories(),
            'templateItemList' => $templateItemList
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TemplateMasterHeader  $templateMasterHeader
     * @return \Illuminate\Http\Response
     */
    public function edit(TemplateMasterHeader $templateMasterHeader)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTemplateMasterHeaderRequest  $request
     * @param  \App\Models\TemplateMasterHeader  $templateMasterHeader
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTemplateMasterHeaderRequest $request, TemplateMasterHeader $templateMasterHeader)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TemplateMasterHeader  $templateMasterHeader
     * @return \Illuminate\Http\Response
     */
    public function destroy(TemplateMasterHeader $templateMasterHeader)
    {
        //
    }

    private function getMyTemplateCategories(){
        $templateMasterCategoryController = new TemplateMasterCategoryController();
        return $templateMasterCategoryController -> getMyTemplateMasterCategories();
    }
}
