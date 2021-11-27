<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait FileUploadTrait
{
    //upload to specific disk
    public function fileUploadDisk($model, $file, $disk)
    {
        $model_name = $model->getTable();
        $image_name = Str::of($file)->after('/'); // this is how it looks before work123123/image.jpg

        $model->addMedia(public_path('images/tmp/'.$file))
        ->usingName($model_name.'-'.$image_name)
        ->usingFileName($model_name.'-'.$image_name)
        ->toMediaCollection('images', $disk);

        Storage::disk('tmp')->delete($file);
    }

    public function fileUpload($model, $file)
    {
        $model_name = $model->getTable();
        $image_name = Str::of($file)->after('/'); // this is how it looks before work123123/image.jpg

        $model->addMedia(public_path('images/tmp/'.$file))
           ->usingName($model_name.'-'.$image_name)
           ->usingFileName($model_name.'-'.$image_name)
           ->toMediaCollection();

        Storage::disk('tmp')->delete($file);
    }
}