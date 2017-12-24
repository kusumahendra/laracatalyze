<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use Sluggable;

	protected $fillable = [
		'id',
        'name',
        'slug',
	];

	public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function posts(){
    	return $this->belongsToMany(Post::class, 'post_tag');
    }
}
