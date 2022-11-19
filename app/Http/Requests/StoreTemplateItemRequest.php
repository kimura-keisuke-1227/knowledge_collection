<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;
use App\Classes\Const\DatabaseConst\TemplateMasterTableConst as tm;
use App\Classes\Const\DatabaseConst\DivisionTableConst as dv;
use App\Classes\Const\ValidationConst as vl;

class StoreTemplateItemRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            tm::CONST_FOREIGN_ID_KEY_OF_TEMPLATE_MASTER_HEADERS_ID =>[],
            cm::CONST_COMMON_CLM_NAME_ORDER=>[],
            tm::CONST_CLM_NAME_OF_CATEGORY_TABLE_TEMPLATE_ITEM=>[],
            cm::CONST_COMMON_CLM_NAME_EXPLAIN=>[],
            dv::CONST_VALUE_DIVISION_MASTER_INPUT_TYPE=>[],
            cm::CONST_COMMON_CLM_NAME_DIGIT=>[],
        ];
    }
}
