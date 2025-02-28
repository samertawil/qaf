<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    protected $table='library';
    
    protected $fillable = [
        'book_name',
        'writer_id',
        'part',
        'book_title',
        'book_category_id',
        'book_category',
        'book_attchment',
        'cover_image',
        'writer_name',
        'notes',
        'similar_b',
        'active',
        'favorite',
        'status_id',
        'tags',
        'slug',
        'user_id',
        'slug',
        'paper_count',
        'publish_date',
    ];

    protected $casts=[
        'similar_b'=>'json',
        'tags'=>'json',
    ];

    public function scopeSearchName($query,$value) {
        if($value) {
            return $query->where('book_name','like',"%{$value}%");
        }
    }

    public function scopeSearchWriterName($query,$value) {
        if($value) {
            return $query->where('writer_name','like',"%{$value}%");
        }
    }
    
    public function scopeSearchContentCategories($query,$value) {
        if($value) {
            return $query->where('book_category','like',"%{$value}%");
        }
    }

}
