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
}