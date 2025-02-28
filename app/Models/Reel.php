<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reel extends Model
{
    protected $fillable=[
        'reel_name',
        'reel_title',
        'cover_image',
        'reel_category_id',
        'reel_category',
        'social_media_id',
        'social_media_name',
        'url',
        'active',
        'favorite',
        'tags',
        'slug',
        'user_id',
        'status_id',
        'hot_feed',
        'hot_description',
        'media_type_id',
    ];

    protected $casts=[
        'tag'=>'json',
    ];

    public function scopeSearchName($query,$value) {
        if($value) {
            return $query->where('reel_name','like',"%{$value}%");
        }
    }

    public function scopeSearchByCategory($query,$value) {
        if($value) {
            return $query->where('reel_category_id',"$value");
        }
    }

    public function scopeSearchBySocial($query,$value) {
        if($value) {
            return $query->where('social_media_id',"$value");
        }
    }

    public function scopeSearchByMediaType($query,$value) {
        if($value) {
            return $query->where('media_type_id',"$value");
        }
    }


     
}
