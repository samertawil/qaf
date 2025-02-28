<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Program extends Model
{
    protected $fillable = [
        'program_name',
        'description',
        'notes',
        'cover_image',
        'star_id',
        'content_start',
        'similar_programs',
        'active',
        'favorite',
        'status_id',
        'content_type',
        'tags',
        'slug',
        'user_id',
        'hot_feed',
        'hot_description'
    ];

    protected $casts = [

        'similar_programs' => 'json',
        'content_type' => 'json',
    ];

    public function scopeSearchName($query, $value)
    {
        if ($value) {
            return $query->where('program_name', 'like', "%{$value}%");
        }
    }

    public function scopeSearchStarName($query, $value)
    {
        if ($value) {
            return $query->where('content_start', 'like', "%{$value}%");
        }
    }

    public function eCount()
    {
        return $this->hasOne(ProgramEpisodesCount::class, 'program_id', 'id');
    }

    public function star()
    {
        return $this->hasOne(ContentStar::class, 'id', 'star_id');
    }
}
