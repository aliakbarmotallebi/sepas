<?php

namespace App\Traits;

use Carbon\Carbon;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

trait ImageUpload
{
    protected function uploadImage(UploadedFile $file)
    {
        $date = new Carbon();
        $imagePath = "/upload/images/{$date->year}/{$date->month}/";

        $name = md5(Str::random(25)).'.'.$file->getClientOriginalExtension();

        $fullImageName = "{$imagePath}{$name}";

        $file->move(public_path($imagePath), $name);

        return $fullImageName;
    }
}
