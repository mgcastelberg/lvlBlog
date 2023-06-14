<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'summary',
        'content',
        'image_url',
        'is_published',
        'topic_id',
        'user_id',
        'published_at'
    ];

    protected $casts = [
        'published_at' => 'datetime'
    ];

    // Accesores
    public function image(): Attribute
    {
        return new Attribute(
            get: function (){
                return $this->image_url ?? asset('img/laptop-hollow.png');
            }
        );
    }

    // public function title(): Attribute
    // {
    //     return new Attribute(
    //         get: function ($value){
    //             return strtoupper($value);
    //         }
    //     );
    // }

    // 1:M Inv
    public function user(){
        return $this->belongsTo(User::class);
    }
    // 1:M Inv
    public function topic(){
        return $this->belongsTo(Topic::class);
    }
    // M:M
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
