<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookCase extends Model
{
    
    protected $guarded  = [
        'created_at', 'updated_at',
    ];

}
