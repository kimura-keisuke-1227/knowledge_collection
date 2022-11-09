<?php

namespace app\Classes\Const\DatabaseConst;

use Illuminate\Support\Facades\Log;
use app\Classes\Const\DatabaseConst\CommonDatabaseConst as common;

class ProjectTableConst
{
    const CONST_TABLE_NAME_OF_PROJECT = 'projects';

    const CONST_FOREIGN_ID_KEY_OF_PROJECT_ID = 'project_id';

    const CONST_CLM_NAME_OF_PROJECT_TABLE_PROJECT = 'project';
    const CONST_CLM_NAME_OF_PROJECT_TABLE_START_DATE = 'start_date';
    const CONST_CLM_NAME_OF_PROJECT_TABLE_END_DATE = 'end_date';

}
