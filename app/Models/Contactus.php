<?php

namespace App\Models;

use App\Traits\AccessorsTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    use HasFactory;
    use AccessorsTrait;

    protected $guarded = [];
    protected $appends = ['contact_type'];
}