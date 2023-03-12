<?php

namespace App\Models;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function projects()
    {
        return $this->belongsToMany(Project::class, 'projects_tags', 'tags_id','projects_id');
    }

    protected $fillable = [
        'name',
        'slug'
    ];

    public $timestamps = false;
    use HasFactory;
}
