<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuoteItem extends Model
{
    protected $table = 'quote_items';

    protected $fillable = [
        'quote_id',
        'product_id',
        'variant_id',
        'quantity',
        'base_size',
    ];

    public function quote()
    {
        return $this->belongsTo(Quote::class, 'quote_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');  // Add this relationship
    }

    public function variant()
    {
        return $this->belongsTo(ProductVariant::class, 'variant_id'); // Add this relationship
    }
}
