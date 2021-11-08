<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $appends = ['type_name'];

    public function options()
    {
        return $this->hasMany(Option::class, 'requirement_id');
    }

    //scopes --------------------------------------
    public function scopeWhenSearch($query, $search)
    {
        return $query->when($search, function ($q) use ($search) {
            return $q->where('name', 'like', "%$search%");
        });
    }

    // type 1 interior 2 external
    public function scopeWhenType($query, $type)
    {
        return $query->when($type, function ($q) use ($type) {
            return $q->where('type', $type);
        });
    }

    // end of scopeWhenSearch

    //////////////attribute
    public function getTypeNameAttribute()
    {
        return $this->type == 1 ? 'تصميم داخلي' : 'تصميم معماري';
    }
}