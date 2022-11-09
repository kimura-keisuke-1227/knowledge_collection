<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;
use App\Classes\Const\DatabaseConst\ProjectTableConst as pr;
use App\Classes\Const\DatabaseConst\TaskTableConst as ts;

class Task extends Model
{
    use HasFactory;

    protected $fillable =[
        pr::CONST_FOREIGN_ID_KEY_OF_PROJECT_ID,
        cm::CONST_COMMON_CLM_NAME_USER_ID,
        cm::CONST_COMMON_CLM_NAME_TITLE,
        cm::CONST_COMMON_CLM_NAME_SUMMARY,
        cm::CONST_COMMON_CLM_NAME_DETAIL,
        cm::CONST_COMMON_CLM_NAME_STATUS,
        ts::CONST_CLM_NAME_OF_TASK_TABLE_START_DATE,
        ts::CONST_CLM_NAME_OF_TASK_TABLE_END_DATE,
        ts::CONST_CLM_NAME_OF_TASK_TABLE_DEADLINE,
    ];
}
