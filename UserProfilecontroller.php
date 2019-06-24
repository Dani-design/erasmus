<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserProfilecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
         $this->middleware('auth');
     }
    public function index()
    {


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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $user =User::find($id);
        return view ('userprofile')->with('user',$user)->with('posts', $user->projectposts);
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $user=User::find($id);

      //check for correct user

      return view('userprofileedit')->with ('user',$user);
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
        ['cover_image'=>'image|nullable|max:1999'
      ]);
      if($request->hasFile('cover_image')){
        $filenameWithExt = $request -> file('cover_image')->getClientOriginalName();
        $filename =pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('cover_image')->getClientOriginalExtension();
        $fileNameToStore=$filename.'_'.time().'.'.$extension;
        $path = $request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
      }
      $user =  User::find($id);
      $user->description = $request->input('description');
      if($request->hasFile('cover_image'))
      {$user->cover_image = $fileNameToStore;
}
      $user->save();
      return redirect()->action('UserProfilecontroller@show', array($user->id))->with('success','Profile updated');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $user = User::find($id);

      if ($user->cover_image !='noimage.jpg')
      {
        Storage::delete('public/cover_images/'.$user->cover_image);
      }
      $user->delete();

    }
}
