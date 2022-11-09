<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;
use App\Classes\Const\DatabaseConst\ProjectTableConst as pr;
use App\Classes\Const\DatabaseConst\TaskTableConst as ts;
use App\Classes\Const\ValidationConst as vl;

class UpdateTaskRequest extends FormRequest
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
            pr::CONST_FOREIGN_ID_KEY_OF_PROJECT_ID => [],
            cm::CONST_COMMON_CLM_NAME_USER_ID => [],
            cm::CONST_COMMON_CLM_NAME_TITLE => [vl::CONST_VALIDATION_REQUIRED],
            cm::CONST_COMMON_CLM_NAME_SUMMARY => [vl::CONST_VALIDATION_REQUIRED],
            cm::CONST_COMMON_CLM_NAME_DETAIL => [vl::CONST_VALIDATION_REQUIRED],
            cm::CONST_COMMON_CLM_NAME_STATUS => [],
            ts::CONST_CLM_NAME_OF_TASK_TABLE_START_DATE => [],
            ts::CONST_CLM_NAME_OF_TASK_TABLE_END_DATE => [],
            ts::CONST_CLM_NAME_OF_TASK_TABLE_DEADLINE => [],
        ];
    }
}
