<?php

namespace App\Livewire\Website\Pages\Library;

use App\Models\Library;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Computed;


class BookShow extends Component
{

    public $bookId='';
 

    public function mount($id = '')
    {
        $this->bookId = $id;

      
    }

    #[Computed()]
    public function book()
    {

        return Library::findOrfail($this->bookId);
    }

 

    #[Layout('components.layouts.website-master')]
    public function render()
    {
   
        $Title = __('customTrans.books list');
        return view('livewire.website.pages.library.book-show')->layoutData(['Title' => $Title]);
    }
}
