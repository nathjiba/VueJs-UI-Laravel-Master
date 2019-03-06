<?php

namespace InvoiceApp;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'description', 'unit_price'
    ];

    protected $appends = ['text'];

    public function getTextAttribute()
    {
        return $this->attributes['item_code'].' - '.$this->attributes['description'];
    }
}
