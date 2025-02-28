<?php

namespace App\Livewire\Website\Pages\Advisories;


use App\Models\Status;
use Livewire\Component;
use App\Models\Advisory;
use App\Models\ContentStar;
use App\Models\ProgramEpisode;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Computed;


class AdvisoryList extends Component
{

    public $e_name = '';
    public $programName;
    public $SearchStarName='';
    public $AdvisoryTypeName='';
 

  
    #[Computed()]
      public function advisories()
      {
        return Advisory::with('star')
        ->SearchStarId($this->SearchStarName)
        ->AdvisoryTypeName($this->AdvisoryTypeName)
        ->get();
       
      }


       
    #[Computed()]
    public function stars()
    {
      return ContentStar::where('star_type_id',38)->get();
     
    }

    #[Computed()]
    public function contentCategories()
    {
        return Status::where('p_id_sub', config('constant.advisoriesCategories'))->get();
    }


    #[Layout('components.layouts.website-master')]
    public function render()
    {
     
       $episodes=  ProgramEpisode::with('star')->where('program_name', $this->programName)
       ->orderBy('created_at')
       ->get();
       
        $Title = __('customTrans.episodes list');
        return view('livewire.website.pages.Advisories.advisory-list',compact('episodes') )->layoutData(['Title' => $Title]);
    }
}
