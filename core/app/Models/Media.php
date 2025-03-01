<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model {

    protected $appends = ['full_url', 'thumb_url'];

    // ✅ Fix: Correct many-to-many relationship
    public function productImages() {
        return $this->belongsToMany(Product::class, 'media_product', 'media_id', 'product_id');
    }

    // ✅ Fix: Remove incorrect `products()` function
    public function products() {
        return $this->belongsToMany(Product::class, 'media_product', 'media_id', 'product_id');
    }

    public function productVariantImages() {
        return  $this->belongsToMany(ProductVariant::class);
    }

    public function productVariants() {
        return $this->hasMany(ProductVariant::class, 'main_image_id');
    }

    public function categories() {
        return $this->hasMany(Category::class);
    }

    public function brands() {
        return $this->hasMany(Brand::class);
    }

    public function getFullUrlAttribute() {
        return url($this->path . '/' . $this->file_name);
    }

    public function getThumbUrlAttribute() {
        $thumb = $this->path . '/thumb_' . $this->file_name;
        if (file_exists($thumb) && is_file($thumb)) {
            return url($thumb);
        }
        return $this->full_url;
    }
}
