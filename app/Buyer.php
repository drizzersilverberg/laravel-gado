<?php

namespace App;

class Buyer extends User
{
    // Methods

    // Static Methods

    // Relationships

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
