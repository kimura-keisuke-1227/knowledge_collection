<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;
use App\Classes\Const\DatabaseConst\TemplateMasterTableConst as tm;
use App\Classes\Const\DatabaseConst\TemplateMasterCategoryTableConst as tmc;

class TemplateMasterHeader extends Model
{
    use HasFactory;

    protected $fillable = [
        cm::CONST_COMMON_CLM_NAME_USER_ID,
        tm::CONST_CLM_NAME_OF_CATEGORY_TABLE_TEMPLATE_MASTER_HEADER,
        cm::CONST_COMMON_CLM_NAME_SUMMARY ,
        cm::CONST_COMMON_CLM_NAME_ORDER ,
        cm::CONST_COMMON_CLM_NAME_IMPORTANCE,
        tmc::CONST_FOREIGN_ID_KEY_OF_TEMPLATE_MASTER_CATEGORY_ID,
    ];

    public function getRelationDivision(){
        return $this->hasMany('App\Models\Division');
    }

    public function getDivision(){
        return $this->getRelationDivision()->division;
    }
}
