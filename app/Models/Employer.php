<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function jobs()
    {
        return $this->hasMany(\App\Models\Job::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
