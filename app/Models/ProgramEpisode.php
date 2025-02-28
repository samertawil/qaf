<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgramEpisode extends Model
{
    protected $fillable = [
        'program_id',
        'program_name',
        'e_no',
        'e_name',
        'e_title',
        'media_type',
        'url',
        'e_content',
        'e_description',
        'e_note',
        'stream_date',
        'media_duration',
        'cover_image',
        'similar_e',
        'active',
        'favorite',
        'rate',
        'status_id',
        'content_type',
        'content_start',
        'tags',
        'slug',
        'user_id',
        'star_id',
        'hot_feed',
        'hot_description',

    ];

    protected $casts = [
        'similar_e' => 'json',
        'tags' => 'json',
        'content_type' => 'json',
    ];

    public function programs()
    {
        return $this->hasOne(Program::class, 'id', 'program_id');
    }

    public function scopeSearchName($query, $value)
    {
        if ($value) {
            return $query->where('program_name', 'like', "%{$value}%");
        }
    }

    public function scopeSearchEName($query, $value)
    {
        if ($value) {
            return $query->where('e_name', 'like', "%{$value}%");
        }
    }

    public function scopeSearchStarName($query, $value)
    {
        if ($value) {
            return $query->where('content_start', 'like', "%{$value}%");
        }
    }

    public function star()
    {
        return $this->hasOne(ContentStar::class, 'id', 'star_id');
    }
    
}
