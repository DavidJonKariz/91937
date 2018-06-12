<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fee extends Model
{
    public function student()
    {
        return $this->belongsTo('\App\student', 'foreign_key');
    }
}
