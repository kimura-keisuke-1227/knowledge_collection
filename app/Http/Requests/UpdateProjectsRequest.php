<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;
use App\Classes\Const\DatabaseConst\ProjectTableConst as pr;
use App\Classes\Const\ValidationConst as vl;

class UpdateProjectsRequest extends FormRequest
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
            pr::CONST_CLM_NAME_OF_PROJECT_TABLE_PROJECT => [
                vl::CONST_VALIDATION_REQUIRED
            ],
            cm::CONST_COMMON_CLM_NAME_ORDER => [
                vl::CONST_VALIDATION_REQUIRED,
                vl::CONST_VALIDATION_NUMERIC
            ],
            cm::CONST_COMMON_CLM_NAME_STATUS => [],
            pr::CONST_CLM_NAME_OF_PROJECT_TABLE_START_DATE => [],
            pr::CONST_CLM_NAME_OF_PROJECT_TABLE_END_DATE => [],
            cm::CONST_COMMON_CLM_NAME_SUMMARY => [
                vl::CONST_VALIDATION_REQUIRED,
            ],
            cm::CONST_COMMON_CLM_NAME_DETAIL => [
                vl::CONST_VALIDATION_REQUIRED,
            ],
        ];
    }
}
