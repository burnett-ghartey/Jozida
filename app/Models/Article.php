<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Article extends Model
{
    use HasFactory;
    use Sluggable;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'headline',
                'onUpdate' => true,
            ]
        ];
    }

    protected $fillable = [
        'headline',
        'photo_id',
        'status',
         'description'
    ];

    public function photo(){
        return $this->belongsTo('App\Models\Photo');
    }

}
