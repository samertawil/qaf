<?php

namespace App\Livewire\Website\Pages\Academy;

 
use Livewire\Component;
 use Livewire\Attributes\Layout;
 


class Academy extends Component
{

  

    #[Layout('components.layouts.website-master')]
    public function render()
    {
   
        $Title = __('customTrans.academy');
        return view('livewire.website.pages.academy.academy')->layoutData(['Title' => $Title]);
    }
}
