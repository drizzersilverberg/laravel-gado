<?php

namespace App;

class Category extends BaseModel
{
    // Methods

    // Relationships

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    // Static Methods
}
