<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;
use App\Classes\Const\DatabaseConst\BookmarkTableConst as bm;
use App\Classes\Const\DatabaseConst\CategoryTableConst as ct;
use App\Classes\Const\ValidationConst as vl;


class StoreBookmarkRequest extends FormRequest
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
            cm::CONST_COMMON_CLM_NAME_USER_ID => [],
            bm::CONST_BOOKMARK_TABLE_CLM_NAME_OF_IS_URL => [],
            bm::CONST_BOOKMARK_TABLE_CLM_NAME_OF_BOOKMARK_URL => [],
            cm::CONST_COMMON_CLM_NAME_TITLE => [],
            cm::CONST_COMMON_CLM_NAME_SUMMARY => [],
            bm::CONST_BOOKMARK_TABLE_CLM_NAME_OF_MEMO => [],
            ct::CONST_FOREIGN_ID_KEY_OF_CATEGORY_ID => [],
            cm::CONST_COMMON_CLM_NAME_ORDER => [],
            cm::CONST_COMMON_CLM_NAME_IMPORTANCE => [],
        ];
    }
}
