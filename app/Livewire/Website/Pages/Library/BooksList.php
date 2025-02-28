<?php

namespace App\Livewire\Website\Pages\library;

 
 

use App\Models\Library;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Computed;
use App\Livewire\Dashboard\Reels\Create;

class BooksList extends Component
{
 
    public $search='';
    public $reel_category_id='';
    public $social_media_id='';

    #[Computed()]
    public function books() {
        return Library::
        //   SearchName($this->search)
        //  ->SearchByCategory($this->reel_category_id)
        //  ->SearchBySocial($this->social_media_id)
         get();    
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
        return view('livewire.website.pages.library.books-list');
    }
}
