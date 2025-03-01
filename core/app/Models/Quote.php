<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    //
    protected $table = 'quotes';

    // To allow mass-assignment on these columns
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'address',
        'business_name',
        'business_type',
        'license_type',
        'license_number',
        'message',
        'status',
    ];

    public function quoteItems()
    {
        return $this->hasMany(QuoteItem::class, 'quote_id');
    }
}
