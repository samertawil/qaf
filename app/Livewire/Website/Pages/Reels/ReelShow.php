<?php

namespace App\Livewire\Website\Pages\Reels;

use App\Models\Reel;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Computed;
use Illuminate\Support\Facades\DB;
use App\Livewire\Dashboard\Reels\Create;
use Symfony\Component\Console\Input\Input;


class ReelShow extends Component
{

    public $search = '';
 
    public $media_type_id = '';
    public $reel_name = '';
    public $reel_title = '';
    public $cover_image = '';
    public $reel_category_id = '';
    public $social_media_id = '';
    public $social_media_name = '';
    public $reel_category = '';
    public $url = '';
    public $favorite = '';
    public $hot_feed = '';
    public $hot_description = '';
 
    public $tags = [];
    public $slug = '';
    
 

    public $reelId='';
    public $data;

    public function mount($id) {

        $this->reelId=$id;
       

    }


    #[Computed()]
    public function reels()
    {
    
        return  Reel::
         orderByRaw("CASE WHEN id = ? THEN 0 ELSE 1 END", [$this->reelId])
        ->orderBy('id', 'asc') // You can add more ordering if needed
        ->get();
           
    }



    #[Computed()]
    public function socials()
    {
        return  Create::socialMediaName();
    }


    #[Computed()]
    public function categories()
    {
        return  Create::contentCategories();
    }


    #[Layout('components.layouts.website-master')]
    public function render()
    {
        return view('livewire.website.pages.reels.reel-show');
    }
}


