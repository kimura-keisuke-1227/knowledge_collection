<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;
use App\Classes\Const\DatabaseConst\BookmarkTableConst as bm;
use App\Classes\Const\DatabaseConst\CategoryTableConst as ct;

class Bookmark extends Model
{
    use HasFactory;

    protected $fillable =[
        cm::CONST_COMMON_CLM_NAME_USER_ID,
        bm::CONST_BOOKMARK_TABLE_CLM_NAME_OF_IS_URL,
        bm::CONST_BOOKMARK_TABLE_CLM_NAME_OF_BOOKMARK_URL,
        cm::CONST_COMMON_CLM_NAME_TITLE,
        cm::CONST_COMMON_CLM_NAME_SUMMARY,
        bm::CONST_BOOKMARK_TABLE_CLM_NAME_OF_MEMO,
        ct::CONST_FOREIGN_ID_KEY_OF_CATEGORY_ID,
        cm::CONST_COMMON_CLM_NAME_ORDER,
        cm::CONST_COMMON_CLM_NAME_IMPORTANCE,
    ];
}
