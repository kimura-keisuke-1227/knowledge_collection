<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Classes\Const\DatabaseConst\CodeTableConst as cd;
use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;
use App\Classes\Const\DatabaseConst\CategoryTableConst as ct;

class Code extends Model
{
    use HasFactory;

    protected $fillable = [
        cd::CONST_CLM_NAME_OF_CODE_TABLE_CODE,
        ct::CONST_FOREIGN_ID_KEY_OF_CATEGORY_ID,
        cm::CONST_COMMON_CLM_NAME_COUNT,
        cm::CONST_COMMON_CLM_NAME_SUMMARY,
        cm::CONST_COMMON_CLM_NAME_IMPORTANCE,
        cm::CONST_COMMON_CLM_NAME_ORDER,
        cm::CONST_COMMON_CLM_NAME_USER_ID,
        cm::CONST_COMMON_CLM_NAME_TITLE,
    ];

    public function category(){
        return $this -> belongsTo('App\Models\Category');
    }

    public function getLanguageName(){
        return $this-> category -> category;
    }
}
