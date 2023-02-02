<?php

namespace App\Models;

use App\Models\About;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
     use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function About()
    {
        return $this->belongsTo(About::class)->withDefault();
    }
}
