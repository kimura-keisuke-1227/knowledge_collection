<?php

namespace app\Classes\Const\DatabaseConst;

use Illuminate\Support\Facades\Log;
use app\Classes\Const\DatabaseConst\CommonDatabaseConst as common;

class TemplateMasterTableConst
{
    //template_master_headers テーブル
    const CONST_TABLE_NAME_OF_TEMPLATE_MASTER_HEADERS = 'template_master_headers';

    const CONST_FOREIGN_ID_KEY_OF_TEMPLATE_MASTER_HEADERS_ID = 'template_master_header_id';

    const CONST_CLM_NAME_OF_CATEGORY_TABLE_TEMPLATE_MASTER_HEADER = 'template_master_header';

}
