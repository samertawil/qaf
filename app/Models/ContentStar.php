<?php

namespace App\Models;

use App\Models\Status;
use App\Models\Program;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class ContentStar extends Model
{
   protected $table = 'content_stars';

   protected $fillable = [
      'star_name',
      'name_title_id',
      'name_title',
      'star_type_id',
      'star_type_name',
      'description',
      'user_id',
      'content_type',
      'about_content_star',
      's_image',
      'most_common_media',
      'most_common_programs',
      'rate',
      'slug'
   ];

   protected $casts = [
      'content_type' => 'json',
   ];

   public function scopeSearchName($query, $value)
   {
      if ($value) {
         return $query->where('star_name', 'like', "%{$value}%");
      }
   }

   public function scopeSearchStarType($query, $value)
   {
      if ($value) {

         return $query->where('star_type_id', $value);
      }
   }

 
}
