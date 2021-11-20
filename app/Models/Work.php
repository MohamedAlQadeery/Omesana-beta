<?php

namespace App\Models;

use App\Traits\AccessorsTrait;
use App\Traits\ScopeTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Work extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use ScopeTrait;
    use AccessorsTrait;

    protected $guarded = [];
    protected $appends = ['status_name', 'type_name'];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
        ->fit(Manipulations::FIT_FILL, 452, 559);
    }
}