<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;
use App\Classes\Const\DatabaseConst\KnowledgeTableCommon as kn;
use App\Classes\Const\DatabaseConst\CategoryTableConst as csct;

class Knowledge extends Model
{
    use HasFactory;

    protected $fillable =[
        cm::CONST_COMMON_CLM_NAME_USER_ID,
        csct::CONST_FOREIGN_ID_KEY_OF_CATEGORY_ID,
        cm::CONST_COMMON_CLM_NAME_TITLE,
        cm::CONST_COMMON_CLM_NAME_SUMMARY,
        kn::CONST_CLM_NAME_OF_KNOWLEDGE_TABLE_KNOWLEDGE,
        cm::CONST_COMMON_CLM_NAME_ORDER,
        cm::CONST_COMMON_CLM_NAME_IMPORTANCE,
        cm::CONST_COMMON_CLM_NAME_FINAL_REFERENCE,
    ];

    public function getMyTitle(){
        return $this -> title;
    }

    public function getMySummary(){
        return $this -> summary;
    }
}
