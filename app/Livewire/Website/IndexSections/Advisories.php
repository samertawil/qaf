<?php

namespace App\Livewire\Website\IndexSections;

use Livewire\Component;
use App\Models\Advisory;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Computed;

class Advisories extends Component
{
 
    #[Computed()]
    public function advisories()
    {
      return Advisory::with('star')->orderBy('created_at','desc')->take(4)->get();
     
    }
    
   #[Layout('components.layouts.website-master')]
    public function render()
    {
        
        return view('livewire.website.index-sections.advisories');
 
    }
}
