<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
  
    use HasFactory;

 protected $fillable = ['title','photo_id', 'description'];

    public function photo(){
        return $this->belongsTo('App\Models\Photo');
    }
}
