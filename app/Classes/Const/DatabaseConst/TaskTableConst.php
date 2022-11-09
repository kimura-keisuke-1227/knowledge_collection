<?php
namespace app\Classes\Const\DatabaseConst;
use Illuminate\Support\Facades\Log;

class TaskTableConst
{ 
    const CONST_TABLE_NAME_OF_TAG = 'task';

    const CONST_FOREIGN_ID_KEY_OF_TAG_ID = 'task_id';
    const CONST_CLM_NAME_OF_TASK_TABLE_START_DATE = 'start_date';
    const CONST_CLM_NAME_OF_TASK_TABLE_END_DATE = 'end_date';
    const CONST_CLM_NAME_OF_TASK_TABLE_DEADLINE = 'dead_kine';
 }