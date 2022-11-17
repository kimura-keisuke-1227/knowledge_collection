<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;
use App\Classes\Const\DatabaseConst\TemplateMasterTableConst as tm;
use App\Classes\Const\DatabaseConst\TemplateMasterCategoryTableConst as tmc;
use App\Classes\Const\ValidationConst as vl;

class UpdateTemplateMasterHeaderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            cm::CONST_COMMON_CLM_NAME_USER_ID =>[],
            tm::CONST_CLM_NAME_OF_CATEGORY_TABLE_TEMPLATE_MASTER_HEADER =>[
                vl::CONST_VALIDATION_REQUIRED,
                vl::CONST_VALIDATION_STRING_LENGTH_MAX_255],
            cm::CONST_COMMON_CLM_NAME_SUMMARY =>[vl::CONST_VALIDATION_NUMERIC],
            cm::CONST_COMMON_CLM_NAME_ORDER =>[],
            cm::CONST_COMMON_CLM_NAME_IMPORTANCE =>[],
            tmc::CONST_FOREIGN_ID_KEY_OF_TEMPLATE_MASTER_CATEGORY_ID =>[],
        ];
    }
}
