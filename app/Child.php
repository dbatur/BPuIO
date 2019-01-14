<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    protected $fillable = ['first_name', 'last_name', 'school_id'];

    public function school()
    {
        return $this->belongsTo(\App\School::class);
    }
}
