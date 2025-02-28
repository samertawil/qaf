<?php

namespace App\Livewire\Dashboard\CitzenServices;

use Livewire\Component;
use App\Models\CitzenServices;
use Livewire\Attributes\Computed;

class ServicesHome extends Component
{
    #[Computed()]
    public function services()
    {
        return CitzenServices::
         where('home_page_order','!=',0)
        ->orderBy('home_page_order','asc')
        ->get();
    }
    
    public function render()
    {
        return view('livewire.dashboard.citzen-services.services-home');
    }
}
