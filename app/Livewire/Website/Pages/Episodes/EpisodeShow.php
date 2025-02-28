<?php

namespace App\Livewire\Website\Pages\Episodes;

use App\Models\Program;
use Livewire\Component;
use App\Models\ProgramEpisode;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Computed;


class EpisodeShow extends Component
{

    public $e_name = '';
    public $episodeId = '';
    public $currentEpe = '';
    public $currentProgramId = '';
    public $episodes;
    public $pre = '';
    public $next = '';


    public function mount($id = '')
    {
        $this->episodeId = $id;

        $currentEpe = $this->episode();

        $this->currentEpe = $currentEpe->e_no;
        $this->currentProgramId = $currentEpe->program_id;

        $this->episodes = ProgramEpisode::with('star')->select('e_no','cover_image','e_name','program_id','program_name',
        'content_start','star_id','id')->where('program_id', $this->currentProgramId)
        
        ->get();

        $this->pre=$this->episodes->where('e_no', '<', $this->currentEpe)->first();
        $this->next=$this->episodes->where('e_no', '>', $this->currentEpe)->first();
    }

    #[Computed()]
    public function episode()
    {

        return ProgramEpisode::findOrfail($this->episodeId);
    }

 

    #[Layout('components.layouts.website-master')]
    public function render()
    {
   
        $Title = __('customTrans.episodes list');
        return view('livewire.website.pages.episodes.episode-show')->layoutData(['Title' => $Title]);
    }
}
