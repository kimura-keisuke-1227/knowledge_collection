<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;

use Illuminate\Support\Facades\Log;
use App\Classes\Util\Util;

use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;
use App\Classes\Const\DatabaseConst\CategoryTableConst as cat;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
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
        Log::info(__METHOD__.'('.__LINE__.') start by user(' . Util::getUserId() .')');
        Log::info(__METHOD__.'('.__LINE__.') end by user(' . Util::getUserId() .')');
        return view('categories.create',[
            'category' => cat::CONST_CLM_NAME_OF_CATEGORY_TABLE_CATEGORY,
            'order' => cm::CONST_COMMON_CLM_NAME_ORDER,
            'button' => cm::CONST_TEXT_BUTTON_REGISTER,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {   
        Log::info(__METHOD__.'('.__LINE__.') start by user(' . Util::getUserId() .')');

        $validated = $request->validated();
        Log::debug(__METHOD__ . '(' . __LINE__ . ') $validated:');

        Log::debug($validated);
        
        $validated[cm::CONST_COMMON_CLM_NAME_USER_ID] = Util::getUserId();
        
        $category = Category::create($validated);
        Log::notice(__METHOD__.'('.__LINE__.') user(' .Util::getUserId() . ') created category id (' .$category->id .')') ;
        
        Log::info(__METHOD__.'('.__LINE__.') end by user(' . Util::getUserId() .')');
        return redirect() -> Route('categories.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }

    public static function getMyCategoryList(){        
        Log::info(__METHOD__.'('.__LINE__.') start by user(' . Util::getUserId() .')');
        $categories = Category::where(cm::CONST_COMMON_CLM_NAME_USER_ID, Util::getUserId())
        ->orderBy(cm::CONST_COMMON_CLM_NAME_ORDER)
        ->get();
        
        Log::info('user(' . Util::getUserId() .') load categories info from DB!');
        Log::info(__METHOD__.'('.__LINE__.') end by user(' . Util::getUserId() .')');
        return $categories;
    }
}
