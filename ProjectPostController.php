<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\ProjectPost;
use App\User;
class ProjectPostController extends Controller
{

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth', ['except'=>['index','show','create','store']]);
      $this->middleware('multiple' , ['only'=>['create','store']]);

  }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $projectpost= ProjectPost::orderBy('created_at','desc')->get();
        return view('projectposts') -> with('projectpost', $projectpost);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('projectpostscreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
          ['title' => 'required',
          'description'=>'required',
          'cover_image'=>'image|nullable|max:1999'
        ]);
        //handle file
        if($request->hasFile('cover_image')){
          $filenameWithExt = $request -> file('cover_image')->getClientOriginalName();
          $filename =pathinfo($filenameWithExt, PATHINFO_FILENAME);
          $extension = $request->file('cover_image')->getClientOriginalExtension();
          $fileNameToStore=$filename.'_'.time().'.'.$extension;
          $path = $request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
        }else {
          $fileNameToStore= 'noimage.jpg';
        }
        //create post
        $post = new ProjectPost;
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->user_id= auth()->user()->id;
        $post->cover_image = $fileNameToStore;
        $post->save();
        return redirect('/projectposts')->with ('success', 'Post created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post= ProjectPost::find($id);
        return view ('projectpostshow')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=ProjectPost::find($id);

        //check for correct user
        if(auth()->user()->id!==$post->user_id){
          return redirect('/projectposts')->with('erorr','You cannot access this page');
        }
        return view('projectpostsedit')->with ('post',$post);
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
      $this->validate($request,
        ['title' => 'required',
        'description'=>'required',
        'cover_image'=>'image|nullable|max:1999'
      ]);
      if($request->hasFile('cover_image')){
        $filenameWithExt = $request -> file('cover_image')->getClientOriginalName();
        $filename =pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('cover_image')->getClientOriginalExtension();
        $fileNameToStore=$filename.'_'.time().'.'.$extension;
        $path = $request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
      }
      $post =  ProjectPost::find($id);
      $post->title = $request->input('title');
      $post->description = $request->input('description');
      if($request->hasFile('cover_image'))
      {$post->cover_image = $fileNameToStore;
}

      $post->save();
      return redirect('projectposts')->with ('success', 'Post updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = ProjectPost::find($id);
        if(auth()->user()->id!==$post->user_id){
          return redirect('/projectposts')->with('erorr','You cannot access this page');
        }
        if ($post->cover_image !='noimage.jpg')
        {
          Storage::delete('public/cover_images/'.$post->cover_image);
        }
        $post->delete();
        return redirect('projectposts')->with('success','Post Deleted');
    }
}
