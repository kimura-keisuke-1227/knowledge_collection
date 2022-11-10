<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateKnowledgeRequest extends FormRequest
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
            return [
                csct::CONST_FOREIGN_ID_KEY_OF_CATEGORY_ID
                    =>[
                        vl::CONST_VALIDATION_REQUIRED
                    ],
                cm::CONST_COMMON_CLM_NAME_TITLE
                    =>[
                        vl::CONST_VALIDATION_REQUIRED,
                        'max:255',
                    ],
                cm::CONST_COMMON_CLM_NAME_SUMMARY
                    =>[
                        vl::CONST_VALIDATION_REQUIRED,
                        'max:255',
                    ],
                kn::CONST_CLM_NAME_OF_KNOWLEDGE_TABLE_KNOWLEDGE
                    =>[
                        vl::CONST_VALIDATION_REQUIRED
                    ],
                cm::CONST_COMMON_CLM_NAME_ORDER
                    =>[
                        vl::CONST_VALIDATION_NUMERIC,
                        vl::CONST_VALIDATION_REQUIRED
                    ],
                cm::CONST_COMMON_CLM_NAME_IMPORTANCE
                    =>[
                        vl::CONST_VALIDATION_NUMERIC,
                        vl::CONST_VALIDATION_REQUIRED
                    ],
                cm::CONST_COMMON_CLM_NAME_COUNT
                    =>[
                    ],
                cm::CONST_COMMON_CLM_NAME_FINAL_REFERENCE
                    =>[
                    ],
            ];
        ];
    }
}
