<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Borrower extends Model
{
    
    protected $guarded  = [
        'created_at', 'updated_at',
    ];

    // get the student
    public function student() {

        return $this->belongsTo('App\Student', 'id_student');

    }

    // get the book
    public function book() {

        return $this->belongsTo('App\Book', 'id_book');

    }

    // get the user
    public function user() {

        return $this->belongsTo('App\User', 'id_user');

    }

    // get the expire
    public function expire() {

        // get the date
        $date   = $this->attributes['return'];

        // get the status
        $status = $this->attributes['status'];

        // selection returned
        if ('returned' === $status) {

            return 'returned';

        }

        // selection expire
        if (Carbon::now() < $date) {

            return 'unexpired';

        } 

        return 'expired';

    }

}
