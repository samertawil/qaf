<?php

namespace App\Livewire\Dashboard\Reels;

use App\Models\Reel;
use App\Models\Status;
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
  public $SearchBySocial = '';

  #[Computed()]
  public function reels()
  {
    return Reel::SearchName($this->search)
       ->SearchBySocial($this->SearchBySocial)
      ->orderBy($this->sortBy, $this->sortdir)
      ->paginate($this->perPage);
  }

  public function destroy($id)
  {
    $data = Reel::findOrfail($id);

    $data->delete();

    Storage::disk('public')->delete('reels_cover_image', $data->cover_image);

    // $this->dispatch('page-reload');
  }


  #[Computed()]
  public static function socialMediaName()
  {
       return Status::where('p_id_sub', config('constant.socialMediaNames'))->get();
  }
  


  public function render()
  {
    $pageTitle = __('customTrans.reels list');
    $title = __('customTrans.reels');
    return view('livewire.dashboard.reels.index')->layoutData(['pageTitle' => $pageTitle, 'title' => $title]);
  }
}
