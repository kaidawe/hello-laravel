<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'excerpt',
        'body',
        'url',
        'published_date',
        'image',
        'thumb',
        'slug',
        'category_id'
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'projects_tags', 'projects_id', 'tags_id');
    }
    
    use HasFactory;
}
