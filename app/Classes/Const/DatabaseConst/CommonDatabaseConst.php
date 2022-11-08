<?php
namespace app\Classes\Const\DatabaseConst;
use Illuminate\Support\Facades\Log;

class CommonDatabaseConst
{ 
    const CONST_COMMON_CLM_NAME_ID = 'id';
    const CONST_COMMON_CLM_NAME_ORDER = 'order';
    const CONST_COMMON_CLM_NAME_URL = 'url';
    const CONST_COMMON_CLM_NAME_TITLE = 'title';
    const CONST_LENGTH_OF_TITLE = 100;
    const CONST_COMMON_CLM_NAME_SUMMARY = 'summary';
    const CONST_COMMON_CLM_NAME_COUNT = 'count';
    const CONST_COMMON_CLM_NAME_IMPORTANCE = 'importance';
    const CONST_COMMON_CLM_NAME_USER_ID = 'user_id';
    const CONST_INT_NO_USER_ID = 0;
    const CONST_COMMON_CLM_NAME_FINAL_REFERENCE = 'final_reference';

    const CONST_INT_NO_CATEGORY_ID = 0;

    const CONST_TEXT_BUTTON_REGISTER = '登録';

    //Route Action
    const CONST_STRING_ROUTE = 'route';
    const CONST_STRING_ACTION_STORE = 'store';
    const CONST_STRING_ACTION_CREATE = 'create';


    //日次
    const CONST_NOW = 'Y/m/d H:i:s';
 }