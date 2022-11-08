<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Classes\Const\DatabaseConst\UserTableConst as us;
use App\Classes\Const\ValidationConst as vl;
use App\Classes\Util\Util as ut;

class StoreUserRequest extends FormRequest
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
            us::CONST_USER_TABLE_CLM_NAME_OF_NAME
                =>[
                    vl::CONST_VALIDATION_REQUIRED
                ],
            us::CONST_USER_TABLE_CLM_NAME_OF_EMAIL 
                => [
                    vl::CONST_VALIDATION_REQUIRED,
                    vl::CONST_VALIDATION_EMAIL,
                    ut::getUnique(us::CONST_TABLE_NAME_OF_USER)
                ],
            us::CONST_USER_TABLE_CLM_NAME_OF_PASSWORD
                => [
                    vl::CONST_VALIDATION_REQUIRED,
                    vl::CONST_VALIDATION_CONFIRMED
                ],
            
        ];
    }
}
