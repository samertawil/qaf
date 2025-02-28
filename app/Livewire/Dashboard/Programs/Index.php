<?php

namespace App\Livewire\Dashboard\Programs;

use App\Models\Program;
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

  #[Computed()]
  public function Programs()
  {
    return Program::SearchName($this->search)
      ->SearchStarName($this->SearchStarName)
      ->orderBy($this->sortBy, $this->sortdir)
      ->paginate($this->perPage);
  }

  public function destroy($id)
  {
    
    $data = Program::findOrfail($id);
  
    $data->delete();

    Storage::disk('public')->delete('program_cover_image', $data->cover_image);

    // $this->dispatch('page-reload');
  }





  public function render()
  {
    $pageTitle = __('customTrans.programs list');
    $title = __('customTrans.programs');
    return view('livewire.dashboard.programs.index')->layoutData(['pageTitle' => $pageTitle, 'title' => $title]);
  }
}
