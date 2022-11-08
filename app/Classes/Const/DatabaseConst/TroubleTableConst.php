<?php
namespace app\Classes\Const\DatabaseConst;
use Illuminate\Support\Facades\Log;
use app\Classes\Const\DatabaseConst\CommonDatabaseConst as common;

class TroubleTableConst
{ 
    const CONST_TABLE_NAME_OF_TROUBLE = 'troubles';

    const CONST_CLM_NAME_OF_TROUBLE_TABLE_ID = 'id';
    const CONST_CLM_NAME_OF_TROUBLE_TABLE_USER_ID = 'user_id';
    const CONST_CLM_NAME_OF_TROUBLE_TABLE_SUMMARY = 'summary';
    const CONST_CLM_NAME_OF_TROUBLE_TABLE_EXPLAIN = 'explain';
    const CONST_CLM_NAME_OF_TROUBLE_TABLE_ORDER = 'order';
    const CONST_CLM_NAME_OF_TROUBLE_TABLE_IMPORTANCE = 'importance';
    const CONST_CLM_NAME_OF_TROUBLE_TABLE_COUNT = 'count';
    const CONST_CLM_NAME_OF_TROUBLE_TABLE_FINAL_REFERENCE = 'final_reference';

 }