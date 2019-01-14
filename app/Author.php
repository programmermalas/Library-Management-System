<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    
    protected $guarded  = [
        'created_at', 'udated_at',
    ];

}
