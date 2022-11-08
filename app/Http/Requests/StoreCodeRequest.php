<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Classes\Const\DatabaseConst\CodeTableConst as cs;

class StoreCodeRequest extends FormRequest
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
            cs::CONST_CLM_NAME_OF_CODE_TABLE_SUMMARY => [],
            cs::CONST_CLM_NAME_OF_CODE_TABLE_EXPLAIN => [],
            cs::CONST_CLM_NAME_OF_CODE_TABLE_CODE => [],
            cs::CONST_CLM_NAME_OF_CODE_TABLE_LANGUAGE_ID => [],
            cs::CONST_CLM_NAME_OF_CODE_TABLE_COUNT => [],
            cs::CONST_CLM_NAME_OF_CODE_TABLE_IMPORTANCE => [],
        ];
    }
}
