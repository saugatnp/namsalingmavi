<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crouselone = Post::where('key' , 'crouselone')->get();
        $crouseltwo = Post::where('key' , 'crouseltwo')->get();
        $crouselthree = Post::where('key' , 'crouselthree')->get();
        $principalmsgs = Post::where('key', 'pmsg')->get();
        $sectionone = Post::where('key' , 'secone')->get();
        $sectiontwo = Post::where('key' , 'sectwo')->get();
        $sectionthree = Post::where('key' , 'secthree')->get();
        $recentevent = Post::where('key' , 'recentevt')->get();
        return view('pages.home')->with('principalmsgs', $principalmsgs)->with('sectionone',$sectionone)->with('sectiontwo',$sectiontwo)->with('sectionthree',$sectionthree)
        ->with('recentevent', $recentevent)->with('crouselone' ,$crouselone)->with('crouseltwo' , $crouseltwo)->with('crouselthree' , $crouselthree);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('backends.home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'key' => 'required',
            'title' => 'required',
            'value' => 'required',
            'image' => 'required'
        ]);

        //create post
        $post = new Post;
        $post->key = $request->input('key');
        $post->title = $request->input('title');
        $post->value = $request->input('value');
        $post->image = $request->input('image');
        $post->save();

        return redirect('/home/create')->with('success' , 'Post added');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('backends.update.edit')->with('post',$post);
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
        $this->validate($request,[
            // 'key' => 'required',
            'title' => 'required',
            'value' => 'required',
            'image' => 'required'
        ]);

        //create post
        $post = Post::Find($id);
        // $post->key = $request->input('key');
        $post->title = $request->input('title');
        $post->value = $request->input('value');
        $post->image = $request->input('image');
        $post->save();

        return redirect('/home/create')->with('success' , 'Post updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
