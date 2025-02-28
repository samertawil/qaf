<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Advisory extends Model
{
    protected $fillable = [
        'advisory_name',
        'advisory_title',
        'advisory_question',
        'advisory_answer',
        'media_type',
        'url',
        'stream_date',
        'media_duration',
        'content_start',
        'similar_a',
        'content_category',
        'active',
        'favorite',
        'cover_image',
        'tags',
        'slug',
        'user_id',
         'star_id' ,
         'hot_feed' ,
        'hot_description' ,
    ];
    protected $casts = [

        'similar_a' => 'json',
        'tags' => 'json',
    ];


    public function scopeSearchName($query, $value)
    {
        if ($value) {
            return $query->where('advisory_name', 'like', "%{$value}%");
        }
    }

    public function scopeAdvisoryTypeName($query, $value)
    {
        if ($value) {
            return $query->where('content_category', 'like', "%{$value}%");
        }
    }

    public function scopeSearchStarName($query,$value) {
        if($value) {
            return $query->where('content_start','like',"%{$value}%");
        }
    }


    public function scopeSearchStarId($query,$value) {
        if($value) {
            return $query->where('star_id', $value );
        }
    }


    public function star()
    {
        return $this->hasOne(ContentStar::class, 'id', 'star_id');
    }
 
    
}
