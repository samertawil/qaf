<?php

namespace App\Services;

use App\Models\SettingSystem;
use Illuminate\Support\Facades\Cache;

class CacheSystemSettingServices  {

    public static function getData() {

        return Cache::rememberForever('systemData', function () {
             return SettingSystem::get();
     });
     
    }
     

}