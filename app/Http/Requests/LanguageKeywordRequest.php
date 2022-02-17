<?php

namespace App\Http\Requests;

use App\Http\Requests\Abstracts\AbstractFormRequest;
use Illuminate\Foundation\Http\FormRequest;

class LanguageKeywordRequest extends AbstractFormRequest
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
     * @return array
     */
    public function rules()
    {
        $controllerMethod = $this->route()->getActionMethod();
        if ($controllerMethod == 'update') {
            return [
                'keyword' => 'required|string'
            ];
        }
        return [];
    }
}
