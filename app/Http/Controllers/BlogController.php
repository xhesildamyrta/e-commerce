<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\User;
Use \Carbon\Carbon;
use Illuminate\Pagination\LengthAwarePaginator;

class BlogController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //    $blogs=Blog::with('user')->latest()->paginate(1);
       $blogs=Blog::orderBy('creation_date', 'DESC')->get();
       return view('blog', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create-blog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'blog_title'=>'required',
            'blog_content'=>'required',
            'blog_img'=>'required',
            'blog_video'=>'required',
            
        ]);
        // $imageName = time().'.'.$request->image->extension();  
         $imageName = $request->file('image')->getClientOriginalName();
        $request->image->move(public_path('img'), $imageName);
        $date = Carbon::now();
        auth()->user()->blog()->create([
            'title'=>$request->blog_title,
            'content'=>$request->blog_content,
            'creation_date'=>Carbon::now(),
            'photo'=>$request->blog_img,
            'video'=>$request->blog_video   
    ]);
    return redirect()->route('create')->with('success_message', 'Blog added successfully!');
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
        //
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
        //
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
