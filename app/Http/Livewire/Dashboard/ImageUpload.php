<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Image as ImageCourse;
use Illuminate\Support\Facades\File;
use Image;
use Livewire\Component;
use Livewire\WithFileUploads;

class ImageUpload extends Component
{
    use WithFileUploads;

    public $images;

    public $em;

    public $rawImage;

    public $imageCurrent;

    protected $listeners = [
        'changeImagesOrRemove' => '$refresh',
    ];

    public function mount($em)
    {
        $this->em = $em;
    }

    public function updatedRawImage()
    {
        $this->validate([
            'rawImage' => 'required|image|mimes:jpeg,png,svg,jpg,gif|max:1024',
        ]);

        $name = $this->rawImage->store('/', 'public');

        $rename = "upload/sliders/{$name}";
        $crop = public_path($rename);

        $img = Image::make(storage_path("app/public/{$name}"))
            ->resize(600, 600, function ($constraint) {
                $constraint->aspectRatio();
            })->save($crop);

        $this->em->images()->create([
            'url' => $rename,
        ]);

        $this->emit('changeImagesOrRemove');
    }

    public function remove(ImageCourse $image)
    {
        $image->delete();
        File::delete($image);
        $this->emit('changeImagesOrRemove');
    }

    public function render()
    {
        $this->images = $this->em->getImagesUrl(); //entitymanager

        return view('livewire.dashboard.image-upload');
    }
}
