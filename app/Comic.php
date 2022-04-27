<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    //
    protected $casts = [
        'artists' => 'array',
        'writers' => 'array'
    ];

    protected $fillable = [
        "title",
        "description",
        "thumb",
        "price",
        "series",
        "sale_date",
        "type"
    ];
}
