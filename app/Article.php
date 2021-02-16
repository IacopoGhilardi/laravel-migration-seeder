<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // public function setDateAttribute( $value ) {
    //     $this->attributes['publication_date'] = (new Carbon($value))->format('d/m/y');
    // }
    //
    protected $fillable = [
        'title',
        'subtitle',
        'author',
        'text',
        'publication_date'
    ];
}
