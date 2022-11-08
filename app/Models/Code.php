<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Classes\Const\DatabaseConst\CodeTableConst as cs;

class Code extends Model
{
    use HasFactory;

    protected $fillable = [
        cs::CONST_CLM_NAME_OF_CODE_TABLE_CODE,
        cs::CONST_CLM_NAME_OF_CODE_TABLE_COUNT,
        cs::CONST_CLM_NAME_OF_CODE_TABLE_EXPLAIN,
        cs::CONST_CLM_NAME_OF_CODE_TABLE_IMPORTANCE,
        cs::CONST_CLM_NAME_OF_CODE_TABLE_LANGUAGE_ID,
        cs::CONST_CLM_NAME_OF_CODE_TABLE_ORDER,
        cs::CONST_CLM_NAME_OF_CODE_TABLE_SUMMARY
    ];

    public function language(){
        return $this -> belongsTo('App\Models\Language');
    }

    public function getLanguageName(){
        return $this->language -> language;
    }
}
