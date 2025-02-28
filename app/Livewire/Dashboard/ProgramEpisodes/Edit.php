<?php

namespace App\Livewire\Dashboard\ProgramEpisodes;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Status;
use App\Models\Program;
use App\Models\ContentStar;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use App\Models\ProgramEpisode;
use App\Traits\FlashMsgTraits;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Computed;
use App\Traits\UploadingFilesTrait;
use Spatie\LivewireFilepond\WithFilePond;

class Edit extends Component
{

    use  WithFileUploads;
    use  WithFilePond;

    public $program_id = '';
    public $e_no = '';
    public $e_name = '';
    public $e_title = '';
    public $media_type;   //enum('url', 'video')
    public $url = '';  // 
    public  $e_content = ''; //محتوى الحلقة بالكتابة ( الصوت الي كتابة)	
    public $e_note = '';
    public $stream_date; // تاريخ بث الحلقة
    public $media_duration; // مدة بث الحلقة
    public $cover_image = '';
    public $similar_e = [];
    public  $active = true;
    public  $favorite = false;
    public $content_type = [];
    public $content_start = '';
    public $tags = [];
    public $slug;
    public $user_id;
    public $program_name = '';
    public $star_id = '';
    public $hot_feed = '';
    public $hot_description = '';
    public $EId = '';
    public $cover_image_preview = '';
    public $data;

    public function mount($id)
    { 
        $this->EId = $id;
        

        $this->data = $this->similarEpisodes()->findOrfail($this->EId);
 
 

        $this->program_id = $this->data['program_id'];
        $this->e_no = $this->data['e_no'];
        $this->e_name = $this->data['e_name'];
        $this->e_title = $this->data['e_title'];
        $this->media_type = $this->data['media_type'];
        $this->url = $this->data['url'];
        $this->e_content = $this->data['e_content'];
        $this->e_note = $this->data['e_note'];
        $this->stream_date = $this->data['stream_date'];
        $this->media_duration = $this->data['media_duration'];
        $this->cover_image_preview = $this->data['cover_image'];
        $this->similar_e = $this->data['similar_e'];
        $this->active = $this->data['active'];
        $this->favorite = $this->data['favorite'];
        $this->content_type = $this->data['content_type'];
        $this->content_start = $this->data['content_start'];
        $this->tags = $this->data['tags'];
        $this->program_name = $this->data['program_name'];
        $this->star_id = $this->data['star_id'];
        $this->hot_feed = $this->data['hot_feed'];
        $this->hot_description = $this->data['hot_description'];
      
    }


    public  function rules(): array
    {


        $rules = [
            'cover_image' => 'required|mimetypes:image/jpg,image/jpeg,image/png|max:1024',

            'e_title' => ['required',],

            'e_name' => ['required', Rule::unique('program_episodes', 'program_id', 'e_no')->where(function ($query) {
                return $query->where('program_id', $this->program_id)->where('e_no', $this->e_no) ;
            }),],

            'e_no' => ['required', Rule::unique('program_episodes')->where(function ($query) {
                return $query->where('program_id', $this->program_id);
            })->ignore($this->EId),]

        ];

        if (empty($this->cover_image) &&  $this->data['cover_image']) {

            unset($rules['cover_image']); // Remove the email validation rule

        }

        return $rules;
    }


    public function update()
    {
       
        $this->validate();
        


        $image = '';
        $content_start = '';

        $programName = $this->programs()->find($this->program_id);
    
        if ($this->cover_image) {
            $image =  UploadingFilesTrait::uploadSingleFile($this->cover_image, 'episodes_cover_image', 'public');
        } else {
            $image = $this->data['cover_image'];
        }


        if ($this->star_id) {
            $content_start = $this->contentStar()->find($this->star_id);
            $content_start = $content_start->star_name;
        }

        $slug = Str::slug($this->e_name);

     
        $this->data->update([

            'program_id' => $this->program_id,
            'program_name' => $programName->program_name,
            'e_no' => $this->e_no,
            'e_name' => $this->e_name,
            'e_title' => $this->e_title,
            'media_type' => $this->media_type,
            'url' => $this->url,
            'e_content' => $this->e_content,
            'e_note' => $this->e_note,
            'stream_date' => $this->stream_date,
            'media_duration' => $this->media_duration,
            'cover_image' => $image,
            'similar_e' => $this->similar_e,
            'active' => $this->active,
            'favorite' => $this->favorite,
            'content_type' => $this->content_type,
            'star_id' => $this->star_id,
            'content_start' => $content_start,
            'hot_feed' => $this->hot_feed,
            'hot_description' => $this->hot_description,
            // 'tags' => $this->tags,
            'user_id' => Auth::id(),
            'slug' => $slug,
        ]);

       

        FlashMsgTraits::created();

        $this->reset();

        return redirect()->route('program.episodes.index');
    }

    #[Computed()]
    public function contentStar()
    {
        return ContentStar::where('star_type_id', 38)->get();
    }


    #[Computed()]
    public  function similarEpisodes()
    {
        return ProgramEpisode::get();
    }

    #[Computed()]
    public function contentTypes()
    {
        return Status::where('p_id_sub', config('constant.contentTypeId'))->get();
    }


    #[Computed()]
    public function statuses()
    {
        return Status::where('p_id_sub', config('constant.contentTypeId'))->get();
    }

    #[Computed()]
    public function programs()
    {
        return Program::get();
    }


    public function render()
    {

        $title = __('customTrans.episode edit');

        return view('livewire.dashboard.program-episodes.edit')->layoutData(['title' => $title, 'pageTitle' => $title]);
    }
}
