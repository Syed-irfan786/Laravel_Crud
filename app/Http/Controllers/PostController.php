<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    
    public function add(Request $request)
    {
        $request->validate([
            'title'=> 'required | string',
            'description'=> 'required | string',
        ]);

        Post::create([
            'title'=>$request->title,
            'description' =>$request->description,
        ]);


        return redirect()->back()->with('hogia' ,'save kr h ly! MUBARAK HO ');
        
    }

    public function show(){
        $post = Post::all();

        return view('post.show', compact('post', 'post'));
    }

    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()->back();
    }

    public function edit($id)
    {
        $post  = Post::find($id);
        // dd("test");

        // $data = compact('post' , 'id');

        return view('post.update', compact('post', 'id'));
    }

    public function update(Request $request , $id)
    {
        // dd("here i am");
        $post = Post::find($id);

        if($post){

            $post->title = $request->input('title');
            $post->description = $request->input('description');

            $post->save();

            return redirect('/show');
        }
        else
        {
            return redirect('/show')->back()->with("Fail", "not updated");
        }
    }

}
