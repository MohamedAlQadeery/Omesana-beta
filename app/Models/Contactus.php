<?php

namespace App\Models;

use App\Traits\AccessorsTrait;
use App\Traits\ScopeTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    use HasFactory;
    use AccessorsTrait;
    use ScopeTrait;

    protected $guarded = [];
    protected $appends = ['contact_type', 'read_type'];

    public function replies()
    {
        return $this->hasMany(Reply::class)->orderBy('created_at', 'desc');
    }
}