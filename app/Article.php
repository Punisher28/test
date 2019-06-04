<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'id', 'Name', 'Description', 'Image','Price','Accessibility','Author','number','email'
    ];
    protected $table = 'articles';
    //
}
