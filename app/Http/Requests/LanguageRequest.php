<?php

namespace App\Http\Requests;

use App\Http\Requests\Abstracts\AbstractFormRequest;
use Illuminate\Foundation\Http\FormRequest;

class LanguageRequest extends AbstractFormRequest
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
        if ($controllerMethod == 'store') {
            return [
                'name' => 'required|string|unique:languages,name',
                'code' => 'required|string|unique:languages,code',
                'keywords' => 'sometimes|array',
                'keywords.*.keyword' => 'sometimes|string'
            ];
        }
        if ($controllerMethod == 'index') {
            return [
                'limit' => 'sometimes|nullable|integer'
            ];
        }
        if ($controllerMethod == 'update') {
            return [
                'name' => 'required|string|unique:languages,name,' . $this->language->id,
                'code' => 'required|string|unique:languages,code,' . $this->language->id,
                'keywords' => 'sometimes|array',
                'keywords.*.keyword' => 'sometimes|string'
            ];
        }
        return [];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'name' => preg_replace('/\s+/', ' ', trim($this->name)),
            'code' => preg_replace('/\s+/', ' ', trim($this->code))
        ]);
    }
}
