<?php

namespace App\Livewire\Website\Pages\Reels;

use App\Livewire\Dashboard\Reels\Create;
use App\Models\Reel;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Url;

class ReelsList extends Component
{
 
    public $search='';
    public $reel_category_id='';
    public $social_media_id='';
    public $media_type_id='';

    #[Computed()]
    public function reels() {
        return Reel::
        SearchName($this->search)
         ->SearchByCategory($this->reel_category_id)
         ->SearchBySocial($this->social_media_id)
         ->SearchByMediaType($this->media_type_id)
        ->get();    
    }

    #[Computed()]
    public function socials() {
        return  Create::socialMediaName();
    }
    
    
    #[Computed()]
    public function categories() {
        return  Create::contentCategories();
    }
    

    #[Layout('components.layouts.website-master')]
    public function render()
    {
        return view('livewire.website.pages.reels.reels-list');
    }
}
