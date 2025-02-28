<?php

namespace App\Livewire\Dashboard\Advisories;

use App\Models\Status;
use Livewire\Component;
use App\Models\Advisory;
use App\Models\ContentStar;
use Illuminate\Support\Str;
use App\Models\CommonRelated;
use Livewire\WithFileUploads;
use App\Traits\FlashMsgTraits;
use Livewire\Attributes\Computed;
use Illuminate\Support\Facades\DB;
use App\Traits\UploadingFilesTrait;
use App\Models\AdvisoriesrRelatedVw;
use Illuminate\Support\Facades\Auth;
use Spatie\LivewireFilepond\WithFilePond;

class Edit extends Component
{

    use  WithFileUploads;
    use  WithFilePond;

    public $advisory_name = '';
    public $advisory_title = '';
    public $advisory_question = '';
    public $advisory_answer = '';
    public $media_type = '';   //enum('url', 'video')
    public $url = '';  // 
    public  $stream_date = '';
    public  $media_duration = '';
    public $content_start = '';
    public $similar_a = [];
    public $content_category = '';
    public $active = true;
    public $favorite;
    public  $cover_image = '';
    public $tags = [];
    public $slug;
    public $user_id;
    public $notes = '';
    public $star_id = '';
    public $hot_feed = '';
    public $hot_description = '';
    public $data;
    public $advisoryId = '';
    public $cover_image_preview = '';

    public $all_templates = [];
    public $attributeColumn = [];   // dropdown value
    public $attributeValue = [''];
    public $relatedData;





    public function mount($id)
    {
        $this->advisoryId = $id;

        $this->data =  $this->similarEpisodes()->findOrfail($this->advisoryId);

        $this->all_templates = Advisory::get();


        $this->relatedData = AdvisoriesrRelatedVw::where('related_id', $this->advisoryId)->get();

        $this->advisory_name = $this->data['advisory_name'];
        $this->advisory_title = $this->data['advisory_title'];
        $this->advisory_question = $this->data['advisory_question'];
        $this->advisory_answer = $this->data['advisory_answer'];
        $this->media_type = $this->data['media_type'];
        $this->url = $this->data['url'];
        $this->stream_date = $this->data['stream_date'];
        $this->media_duration = $this->data['media_duration'];
        $this->content_start = $this->data['content_start'];
        $this->similar_a = $this->data['similar_a'];
        $this->star_id = $this->data['star_id'];
        $this->content_category = $this->data['content_category'];
        $this->active = $this->data['active'];
        $this->favorite = $this->data['favorite'];
        $this->cover_image_preview = $this->data['cover_image'];

        $this->tags = $this->data['tags'];
        $this->notes = $this->data['notes'];
        $this->hot_feed = $this->data['hot_feed'];
        $this->hot_description = $this->data['hot_description'];
    }



    public  function rules(): array
    {


        $rules = [
            'cover_image' => 'required|mimetypes:image/jpg,image/jpeg,image/png|max:1024',
            'advisory_name' => ['required'],
            // 'advisory_title' => ['required',],
            //   'e_no'=>['required', Rule::unique('program_episodes')->where(function ($query) {
            //      return $query->where('program_id',$this->program_id);
            //   }),]

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


        if ($this->cover_image) {
            $image =  UploadingFilesTrait::uploadSingleFile($this->cover_image, 'advisories_cover_image', 'public');
        } else {
            $image = $this->data['cover_image'];
        }

        if ($this->star_id) {
            $content_start = $this->contentStar()->find($this->star_id);
            $content_start = $content_start->star_name;
        }

        $slug = Str::slug($this->advisory_name);

        DB::beginTransaction();

        try {
            $this->data->update([

                'advisory_name' => $this->advisory_name,
                'advisory_title' => $this->advisory_title,
                'advisory_question' => $this->advisory_question,
                'advisory_answer' => $this->advisory_answer,
                'media_type' => $this->media_type,
                'url' => $this->url,
                'stream_date' => $this->stream_date,
                'media_duration' => $this->media_duration,
                'star_id' => $this->star_id,
                'content_start' => $content_start,
                'similar_a' => $this->similar_a,
                'content_category' => $this->content_category,
                'active' => $this->active,
                'favorite' => $this->favorite,
                'cover_image' => $image,
                'notes' => $this->notes,
                // 'tags' => $this->tags,
                'user_id' => Auth::id(),
                'slug' => $slug,
                'hot_feed' => $this->hot_feed,
                'hot_description' => $this->hot_description,
            ]);

            foreach ($this->attributeColumn as $key => $value) {


                CommonRelated::create([
                    'main_website_corner' => 22,
                    'corner_name'         => 'قسم الفتاوى',
                    'common_type_id'      => $this->attributeColumn[$key],
                    'type_name'           => $this->all_templates[$key]->status_name,
                    'related_id'            => $this->advisoryId,
                    'value'               => $this->attributeValue[$key],
                    'url'                 => $this->url[$key]
                ]);
            }

            DB::commit();

            FlashMsgTraits::created($msgType = 'success', $msg = 'update');

            $this->reset();

            return redirect()->route('advisories.index');

        } catch (\Exception $e) {
            DB::rollBack();

            FlashMsgTraits::created($msgType = 'error', $msg = $e->getMessage());

            return $e;
        }
    }

    #[Computed()]
    public function contentStar()
    {
        return ContentStar::where('star_type_id', 38)->get();
    }


    #[Computed()]
    public function similarEpisodes()
    {
        return Advisory::get();
    }

    #[Computed()]
    public function contentCategories()
    {
        return Status::where('p_id_sub', config('constant.advisoriesCategories'))->get();
    }


    public function destroy($id)
    {

        CommonRelated::where('related_id', $this->advisoryId)->where('common_type_id', $id)->delete();

        $this->dispatch('page-reload');
    }

    public function addQuestion()
    {
        $this->attributeValue[] = '';
    }


    public function removeQuestion($index)
    {
        unset($this->attributeValue[$index]);
        $this->attributeValue = array_values($this->attributeValue);
    }


    public function render()
    {
        $title = __('customTrans.advisories');
        $pageTitle = __('customTrans.advisory edit');

        return view('livewire.dashboard.advisories.edit')->layoutData(['title' => $title, 'pageTitle' => $pageTitle]);
    }
}
