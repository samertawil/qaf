<?php

namespace App\Livewire\Dashboard\Reels;

use App\Models\Reel;
use App\Models\Status;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use App\Traits\FlashMsgTraits;
use App\Enums\reelsMediaTypeTd;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Computed;
use App\Traits\UploadingFilesTrait;
use Illuminate\Support\Facades\Auth;
use Spatie\LivewireFilepond\WithFilePond;
 
 

class Create extends Component
{

    use  WithFileUploads;
    use  WithFilePond;
    
    public $reel_name = '';
    public $reel_title = '';
    public $cover_image = '';
    public $reel_category_id ='';
    public $reel_category ='';
    public $social_media_id ='';
    public  $social_media_name = '';
    public  $url ='' ;
    public $active = true;
    public $favorite =false ;
    public $tags=[];
    public $slug='';
    public $user_id='';
    public $status_id='';
    public $hot_feed='';
    public $hot_description='';
    public $media_type_id=1;  //  
    															



 
    public static function rules(): array
    {
        return [
            // 'cover_image' => 'required|mimetypes:image/jpg,image/jpeg,image/png|max:102400',
            'reel_name' => ['required'],
            'reel_category_id'=> ['required'],
            'social_media_id'=> ['required'],
            'media_type_id'=>['required',Rule::enum(reelsMediaTypeTd::class)]
            
           
        ];
    }

 
    public function store()
    {
        
        $this->validate();

        $image = '';
       

        if ($this->cover_image) {
            $image = UploadingFilesTrait::uploadSingleFile($this->cover_image, 'reels_cover_image', 'public');
        }
      

        $categoryName = $this->contentCategories()->find($this->reel_category_id);
        $socialMediaName = $this->socialMediaName()->find($this->social_media_id);

        $slug = Str::slug($this->reel_name);


        Reel::create([

            'reel_name' => $this->reel_name,
            'reel_title' => $this->reel_title,
            'cover_image' => $image,
            'reel_category_id'=>$this->reel_category_id,
            'reel_category' => $categoryName->status_name,
            'social_media_id' => $this->social_media_id,
            'social_media_name' => $socialMediaName->status_name,
            'url' => $this->url,
            'active' => $this->active,
            'favorite'=>$this->favorite,
            'slug'=>$slug,
            'user_id'=>Auth::id(),
            'hot_feed'=>$this->hot_feed,
            'hot_description'=>$this->hot_description,
             'media_type_id'=>$this->media_type_id,
             // 'tags' =>$tag ,
        ]);
        


        FlashMsgTraits::created();

        $this->reset();

        return redirect()->route('reels.index');
    }

  
 
    #[Computed()]
    public static function contentCategories()
    {
         return Status::where('p_id_sub', config('constant.reelsCategories'))->get();
    }

    #[Computed()]
    public static function socialMediaName()
    {
         return Status::where('p_id_sub', config('constant.socialMediaNames'))->get();
    }
    
    public function render()
    {
        $title = __('customTrans.reels');
        $pageTitle = __('customTrans.add reels');

        return view('livewire.dashboard.reels.create')->layoutData(['title' => $title, 'pageTitle' => $pageTitle]);
    }
}




