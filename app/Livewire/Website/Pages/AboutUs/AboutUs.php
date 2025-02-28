<?php

namespace App\Livewire\Website\Pages\AboutUs;

 
use Livewire\Component;
 use Livewire\Attributes\Layout;
 


class AboutUs extends Component
{

  

    #[Layout('components.layouts.website-master')]
    public function render()
    {
   
        $Title = __('customTrans.about us');
        return view('livewire.website.pages.about-us.about')->layoutData(['Title' => $Title]);
    }
}
