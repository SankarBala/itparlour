<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'unique:posts', 'max:255'],
            'title' => ['required', 'max:255'],
            'status' => ['required', Rule::in(['draft', 'published'])],
        ]);

        $post = new Post();
        $post->name = $request->name;
        $post->slug = Str::slug(Str::words($request->name, 3));
        $post->title = $request->title;
        $post->contents = $request->contents;
        $post->image = $request->image;
        $post->status = $request->status;

        if ($validatedData) {
            $post->save();
            return redirect()->route('post.edit', $post->id);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.posts.edit')->with('data', Post::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->name = $request->name;
        $post->slug = Str::slug(Str::words($request->name, 3));
        $post->title = $request->title;
        $post->contents = $request->contents;
        $post->status = $request->status;
        $post->image = $request->image;
        $post->save();

        return response()->json(['data' => $post]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
