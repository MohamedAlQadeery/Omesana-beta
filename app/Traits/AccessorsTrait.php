<?php

namespace App\Traits;

trait AccessorsTrait
{
    /**
     * u should append the attribute in the model for eg : $appends = ['lang_name'].
     */
    //////////////attribute
    public function getStatusNameAttribute()
    {
        return $this->status == 1 ? 'نشط' : 'غير نشط';
    }

    public function getTypeNameAttribute()
    {
        return $this->type == 1 ? 'تصميم داخلي' : 'تصميم معماري';
    }

    public function getContactTypeAttribute()
    {
        if ($this->type == 1) {
            return 'استفسار';
        } elseif ($this->type == 2) {
            return 'اقتراح';
        }

        return 'أخرى';
    }

    public function getReadTypeAttribute()
    {
        return $this->is_read == 1 ? 'جديدة' : 'تم قرائتها';
    }
}