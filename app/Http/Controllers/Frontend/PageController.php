<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
class PageController extends Controller
{
	public function home(){
		$featuredPosts = Post::where('is_featured', 1)->orderBy('created_at', 'desc')->take(3)->get()->values();
		$featuredPostsId = $featuredPosts->pluck('id')->toArray();
		$posts = Post::orderBy('created_at', 'desc')->get()->except($featuredPostsId);
		return view('pages.frontend.home', compact('featuredPosts', 'posts'));
	}
}
