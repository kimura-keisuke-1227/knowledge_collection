<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;
use App\Classes\Const\DatabaseConst\TemplateMasterTableConst as tm;
use App\Classes\Const\DatabaseConst\DivisionTableConst as dv;

class TemplateItem extends Model
{
    use HasFactory;
    protected $fillable = [
        tm::CONST_FOREIGN_ID_KEY_OF_TEMPLATE_MASTER_HEADERS_ID,
        cm::CONST_COMMON_CLM_NAME_ORDER,
        tm::CONST_CLM_NAME_OF_CATEGORY_TABLE_TEMPLATE_ITEM,
        cm::CONST_COMMON_CLM_NAME_EXPLAIN,
        dv::CONST_VALUE_DIVISION_MASTER_INPUT_TYPE,
        cm::CONST_COMMON_CLM_NAME_DIGIT,
    ];
}
