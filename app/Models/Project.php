<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;
use App\Classes\Const\DatabaseConst\ProjectTableConst as pr;

class Project extends Model
{
    use HasFactory;

    protected $fillable =[
        pr::CONST_CLM_NAME_OF_PROJECT_TABLE_PROJECT,
        cm::CONST_COMMON_CLM_NAME_ORDER,
        cm::CONST_COMMON_CLM_NAME_STATUS,
        pr::CONST_CLM_NAME_OF_PROJECT_TABLE_START_DATE,
        pr::CONST_CLM_NAME_OF_PROJECT_TABLE_END_DATE,
        cm::CONST_COMMON_CLM_NAME_SUMMARY,
        cm::CONST_COMMON_CLM_NAME_DETAIL,
        cm::CONST_COMMON_CLM_NAME_USER_ID,
        cm::CONST_COMMON_CLM_NAME_STATUS,
    ];

    public function getMyProjectName(){
        return $this->project;
    }
    public function getMyProjectSummary(){
        return $this->summary;
    }
    public function getMyProjectDetail(){
        return $this->detail;
    }


}
