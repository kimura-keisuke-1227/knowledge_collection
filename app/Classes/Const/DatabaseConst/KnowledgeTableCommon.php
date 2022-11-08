<?php
namespace app\Classes\Const\DatabaseConst;
use Illuminate\Support\Facades\Log;
use App\Classes\Const\DatabaseConst\CommonDatabaseConst as common;


class KnowledgeTableCommon
{ 
    const CONST_TABLE_NAME_OF_KNOWLEDGE = 'knowledge';

    const CONST_FOREIGN_ID_KEY_OF_KNOWLEDGE_ID = 'knowledge_id';

    const CONST_CLM_NAME_OF_KNOWLEDGE_TABLE_KNOWLEDGE = 'knowledge';
    const CONST_CLM_NAME_OF_KNOWLEDGE_TABLE_PARENT_ID = 'parent_id';
    const CONST_VALUE_INT_NO_PARENT_ID = 0;
    const CONST_VALUE_INT_NO_COUNT = 0;



}
