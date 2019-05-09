<?php

namespace App;

class Product extends BaseModel
{
    const AVAILABLE_PRODUCT = 'available';
    const UNAVAILABLE_PRODUCT = 'unavailable';

    public function isAvailable()
    {
        return (string) $this->status === self::AVAILABLE_PRODUCT;
    }

    public function isUnavailable()
    {
        return (string) $this->status === self::UNAVAILABLE_PRODUCT;
    }
}
