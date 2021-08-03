<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Album;
use App\Models\Imagee;
use App\Models\Notice;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageServiceProvider;
use Intervention\Image\Facades\Image;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //function to display main home page data
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
        $recenteventtwo = Post::where('key' , 'recentevttwo')->get();
        return view('pages.home')->with('principalmsgs', $principalmsgs)->with('sectionone', $sectionone)->with('sectiontwo', $sectiontwo)->with('sectionthree', $sectionthree)
            ->with('recentevent', $recentevent)->with('crouselone', $crouselone)->with('crouseltwo', $crouseltwo)->with('crouselthree', $crouselthree)->with('recenteventtwo' , $recenteventtwo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $this->validate($request, [
            'photo' => 'image|max:15999'
        ]);
        //handle file upload
        $x = 10;
        if ($request->hasFile('photo')) {
            //get file name with extension
            $fileNameWithExt = $request->file('photo')->getClientOriginalName();
            // get just file name 
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // get just extension
            $extension = $request->file('photo')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = 'FILE_' . time() . '.' . $extension;
            //upload image
            $image = $request->file('photo');
            $img = Image::make($image);
            echo $fileNameToStore;
            $img->save(\public_path('/storage/images/' . $fileNameToStore), $x);
            echo $fileNameToStore;
        }
        //create new row in image table
        $post = new Imagee;
        $post->album_id = $id;
        echo $fileNameToStore;
        //save the file name as the name we just created
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
                $images = DB::table('imagees')->get();
                return view('backends.update.editalbum')->with('album', $album)->with('images', $images);
            }
            // if the edit request is from home or booklit or examroutine or bot or smsc or school profile following code will execute
            elseif (str_replace(url('/'), '', url()->previous()) == "/home" || "/dash-board/booklist" || "/dash-board/examroutine" || "/dash-board/bot" || "/dash-board/smsc" || "/dash-board/schoolprofile") {
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
                //changes the album title
                $album->title = $request->input('title');
                $album->save();
                return redirect('/dash-board/gallery')->with('success', 'Gallery page updated');
            }
            // if the initial update request is not from any of above execute the following
            else {
                $this->validate($request, [
                    'title' => 'required',
                    'value' => 'required',
                    'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:20048'
                ]);
                $x = 10;
                if ($request->hasFile('image')) {
                    //get file name with extension
                    $fileNameWithExt = $request->file('image')->getClientOriginalName();
                    // get just file name 
                    $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                    // get just extension
                    $extension = $request->file('image')->getClientOriginalExtension();
                    //filename to store
                    $fileNameToStore = 'FILE_' . time() . '.' . $extension;
                    //upload image
                    $image = $request->file('image');

                    $img = Image::make($image);
                    $img->save(\public_path('/storage/images/' . $fileNameToStore), $x);
                    // $image = Image::make($compress);
                    // $img->resize(250, 250, function ($constraint) {
                    //     $constraint->aspectRatio();
                    // })->save($destination,$fileNameToStore);
                    // $destination = public_path('/storage/images');
                    // $image->move($destination,$fileNameToStore);
                    // ->save('public/images/'.$fileNameToStore);

                    // $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
                }

                //create post
                $post = Post::Find($id);
                $post->title = $request->input('title');
                $post->value = $request->input('value');
                //check if image is uploaded else keep same value
                if ($request->hasFile('image')) {
                    $post->image = $fileNameToStore;
                }
                $post->save();
                //condition to check and return to respective pages the request came form
                if ($request->input('url') == "/dash-board/examroutine") {
                    return redirect('dash-board/examroutine')->with('success', "Exam routine updated");
                } elseif ($request->input('url') == "/dash-board/booklist") {
                    return redirect('dash-board/booklist')->with('success', "Book list updated");
                } elseif ($request->input('url') == "/dash-board/schoolprofile") {
                    return redirect('dash-board/schoolprofile')->with('success', "School Profile updated");
                } elseif ($request->input('url') == "/dash-board/bot") {
                    return redirect('dash-board/bot')->with('success', "Faculty updated");
                } elseif ($request->input('url') == "/dash-board/smsc") {
                    return redirect('dash-board/smsc')->with('success', "School Comittee updated");
                } elseif ($request->input('url') == "/dash-board/pcomittee") {
                    return redirect('dash-board/pcomittee')->with('success', "Previous Comittee updated");
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
    public function destroy($id)
    {
        //check if destroy request is from gallery page
        if (str_replace(url('/'), '', url()->previous()) == "/dash-board/gallery") {
            $album = Album::Find($id);
            $image = Imagee::where('album_id', $id);
            //deletes the image from the album to be deleted
            $image->delete();
            //delete the album finally
            $album->delete();
            return redirect('/dash-board/gallery')->with('success', 'Album deleted');
        }
        //check if request id from routine  pages
        elseif (str_replace(url('/'), '', url()->previous()) == "/dash-board/examroutine" || "/dash-board/bot" || "/dash-board/smsc") {
            $routine = Post::Find($id);
            $routine->delete();
            return redirect('' . str_replace(url('/'), '', url()->previous()) . '')->with('success', 'Deleted');
        }
        //check if request id from  bot pages
        elseif (str_replace(url('/'), '', url()->previous()) == "/dash-board/bot") {
            $routine = Post::Find($id);
            $routine->delete();
            return redirect('' . str_replace(url('/'), '', url()->previous()) . '')->with('success', 'Deleted');
        }
        //check if request id from smsc pages
        elseif (str_replace(url('/'), '', url()->previous()) == "/dash-board/smsc") {
            $routine = Post::Find($id);
            $routine->delete();
            return redirect('' . str_replace(url('/'), '', url()->previous()) . '')->with('success', 'Deleted');
        }
        //check if request is from notice page
        elseif (str_replace(url('/'), '', url()->previous()) == "/dash-board/notice") {
            $notice = Notice::Find($id);
            $notice->delete();
            return redirect('/dash-board/notice')->with('success', 'Notice deleted');
        }
        //check if request is form  the previous comittee and deletes the data
        elseif (str_replace(url('/'), '', url()->previous()) == "/dash-board/pcomittee") {
            $notice = Post::Find($id);
            $notice->delete();
            return redirect('/dash-board/pcomittee')->with('success', 'Data deleted');
        }
        //else it deltes the image 
        else {
            $image = Imagee::Find($id);
            $image->delete();
            return redirect('/dash-board/gallery')->with('success', 'Image deleted');
        }
    }
}
