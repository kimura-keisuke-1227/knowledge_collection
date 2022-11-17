<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;
use App\Classes\Const\DatabaseConst\TemplateMasterCategoryTableConst as tmc;
use App\Classes\Const\ValidationConst as vl;

class StoreTemplateMasterCategoryRequest extends FormRequest
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
            cm::CONST_COMMON_CLM_NAME_USER_ID =>[],
            tmc::CONST_CLM_NAME_OF_CATEGORY_TABLE_TEMPLATE_MASTER_CATEGORY =>[vl::CONST_VALIDATION_REQUIRED,vl::CONST_VALIDATION_STRING_LENGTH_MAX_255],
            cm::CONST_COMMON_CLM_NAME_ORDER =>[vl::CONST_VALIDATION_NUMERIC]
        ];
    }
}
