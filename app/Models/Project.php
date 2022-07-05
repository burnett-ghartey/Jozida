<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['photo_id','category'];

    public function photo(){
        return $this->belongsTo('App\Models\Photo');
    }
}
