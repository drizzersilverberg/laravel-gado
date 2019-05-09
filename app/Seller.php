<?php

namespace App;

class Seller extends User
{
    // Relationships

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
