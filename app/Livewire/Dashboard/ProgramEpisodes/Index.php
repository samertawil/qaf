<?php

namespace App\Livewire\Dashboard\ProgramEpisodes;


use Livewire\Component;
use App\Traits\SortTrait;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use App\Models\ProgramEpisode;
use Livewire\Attributes\Computed;
use Illuminate\Support\Facades\Storage;

class Index extends Component
{

  use SortTrait;
  use WithPagination;
  protected $paginationTheme = 'bootstrap';

  public $sortBy = 'created_at';
  #[Url()]
  public $search='';
  public $perPage='5';
  #[Url()]
  public $SearchStarName='';
  public $SearchEName='';

    #[Computed()]
    public function episodes() {
        return ProgramEpisode::
         SearchName($this->search)
         ->SearchEName($this->SearchEName)
        ->SearchStarName($this->SearchStarName)
        ->orderBy($this->sortBy,$this->sortdir)
        ->paginate($this->perPage);
    }

      public function destroy($id)
      {
        $data= ProgramEpisode::findOrfail($id);
         
        $data->delete();

       Storage::disk('public')->delete('program_cover_image', $data->cover_image);

       $this->dispatch('page-reload');
      }
        
     
    public function render()
    {
      $pageTitle=__('customTrans.episodes list');
      $title=__('customTrans.episodes');
        return view('livewire.dashboard.program-episodes.index')->layoutData(['pageTitle'=> $pageTitle,'title'=>$title]);
    }
}
