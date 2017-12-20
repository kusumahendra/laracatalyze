<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;

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

	public function category(){
		return $this->belongsTo(Cetegory::class, 'product_id');
	}

	public function user(){
		return $this->belongsTo(User::class, 'product_id');
	}

	public function sluggable()
	    {
	        return [
	            'slug' => [
	                'source' => 'title'
	            ]
	        ];
	    }
}
