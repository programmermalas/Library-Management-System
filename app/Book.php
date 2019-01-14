<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    
    protected $guarded  = [
        'created_at', 'updated_at',
    ];

    // get the category
    public function category() {

        return $this->belongsTo('App\Category', 'id_category');

    }

    // get the author
    public function author() {

        return $this->belongsTo('App\Author', 'id_author');

    }

    // get the publisher
    public function publisher() {

        return $this->belongsTo('App\Publisher', 'id_publisher');

    }

    // get the book case
    public function case() {

        return $this->belongsTo('App\BookCase', 'id_book_case');

    }

}
