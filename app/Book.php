<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'author',
        'isbn',
        'publisher',
        'publish_date'
    ];

    protected $dates = [
        'publish_date'
    ];

    public function getHumanPublishDateAttribute()
    {
        return $this->publish_date->format('D m Y');
    }
}
