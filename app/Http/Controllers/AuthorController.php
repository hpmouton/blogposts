<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Author;
use App\Models\Profile;
use App\Http\Requests\StoreAuthor;
use Arr;


class AuthorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $author= Author::with('profile')->get();


        return view('authors.index',compact('author'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAuthor $request)
    {
        $validated = $request->validated();
        $author = new Author();
        $profile = new Profile();

        $author->name = $request ['name'];

        $profile->email = $request['email'];

        $author->save();
        $profile->author_id = $author['id'];

        $profile->save();

        $request->session()->flash('status','The Author Was Created Successfully!');

        return redirect()->route('author.index',['author' => $author->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = DB::table('authors')->find($id);

        return view('authors.show',['author' => Author::findOrFail($id)]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('authors.edit',['author' => Author::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreAuthor $request, $id)
    {
        $author = Author::findOrFail($id);
        $validated = $request->validated();
        $name = Arr::pull($validated,'name');
        $email = Arr::pull($validated,'email');
        $author->update(['name'=> $name]);
        $author->profile->update(['email'=>$email]);



        $author->save();

        $request->session()->flash('status','Author Was Successfully Updated');

        return redirect()->route('author.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $authors = Author::findOrFail($id);
        $authors->profile->delete();
        $authors->delete();



        session()->flash('status','Author ' .$id. ' was deleted');

        return redirect()->route('author.index');
    }
}
