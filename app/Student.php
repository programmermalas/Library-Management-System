<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    
    protected $guarded = [
        'created_at', 'updated_at'
    ];

    // relation with major
    public function major() {
        
        return $this->belongsTo('App\Major', 'id_major');

    }

}
