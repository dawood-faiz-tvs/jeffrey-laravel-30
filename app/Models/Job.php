<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model{
    use HasFactory;
    
    // protected $fillable = ['title','salary'];
    protected $guarded = [];

    public function employer(){
        return $this->belongsTo(\App\Models\Employer::class);
    }

    public function tags(){
        return $this->belongsToMany(\App\Models\Tag::class);
    }
}