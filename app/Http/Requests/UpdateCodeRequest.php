<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Classes\Const\DatabaseConst\CodeTableConst as cs;
use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;
use App\Classes\Const\DatabaseConst\CategoryTableConst as ct;
use App\Classes\Const\ValidationConst as vl;

class UpdateCodeRequest extends FormRequest
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
            cm::CONST_COMMON_CLM_NAME_USER_ID => [],
            cm::CONST_COMMON_CLM_NAME_TITLE => [vl::CONST_VALIDATION_REQUIRED],
            cm::CONST_COMMON_CLM_NAME_SUMMARY => [vl::CONST_VALIDATION_REQUIRED],
            cs::CONST_CLM_NAME_OF_CODE_TABLE_CODE => [vl::CONST_VALIDATION_REQUIRED],
            ct::CONST_FOREIGN_ID_KEY_OF_CATEGORY_ID => [],
            cm::CONST_COMMON_CLM_NAME_COUNT => [vl::CONST_VALIDATION_NUMERIC],
            cm::CONST_COMMON_CLM_NAME_IMPORTANCE => [vl::CONST_VALIDATION_NUMERIC],
            cm::CONST_COMMON_CLM_NAME_EXPLAIN => [vl::CONST_VALIDATION_REQUIRED],

        ];
    }
}
