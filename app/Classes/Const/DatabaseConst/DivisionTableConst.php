<?php

namespace app\Classes\Const\DatabaseConst;

class DivisionTableConst
{
    const CONST_TABLE_NAME_OF_DIVISION = 'divisions';

    const CONST_FOREIGN_ID_KEY_OF_DIVISION_ID = 'division_id';
    
    const CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION = 'division';
    const CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION_VALUE = 'division_value';


    const CONST_TABLE_NAME_OF_DIVISION_MASTERS = 'division_masters';

    const CONST_FOREIGN_ID_KEY_OF_DIVISION_MASTER_CODE = 'division_master_code';
    
    const CONST_CLM_NAME_OF_DIVISION_MASTERS_TABLE_DIVISION_MASTER = 'division_master';
    const CONST_CLM_NAME_OF_DIVISION_MASTERS_TABLE_DIVISION_MASTER_CODE = 'division_master_code';

    const CONST_VALUE_DIVISION_MASTER_KNOWLEDGE_STATUS = 'knowledge_status';
    const CONST_VALUE_DIVISION_MASTER_PROJECT_STATUS = 'project_status';
    const CONST_VALUE_DIVISION_MASTER_TASK_STATUS = 'project_status';
    const CONST_VALUE_DIVISION_MASTER_IMPORTANCE = 'importance';
    const CONST_VALUE_DIVISION_MASTER_URGENCY = 'urgency';
}