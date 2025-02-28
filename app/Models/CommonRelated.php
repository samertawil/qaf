<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class CommonRelated extends Model
{
   protected $table= 'common_related' ; 
   protected $fillable=['main_website_corner', 'corner_name', 'common_type_id','type_name', 'star_id',	'value', 'url','related_id'];

  
}
