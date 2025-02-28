<?php

namespace App\Livewire\Website\IndexSections;

use App\Models\Reel;
use Livewire\Component;
use Livewire\Attributes\Computed;

class Reels extends Component
{
    #[Computed()]
    public function reels() {
        return Reel::get();
         
    }

    public function render()
    {
        return view('livewire.website.index-sections.reels');
    }
}
