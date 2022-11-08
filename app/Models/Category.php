<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;
use App\Classes\Const\DatabaseConst\CategoryTableConst as cat;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        cm::CONST_COMMON_CLM_NAME_ORDER,
        cat::CONST_CLM_NAME_OF_CATEGORY_TABLE_CATEGORY,
        cm::CONST_COMMON_CLM_NAME_USER_ID,
    ];
}
