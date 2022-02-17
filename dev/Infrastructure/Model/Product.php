<?php

namespace Dev\Infrastructure\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'descriptionEn',
        'descriptionTr',
        'descriptionAr',
        'descriptionKr',
        'sku',
        'configuration_sku',
        'qty',
        'featured',
        'sales_price',
        'raw_price',
        'delivery_day',
        'type',
        'height',
        'weight',
        'size',
        'attribute_set',
        'visibility',
        'new_from',
        'new_until',
        'url_key',
        'external_id',
        'ean',
        'barcode',
        'hs_code',
        'origin_country',
        'meta_title',
        'meta_keyword',
        'meta_description',
        'brand',
        'body_size',
        'color',
        'websites',
        'status',
        'user_id',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_categories');
    }

    public function images()
    {
        return $this->hasOne(ProductImage::class);
    }
}