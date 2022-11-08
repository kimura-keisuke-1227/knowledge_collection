<?php
namespace app\Classes\Const\DatabaseConst;
use Illuminate\Support\Facades\Log;
use app\Classes\Const\DatabaseConst\CommonDatabaseConst;

class LinkTableConst
{ 
    const CONST_TABLE_NAME_OF_LINK = 'links';

    const CONST_CLM_NAME_OF_LINK_TABLE_ID 
        = CommonDatabaseConst::CONST_COMMON_CLM_NAME_ID;
    const CONST_CLM_NAME_OF_LINK_TABLE_ORDER 
        = CommonDatabaseConst::CONST_COMMON_CLM_NAME_ORDER;
    const CONST_CLM_NAME_OF_LINK_TABLE_URL 
        = CommonDatabaseConst::CONST_COMMON_CLM_NAME_URL;
    const CONST_CLM_NAME_OF_LINK_TABLE_SUMMARY 
        = CommonDatabaseConst::CONST_COMMON_CLM_NAME_SUMMARY;
    const CONST_CLM_NAME_OF_LINK_TABLE_TITLE
        = CommonDatabaseConst::CONST_COMMON_CLM_NAME_TITLE;
 }