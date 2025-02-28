<?php

namespace App\Livewire\Dashboard\library;

 
use App\Models\Status;
use App\Models\Library;
use Livewire\Component;
use App\Traits\SortTrait;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;
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
  #[Url()]
  public $SearchStarName = '';
  public $SearchWriterName = '';
  public $SearchContentCategories='';
    
    #[Computed()]
    public function libraries() {
        return Library::
         SearchName($this->search)  // book name
         ->SearchWriterName($this->SearchWriterName)  // book name
    
        ->SearchContentCategories($this->SearchContentCategories)
        ->orderBy($this->sortBy, $this->sortdir)
        ->paginate($this->perPage);
    }

      public function destroy($id)
      {
        $data= Library::findOrfail($id);
         
        $data->delete();

       Storage::disk('public')->delete('book_cover_image', $data->cover_image);

       $this->dispatch('page-reload');
      }
        
   
      #[Computed()]
      public function contentCategories()
      {
        
          return Status::where('p_id_sub', config('constant.booksCategories'))->get();
      }

    
    public function render()
    {
      
      $title = __('customTrans.library');
      $pageTitle = __('customTrans.books list');

        return view('livewire.dashboard.libraries.index')->layoutData(['pageTitle'=> $pageTitle,'title'=>$title]);
    }
}
