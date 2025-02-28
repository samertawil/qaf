<?php

namespace App\Livewire\Website\Pages\Programs;

use App\Models\Program;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Computed;


class ProgramsList extends Component
{

    #[Computed()]
    public function programs() {
        return Program::with(['eCount'])
          ->orderBy('created_at')
          ->get();
    }

 
   #[Layout('components.layouts.website-master')]
       public function render()
    {
        $Title= __('customTrans.programs');
        return view('livewire.website.pages.programs.programs-list')->layoutData( ['Title'=>$Title]);
    }
}
