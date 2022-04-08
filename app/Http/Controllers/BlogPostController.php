<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;
use App\Http\Requests\StoreBlogPost;
use DB;


class BlogPostController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = DB::select('select * from blog_posts');

        return view('posts.index',['blogpost'=>BlogPost::all()]);




    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

            return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogPost $request)
    {
        $validated = $request->validated();
        $blogpost = new BlogPost();
        $blogpost->blogPostTitle = $request ['blogPostTitle'];
        $blogpost->blogPostContent = $request ['blogPostContent'];
        $blogpost->blogPostIsHighlight = $request ['blogPostIsHighlight'] == 'on' ? 1 : 0;

        $blogpost->save();

        $request->session()->flash('status','The Blog Post Was Created Successfully!');

        return redirect()->route('blogposts.show',['blogpost' => $blogpost->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $posts = DB::table('blog_posts')->find($id);

        return view('posts.show',['blogpost' => BlogPost::findOrFail($id)]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('posts.edit',['blogpost' => BlogPost::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreBlogPost $request, $id)
    {
        //
        $blogpost = BlogPost::findOrFail($id);
        $validated = $request->validated();
        $blogpost->fill($validated);
        $blogpost->blogPostIsHighlight = $request['blogPostIsHighlight'] == 'on' ? 1:0 ;
        $blogpost ->save();

        $request->session()->flash('status','Blog Post Was Successfully Updated');

        return redirect()->route('posts.show',['blogpost'=> $blogpost->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogpost = BlogPost::findOrFail($id);
        $blogpost->delete();

        session()->flash('status','Blog Post with ID ' .$id. ' was deleted');

        return redirect()->route('blogposts.index');
    }
}
