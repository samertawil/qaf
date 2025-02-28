<?php

namespace App\Livewire\Website\Pages\Episodes;

use App\Models\Program;
use Livewire\Component;
use App\Models\ProgramEpisode;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Computed;


class EpisodesList extends Component
{

    public $e_name = '';
    public $programName;
 

  
     public function mount($programName = '')
      {
         $this->programName = $programName;
       
      }

    

    #[Layout('components.layouts.website-master')]
    public function render()
    {
     
       $episodes=  ProgramEpisode::with('star')->where('program_name', $this->programName)
       ->orderBy('created_at')
       ->get();
       
        $Title = __('customTrans.episodes list');
        return view('livewire.website.pages.episodes.episodes-list',compact('episodes') )->layoutData(['Title' => $Title]);
    }
}
