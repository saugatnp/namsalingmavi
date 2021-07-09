<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Album;
use App\Models\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crouselone = Post::where('key', 'crouselone')->get();
        $crouseltwo = Post::where('key', 'crouseltwo')->get();
        $crouselthree = Post::where('key', 'crouselthree')->get();
        $principalmsgs = Post::where('key', 'pmsg')->get();
        $sectionone = Post::where('key', 'secone')->get();
        $sectiontwo = Post::where('key', 'sectwo')->get();
        $sectionthree = Post::where('key', 'secthree')->get();
        $recentevent = Post::where('key', 'recentevt')->get();
        return view('pages.home')->with('principalmsgs', $principalmsgs)->with('sectionone', $sectionone)->with('sectiontwo', $sectiontwo)->with('sectionthree', $sectionthree)
            ->with('recentevent', $recentevent)->with('crouselone', $crouselone)->with('crouseltwo', $crouseltwo)->with('crouselthree', $crouselthree);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , $id)
    {
        $this->validate($request, [
            'photo' => 'image|max:1999'
        ]);
        //handle file upload
        if($request->hasFile('photo')){
            //get file name with extension
            $fileNameWithExt = $request->file('photo')->getClientOriginalName();
            // get just file name 
            $filename = pathinfo($fileNameWithExt , PATHINFO_FILENAME);
            // get just extension
            $extension = $request->file('photo')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = 'FILE_'.time().'.'.$extension;
            //upload image
            $path = $request->file('photo')->storeAs('public/images' , $fileNameToStore);
        }
        
        //create post
        $post = new Image;
        $post->album_id = $id;
        $post->photo = $fileNameToStore;
        $post->save();

        return redirect('/dash-board/gallery')->with('success', 'Image added');
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
        // check if the user is logged in or not
        if (Auth::check()) {
            // check to see whether the edit request is from gallery or not and direct to editalbum page
            if (str_replace(url('/'), '', url()->previous()) == "/dash-board/gallery") {
                $album = Album::find($id);
                $images = DB::table('images')->get();
                return view('backends.update.editalbum')->with('album', $album)->with('images' , $images);
            }
            // if the edit request is not from gallery execute the following and direct to edit page
            else {
                $post = Post::find($id);
                return view('backends.update.edit')->with('post', $post);
            }
        } 
        // if the user is not logged in redirect to login page
        else {
            return redirect('/login');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * 
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // check if the user is logged in or not
        if (Auth::check()) {
            // check to see if the update request is initially from gallery by passing the previous url from the editalbum page
            if ($request->input('url') == "/dash-board/gallery") {
                $this->validate($request, [
                    'title' => 'required'
                ]);
                $album = Album::Find($id);
                $album->title = $request->input('title');
                $album->save();
                return redirect('/dash-board/gallery')->with('success', 'Gallery page updated');
            }
            // if the initial update request is not from any of above execute the following
            else {
                $this->validate($request, [
                    'title' => 'required',
                    'value' => 'required',
                    'image' => 'image|max:1999'
                ]);
                if($request->hasFile('image')){
                    //get file name with extension
                    $fileNameWithExt = $request->file('image')->getClientOriginalName();
                    // get just file name 
                    $filename = pathinfo($fileNameWithExt , PATHINFO_FILENAME);
                    // get just extension
                    $extension = $request->file('image')->getClientOriginalExtension();
                    //filename to store
                    $fileNameToStore = 'FILE_'.time().'.'.$extension;
                    //upload image
                    $path = $request->file('image')->storeAs('public/images' , $fileNameToStore);
                }

                //create post
                $post = Post::Find($id);
                // $post->key = $request->input('key');
                $post->title = $request->input('title');
                $post->value = $request->input('value');
                //check if image is uploaded else keep same value
                if($request->hasFile('image')){
                    $post->image = $fileNameToStore;
                }
                $post->save();
                if($request->input('url') == "/dash-board/examroutine"){
                    return redirect('dash-board/examroutine')->with('success' , "Exam routine updated");
                }
                elseif($request->input('url') == "/dash-board/booklist"){
                    return redirect('dash-board/booklist')->with('success' , "Book list updated");
                }
                return redirect('/home')->with('success', 'Home page updated');
            }
        } 
        // if the user is not logged in redirect to login page
        else {
            return redirect('/login');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id )
    {
        if (str_replace(url('/'), '', url()->previous()) == "/dash-board/gallery") {
            $album = Album::Find($id);
            $image = Image::where('album_id' , $id);
            $image->delete();
            $album->delete();
            return redirect('/dash-board/gallery')->with('success' ,'Album deleted');
        }
        elseif(str_replace(url('/'), '', url()->previous()) == "/dash-board/examroutine") {
            $routine = Post::Find($id);
            $routine->delete();
            return redirect('/dash-board/examroutine')->with('success' ,'Routine deleted');
        }
        else {
            $image = Image::Find($id);
            $image->delete();
            return redirect('/dash-board/gallery')->with('success' ,'Image deleted');
        }
    }
}
