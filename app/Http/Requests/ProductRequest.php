<?php

namespace App\Http\Requests;

use App\Http\Requests\Abstracts\AbstractFormRequest;

class ProductRequest extends AbstractFormRequest
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
                'name' => 'required|string|unique:products,name',
                'descriptionEn' => 'sometimes|nullable|string',
                'descriptionTr' => 'sometimes|nullable|string',
                'descriptionAr' => 'sometimes|nullable|string',
                'descriptionKr' => 'sometimes|nullable|string',
                'sku' => 'required|string|unique:products,sku',
                'configuration_sku' => 'sometimes|string',
                'qty' => 'required|integer',
                'featured' => 'required|boolean',
                'sales_price' => 'required|numeric',
                'raw_price' => 'required|numeric',
                'delivery_day' => 'sometimes|numeric',
                'type' => 'required|in:simple,configurable',
                'height' => 'numeric|between:0,99.99',
                'weight' => 'numeric|between:0,99.99',
                'size' => 'numeric|between:0,99.99',
                'attribute_set' => 'required|string',
                'visibility' => 'required|string',
                'new_from' => 'sometimes|string',
                'new_until' => 'sometimes|string',
                'url_key' => 'sometimes|string',
                'external_id' => 'required|string',
                'ean' => 'sometimes|string',
                'barcode' => 'required|string',
                'hs_code' => 'sometimes|string',
                'origin_country' => 'sometimes|string',
                'meta_title' => 'sometimes|string',
                'meta_keyword' => 'sometimes|string',
                'meta_description' => 'sometimes|string',
                'brand' => 'sometimes|integer',
                'body_size' => 'sometimes|string',
                'color' => 'sometimes|string',
                'websites' => 'required|string',
                'status' => 'required|string',
                'image' => 'required|image',
                'user_id' => 'required|integer'
            ];
        }
        if ($controllerMethod == 'index') {
            return [
                'limit' => 'sometimes|nullable|integer'
            ];
        }
        if ($controllerMethod == 'update') {
            return [
                'name' => 'required|string|unique:products,name,' . $this->product->id,
                'descriptionEn' => 'sometimes|nullable|string',
                'descriptionTr' => 'sometimes|nullable|string',
                'descriptionAr' => 'sometimes|nullable|string',
                'descriptionKr' => 'sometimes|nullable|string',
                'sku' => 'required|string|unique:products,sku,' . $this->product->id,
                'configuration_sku' => 'sometimes|string',
                'qty' => 'required|integer',
                'featured' => 'required|boolean',
                'sales_price' => 'required|numeric',
                'raw_price' => 'required|numeric',
                'delivery_day' => 'sometimes|numeric',
                'type' => 'required|in:simple,configurable',
                'height' => 'numeric|between:0,99.99',
                'weight' => 'numeric|between:0,99.99',
                'size' => 'numeric|between:0,99.99',
                'attribute_set' => 'required|string',
                'visibility' => 'required|string',
                'new_from' => 'sometimes|string',
                'new_until' => 'sometimes|string',
                'url_key' => 'sometimes|string',
                'external_id' => 'required|string',
                'ean' => 'sometimes|string',
                'barcode' => 'required|string',
                'hs_code' => 'sometimes|string',
                'origin_country' => 'sometimes|string',
                'meta_title' => 'sometimes|string',
                'meta_keyword' => 'sometimes|string',
                'meta_description' => 'sometimes|string',
                'brand' => 'sometimes|integer',
                'body_size' => 'sometimes|string',
                'color' => 'sometimes|string',
                'websites' => 'required|string',
                'status' => 'required|string',
                'image' => 'required|image',
                'user_id' => 'required|integer'
            ];
        }
        return [];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'name' => preg_replace('/\s+/', ' ', trim($this->name)),
            'slug' => strtolower(preg_replace('/\s+/', '-', trim($this->name))),
            'user_id' => auth()->user()->id
        ]);
    }
}
