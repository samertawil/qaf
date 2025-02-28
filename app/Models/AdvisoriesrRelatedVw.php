<?php

namespace App\Models;

use App\Models\ContentStar;
use Illuminate\Database\Eloquent\Model;

class AdvisoriesrRelatedVw extends Model
{
    protected $table='advisoriesr_related_vw';

    
    public function star()
    {
        return $this->hasOne(ContentStar::class, 'id', 'star_id');
    }

      public function related2()
     {
          return $this->hasOne(Advisory::class, 'id', 'related_id');
     }
}
