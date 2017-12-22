<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // protected $hidden = ['id'];
	use Sluggable;

	protected $fillable = [
		'id',
        'title',
        'user_id',
        'category_id',
        'slug',
        'excerpt',
        'content',
        'featured_image',
	];

	public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

	public function category(){
		return $this->belongsTo(Category::class, 'category_id');
	}

	public function user(){
		return $this->belongsTo(User::class, 'user_id');
	}

	public function tags(){
    	return $this->belongsToMany(Tag::class, 'post_tag');
    }
}
