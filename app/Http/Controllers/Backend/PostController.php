<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\User;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(env('PAGINATE'));
        return view('pages.backend.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $users = User::all();
        $tags = Tag::all();
        return view('pages.backend.post.create', compact('categories','users','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $post = Post::create([
            'title'          => $request->title,
            'user_id'        => $request->user_id,
            'category_id'    => $request->category_id,
            'excerpt'        => $request->excerpt,
            'content'        => $request->content,
            'featured_image' => $request->featured_image,
        ]);
        $user->tasks()->sync($request->tags);
        return redirect()->route('admin.post.index')
                         ->with('success-message', 'New post has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        dd($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $users = User::all();
        $tags = Tag::all();
        $post = Post::find($id);
        return view('pages.backend.post.edit', compact('categories','users', 'post','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title          = $request->title;
        $post->user_id        = $request->user_id;
        $post->category_id    = $request->category_id;
        $post->excerpt        = $request->excerpt;
        $post->content        = $request->content;
        $post->featured_image = $request->featured_image;
        $post->save();
        $post->tags()->sync($request->tags);

        return redirect()
                ->route('admin.post.index', [
                    'page' => $request->page ?? 1
                ])
                ->with('success-message', 'Post has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return back()->with('success-message', 'Post has been deleted.');
    }
}
