<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // protected $hidden = ['id'];
	use Sluggable;

	protected $fillable = [
		'id',
        'name',
        'slug',
	];

	public function posts(){
		return $this->hasMany(Posts::class, 'parent_id');
	}

	public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
