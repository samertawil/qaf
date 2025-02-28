<?php

namespace App\Livewire\Website\IndexSections;

use Livewire\Component;
use App\Models\MasterSliderVw;
use Livewire\Attributes\Computed;

class MasterSlider extends Component
{
    #[Computed()]
    public function sliders() {
        return MasterSliderVw::get();
         
    }

    public function render()
    {
        return view('livewire.website.index-sections.master-slider');
    }
}
