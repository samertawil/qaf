<?php

namespace App\Livewire\Dashboard\library;


use App\Models\Status;
use App\Models\Library;
use Livewire\Component;
use App\Models\ContentStar;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use App\Traits\FlashMsgTraits;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Computed;
use App\Traits\UploadingFilesTrait;
use Illuminate\Support\Facades\Auth;
use Spatie\LivewireFilepond\WithFilePond;

class Create extends Component
{

    use  WithFileUploads;
    use  WithFilePond;

    public $book_name = '';
    public $writer_id = '';
    public $writer_name = '';
    public $book_title = '';
    public $book_category_id='';
    public $book_category = '';
    public $book_attchment = '';   //enum('url', 'video')
    public $cover_image = '';  // 
    public  $notes = '';
    public $book_content = '';
    public $similar_b = [];
    public $active = true;
    public $favorite = false;
    public  $tags = [];
    public $slug ='';
    public $user_id;
    public $paper_count = '';
    public $publish_date;
    public $book_attchment_preview='';



    // public function mount()
    // {

    //     $this->all_templates = Status::where('p_id_sub', config('constant.mostCommon'))->get();
    // }


    public  function rules(): array
    {


        return [
            'cover_image' => 'required|mimetypes:image/jpg,image/jpeg,image/png|max:1024',
            'book_name' => ['required'],
            'book_category_id' => ['required',],
            'book_attchment' =>  'required' ,
            'writer_id' => ['required', Rule::unique('library')->where(function ($query) {
                return $query->where('book_name', $this->book_name);
            }),],
            'publish_date' => ['date_format:Y-m-d'],

        ];
    }


    public function store()
    {

        //  dd($this->book_category_id);
        $this->validate();

        $image = '';

        if ($this->cover_image) {

            $image = UploadingFilesTrait::uploadSingleFile($this->cover_image, 'book_cover_image', 'public');
        }

        if ($this->book_attchment) {

            $file = UploadingFilesTrait::uploadSingleFile($this->book_attchment, 'book_attchments', 'public');
        }


        $writerName = $this->contentStar()->find($this->writer_id);
        $categoryName = $this->contentCategories()->find($this->book_category_id);
        
        $slug = Str::slug($this->book_name);


        Library::create([

            'book_name' => $this->book_name,
            'book_title' => $this->book_title,
            'writer_id' => $this->writer_id,
            'writer_name' => $writerName->star_name,         
            'book_category_id'=>$this->book_category_id,
            'book_category' => $categoryName->status_name,
            'book_attchment' => $file,
            'cover_image' =>  $image,
            'notes' => $this->notes,
            'book_content' => $this->book_content,
            'similar_b' => $this->similar_b,
            'active' => $this->active,
            'favorite' => $this->favorite,
            'slug' => $this->slug,
            'user_id' => Auth::id(),
            // 'tags' => $this->tags,
            'slug' => $slug,
            'paper_count' => $this->paper_count,
            'publish_date' => $this->publish_date,
        ]);



        FlashMsgTraits::created();

        $this->reset();

        return redirect()->route('library.index');
    }

    #[Computed()]
    public function contentStar()
    {
        return ContentStar::where('star_type_id', 39)->get();
    }
    // booksCategories

    #[Computed()]
    public function similarBooks()
    {
        return Library::get();
    }

    #[Computed()]
    public function contentCategories()
    {
         return Status::where('p_id_sub', config('constant.booksCategories'))->get();
    }






    public function render()
    {
        $title = __('customTrans.library');
        $pageTitle = __('customTrans.add book');

        return view('livewire.dashboard.libraries.create')->layoutData(['title' => $title, 'pageTitle' => $pageTitle]);
    }
}
