<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class blogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog=Blog::all();
        return view('Blog')->with('blog',$blog);
        return view('admin.Viewblog');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addBlog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog =new Blog();
        $blog->title=$request->name;
        $blog->content=$request->description;
        $image = $request->image;
        $image_new_name = time().$image->getClientOriginalName();
        $image->move('Uploads/blog',$image_new_name); 
        $img = 'Uploads/blog/'.$image_new_name;

        $blog->Blogimage = $img;

        $blog->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog=Blog::findorfail($id);
        return view('Blogdetail')->with('blog',$blog);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);        
        return view('admin.editBlog')->with('blog',$blog);
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
        $blog = Blog::findorFail($id);
        $blog->title = $request->name; 
        $blog->content = $request->description;  
        
        $current = $blog->Blogimage;
        if($request->hasFile('image')){
            $image = $request->image;
            $image_new_name = time().$image->getClientOriginalName();
            $image->move('Uploads/blog',$image_new_name); 
            $img = 'Uploads/blog/'.$image_new_name;
            $blog->Blogimage = $img;

            if($current != $img){
                unlink($current);
            }
        }
        
        $blog->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        unlink($blog->Blogimage);
        // Session::flash('message', 'Successfully deleted the nerd!');
        return redirect()->back();
        
    }

    public function viewblog()
    {
        $blog = Blog::all();
        return view('admin.Viewblog', compact('blog'));
    }
}
