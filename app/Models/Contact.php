<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{   
    protected $guarded = [];
    public $timestamps = false;
    public function student(){
        return $this->belongsTo(Student::class);
    }
}
