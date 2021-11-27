<?php

namespace App\Models;

use App\Traits\AccessorsTrait;
use App\Traits\ScopeTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
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
    use Sluggable;
    use SluggableScopeHelpers;

    protected $guarded = [];
    protected $appends = ['status_name', 'type_name', 'lang_type'];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
        ->crop(Manipulations::CROP_CENTER, 452, 559);

        // $this->addMediaConversion('thumb')
        // ->crop(Manipulations::CROP_CENTER, 559, 452);

        $this->addMediaConversion('bnr')
        ->fit(Manipulations::FIT_STRETCH, 1920, 900);
    }

    public function getLangTypeAttribute()
    {
        if ($this->type == 1) {
            return app()->getLocale() == 'ar' ? 'تصميم داخلي' : 'Interior Desgin';
        }

        return app()->getLocale() == 'ar' ? 'تصميم معماري' : 'Architectural Design';
    }

    /**
     * Return the sluggable configuration array for this model.
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
            ],
        ];
    }

    // /**
    //  * Get the route key for the model.
    //  *
    //  * @return string
    //  */
    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }
}