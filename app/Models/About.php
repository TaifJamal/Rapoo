<?php

namespace App\Models;


use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class About extends Model
{
     use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function Projects()
    {
        return $this->hasMany(Project::class);
    }
}
