<?php

namespace App\Http\Livewire\Dashboard;

use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class VideoUpload extends Component
{
    use WithFileUploads;

    public $rawVideo;

    public $em;

    public $raw;

    protected $listeners = [
        'refresh' => '$refresh',
    ];

    public function mount($em)
    {
        $this->em = $em;
    }

    public function save()
    {
        dd(request()->get('raw'));
    }

    public function updatedRawVideo()
    {
        dd($this->rawVideo);
        // $this->validate([
        //     'rawVideo' => 'required|file|mimes:mp4,avi,mpeg,ogg',
        // ]);

        // $name = $this->rawVideo->storePublicly('public', 'local');
        

        // $rename = "upload/videos/{$name}";
        // dd($rename);

        // $this->em->video_url = $rename;
        // $this->em->save();

        // $this->emit('refresh');
    }

    public function remove()
    {
        $this->em->video_url = NULL;
        $this->em->save();

        File::delete($this->em->getVideoUrl());
        $this->emit('refresh');
    }

    public function render()
    {
        $this->video_url = $this->em->getVideoUrl(); //entitymanager

        return view('livewire.dashboard.video-upload');
    }
}
