<?php

namespace App\Http\Requests;

use App\Http\Requests\Abstracts\AbstractFormRequest;

class CategoryRequest extends AbstractFormRequest
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
                'name' => 'required|string|unique:categories,name',
                'description' => 'sometimes|nullable|string',
                'parent_category_id' => 'sometimes|nullable|integer'
            ];
        }
        if ($controllerMethod == 'index') {
            return [
                'limit' => 'sometimes|nullable|integer'
            ];
        }
        if ($controllerMethod == 'update') {
            return [
                'name' => 'required|string|unique:categories,name,' . $this->category->id,
                'description' => 'sometimes|nullable|string',
                'parent_category_id' => 'sometimes|nullable|integer'
            ];
        }
        return [];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'name' => preg_replace('/\s+/', ' ', trim($this->name))
        ]);
    }
}
