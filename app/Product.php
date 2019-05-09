<?php

namespace App;

class Product extends BaseModel
{
    const AVAILABLE_PRODUCT = 'available';
    const UNAVAILABLE_PRODUCT = 'unavailable';

    // Methods

    public function isAvailable()
    {
        return (string) $this->status === self::AVAILABLE_PRODUCT;
    }

    public function isUnavailable()
    {
        return (string) $this->status === self::UNAVAILABLE_PRODUCT;
    }

    // Relationships

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
