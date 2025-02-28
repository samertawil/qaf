<?php

namespace App\Livewire\Dashboard\Advisories;

 
use App\Models\Status;
use Livewire\Component;
use App\Models\Advisory;
use App\Traits\SortTrait;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use App\Models\CommonRelated;
use Livewire\Attributes\Computed;
use App\Models\AdvisoriesrRelatedVw;
use Illuminate\Support\Facades\Storage;

class Index extends Component
{

    use SortTrait;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

  public $sortBy = 'created_at';
  #[Url()]
  public $search = '';
  public $perPage = 5;
  public $AdvisoryTypeName='';
  public $SearchStarName='';

    #[Computed()]
    public function advisories() {
        return Advisory:: 
         SearchName($this->search)
        ->AdvisoryTypeName($this->AdvisoryTypeName) 
        ->SearchStarName($this->SearchStarName)
        ->orderBy($this->sortBy,$this->sortdir)
        ->paginate($this->perPage);
    }   
   

      public function destroy($id)
      {
       
        $data= Advisory::findOrfail($id);
         
        $data->delete();

       Storage::disk('public')->delete('advisories_cover_image', $data->cover_image);

       $this->dispatch('page-reload');
      }
        
   
      #[Computed()]
      public function contentCategories()
      {
          return Status::where('p_id_sub', config('constant.advisoriesCategories'))->get();
      }
  
      #[Computed()]
      public function related()
      {
          return AdvisoriesrRelatedVw::with('star')->get();
      }
  
    
    public function render()
    {
      
      $pageTitle=__('customTrans.advisories list');
      $title=__('customTrans.advisories');
        return view('livewire.dashboard.advisories.index')->layoutData(['pageTitle'=> $pageTitle,'title'=>$title]);
    }
}
