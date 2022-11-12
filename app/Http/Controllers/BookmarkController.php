<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookmarkRequest;
use App\Http\Requests\UpdateBookmarkRequest;
use App\Models\Bookmark;

use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;
use App\Classes\Const\DatabaseConst\CategoryTableConst as csct;
use App\Classes\Const\DatabaseConst\DivisionTableConst as dv;

use App\Http\Controllers\CategoryController as cat;

use Illuminate\Support\Facades\Log;
use App\Classes\Util\Util;
use Exception;

class BookmarkController extends Controller
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
        return $this->showBookmarksIndex(
            $this->getMyBookmarks()
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Log::info(__METHOD__ . '(' . __LINE__ . ') start by user(' . Util::getUserId() . ')');
        $cat = new cat();

        $list_importance
            = Util::getDivisionListFromDivisionMasterCode(dv::CONST_VALUE_DIVISION_MASTER_CODE_IMPORTANCE);

        $categories = $cat::getMyCategoryList();

        $list_is_url
            = Util::getDivisionListFromDivisionMasterCode(dv::CONST_VALUE_DIVISION_MASTER_IS_URL);

        Log::info(__METHOD__ . '(' . __LINE__ . ') end by user(' . Util::getUserId() . ')');
        return view('bookmark.create', [
            csct::CONST_TABLE_NAME_OF_CATEGORY => $categories,
            'list_importance' => $list_importance,
            'importance_normal' => dv::CONST_TEXT_OF_IMPORTANCE_NORMAL,
            'list_is_url' => $list_is_url,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookmarkRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookmarkRequest $request)
    {
        Log::info(__METHOD__ . '(' . __LINE__ . ') start by user(' . Util::getUserId() . ')');

        $validated = $request->validated();
        #$validated[ConstList::CONST_ORDERS_TABLE_CLM_NAME_ORDER_AT] = date("Y/m/d H:i:s");
        Log::debug($validated);

        $validated[cm::CONST_COMMON_CLM_NAME_USER_ID] = Util::getUserId();

        $bookmark = Bookmark::create($validated);
        Log::notice(__METHOD__ . '(' . __LINE__ . ') user(' . Util::getUserId() . ') created knowledge date id(' . $bookmark->id . ')');
        try {
        } catch (Exception $e) {
            return ('エラーが発生しました。');
        }

        Log::info(__METHOD__ . '(' . __LINE__ . ') end by user(' . Util::getUserId() . ')');

        return redirect()->Route('bookmarks.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bookmark  $bookmark
     * @return \Illuminate\Http\Response
     */
    public function show(Bookmark $bookmark)
    {
        Log::info(__METHOD__ . '(' . __LINE__ . ') start by user(' . Util::getUserId() . ')');

        $cat = new cat();


        $list_importance
            = Util::getDivisionListFromDivisionMasterCode(dv::CONST_VALUE_DIVISION_MASTER_CODE_IMPORTANCE);

        $categories = $cat::getMyCategoryList();

        $list_is_url
            = Util::getDivisionListFromDivisionMasterCode(dv::CONST_VALUE_DIVISION_MASTER_IS_URL);


        return view('bookmark.show', [
            'bookmark' => $bookmark,
            csct::CONST_TABLE_NAME_OF_CATEGORY => $categories,
            'list_importance' => $list_importance,
            'importance_normal' => dv::CONST_TEXT_OF_IMPORTANCE_NORMAL,
            'list_is_url' => $list_is_url,

        ]);
        Log::info(__METHOD__ . '(' . __LINE__ . ') end by user(' . Util::getUserId() . ')');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bookmark  $bookmark
     * @return \Illuminate\Http\Response
     */
    public function edit(Bookmark $bookmark)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookmarkRequest  $request
     * @param  \App\Models\Bookmark  $bookmark
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookmarkRequest $request, Bookmark $bookmark)
    {
        Log::info(__METHOD__ . '(' . __LINE__ . ') start by user(' . Util::getUserId() . ')');

        Log::info(__METHOD__ . '(' . __LINE__ . ') start by user(' . Util::getUserId() . ')');
        $validated = $request->validated();
        try {
            $bookmark->update($validated);
            Log::notice(__METHOD__ . '(' . __LINE__ . ') user(' . util::getUserId() . ' update the project(' . $bookmark->id . ') !!');
        } catch (Exception $e) {
            return 'エラーが発生しました。';
        }

        Log::info(__METHOD__ . '(' . __LINE__ . ') end by user(' . Util::getUserId() . ')');
        return redirect()->Route('bookmarks.index');

        Log::info(__METHOD__ . '(' . __LINE__ . ') end by user(' . Util::getUserId() . ')');
        return __METHOD__ . '(' . __LINE__ . ') end by user(' . Util::getUserId() . ')';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bookmark  $bookmark
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bookmark $bookmark)
    {
        //
    }

    private function showBookmarksIndex($bookmarks)
    {
        return view('bookmark.index', [
            'bookmarks' => $bookmarks
        ]);
    }

    private function getMyBookmarks()
    {
        Log::info(__METHOD__ . '(' . __LINE__ . ') start by user(' . Util::getUserId() . ')');
        $bookmarks = Bookmark::where(cm::CONST_COMMON_CLM_NAME_USER_ID, Util::getUserId())
            ->orderBy(cm::CONST_COMMON_CLM_NAME_ORDER)
            ->get();
        Log::debug(__METHOD__ . '(' . __LINE__ . ') user(' . Util::getUserId() . ') bookmarks:');
        Log::debug($bookmarks);
        Log::info(__METHOD__ . '(' . __LINE__ . ') end by user(' . Util::getUserId() . ')');
        return $bookmarks;
    }
}
