<?php

namespace App\Livewire\Dashboard\Stars;

use App\Models\Status;
use Livewire\Component;
use App\Models\ContentStar;
use Illuminate\Support\Str;
use App\Traits\FlashMsgTraits;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Computed;
use App\Traits\UploadingFilesTrait;
use Illuminate\Support\Facades\Auth;
use Spatie\LivewireFilepond\WithFilePond;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Edit extends Component
{

    public $starId = '';
    public $star_name = '';
    public $description = '';
    public $about_content_star = '';
    public $content_type = [];
    public $s_image_preview;
    public $name_title_id;
    public $star_type_id = '';
    public $url = [];
    public $data;
    public $s_image = '';


    
    use  WithFileUploads;
    use  WithFilePond;


    public function mount($id)
    {
        $this->starId = $id;

        $this->data =  ContentStar::findOrfail($this->starId);

        $this->star_type_id = $this->data['star_type_id'];
        $this->description = $this->data['description'];
        $this->name_title_id = $this->data['name_title_id'];
        $this->star_name = $this->data['star_name'];
        $this->content_type = $this->data['content_type'];
        $this->about_content_star = $this->data['about_content_star'];
        $this->s_image_preview = $this->data['s_image'];
    }

    public  function rules(): array
    {
        $rules= [

            's_image' => 'required|mimetypes:image/jpg,image/jpeg,image/png|max:1024',
            'star_name'=>['required', 'min:5',Rule::unique('content_stars','star_name')->ignore($this->starId)],
            'star_type_id' => ['required'],

        ];

        if ( empty($this->s_image) &&  $this->data['s_image'] )    {
           
               unset($rules['s_image']); // Remove the email validation rule
        
        }
        return $rules;
    }

    public function update()
    {
     
        $this->validate();

        if ($this->name_title_id == "") {
            $this->name_title_id = null;
        }

        $image = '';
        $titleName = '';



        if ($this->s_image) {
            $image =  UploadingFilesTrait::uploadSingleFile($this->s_image, 'star_profile_image', 'public');
        } else {
            $image = $this->data['s_image'] ;
        }

        if ($this->name_title_id) {
            $titleName = $this->titleNames()->find($this->name_title_id);
            $titleName = $titleName->status_name;
        }

        $TypeName = $this->starTypes()->find($this->star_type_id);


        $slug = Str::slug($this->star_name);

        $this->data->update([
            'star_name' => $this->star_name,
            'name_title_id' => $this->name_title_id,
            'name_title' => $titleName,
            'description' => $this->description,
            'user_id' => Auth::id(),
            'content_type' => $this->content_type,
            'about_content_star' => $this->about_content_star,
            's_image' => $image,
            'slug' => $slug,
            'star_type_id' => $this->star_type_id,
            'star_type_name' => $TypeName->status_name,
        ]);

        FlashMsgTraits::created();

        $this->reset();

        return redirect()->route('stars.index');
    }


    #[Computed()]
    public function contentTypes()
    {
        return Status::where('p_id_sub', config('constant.contentTypeId'))->get();
    }

    #[Computed()]
    public function titleNames()
    {
        return Status::where('p_id_sub', config('constant.titleNames'))->get();
    }

    #[Computed()]
    public function starTypes()
    {
        return Status::where('p_id_sub', config('constant.starType'))->get();
    }




    public function render()
    {
        return view('livewire.dashboard.stars.edit');
    }
}
