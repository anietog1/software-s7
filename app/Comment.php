<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['description','product_id'];

    public function getDescription()
    {
        return $this->attributes['description'];
    }
}