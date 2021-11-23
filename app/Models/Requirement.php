<?php

namespace App\Models;

use App\Traits\AccessorsTrait;
use App\Traits\ScopeTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    use HasFactory;
    use ScopeTrait;
    use AccessorsTrait;
    protected $guarded = [];

    protected $appends = ['type_name', 'status_name'];

    public function options()
    {
        return $this->hasMany(Option::class, 'requirement_id');
    }
}