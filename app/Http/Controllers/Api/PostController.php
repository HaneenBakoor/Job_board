<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{

    public function index()
    {
        $post = Post::paginate(5);
        return response()->json($post);
    }


    public function store(Request $request)
    {
        try {
            Post::create([
                // $request->all()
                'title' => $request->title,
                'body' => $request->body,
                'auther'=>$request->auther,
                'published' =>$request->published
            ]);
            return response();
        } catch (\Exception $e) {
            return response()->json($e);
        }
    }

    public function show(string $id)
    {
        $post = Post::findorfail($id);
        if(!$post){
        return response(['message'=>'post not found'],404);
        }
        return response()->json($post);
    }

    public function update(Request $request, string $id) {
        $post=Post::find($id);
         if(!$post){
        return response(['message'=>'post not found'],404);
        }
        $post->update($request->all());
        return response($post,200);
    }


    public function destroy(string $id)
    { $post=Post::find($id);
         if(!$post){
        return response(['message'=>'post not found'],404);
        }
        $post->delete();
            return response(['message'=>'post has benn deleted'],200);
    }
}
