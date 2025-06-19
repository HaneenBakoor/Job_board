<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{

    public function index()
    {
        $post = Post::paginate(5);
        return response()->json($post);
    }


    public function store(PostRequest $request)
    {
        // $validator=$request->validate([
        //     'title'=>'required',
        //     'body'=>'required',
        //     'auther'=>'required',
        //     'published'=>'required'
        // ],[
        //     'title.required '=>'Feild is required',
        //     'body.required '=>'Feild is required',
        //     'auther.required '=>'Feild is required',
        //     'published.required '=>'Feild is required'
        // ]);

        try {
            $post = Post::create([
                // $request->all()
                'title' => $request->input('title'),
                'body' => $request->input('body'),
                'auther' => $request->input('auther'),
                'published' => $request->has('published')
            ]);
            if($post)
            return response(['message' => 'successfully', 'data' => $post, 'code' => '200']);
        } catch (\Exception $e) {
            return response()->json($e);
        }
    }

    public function show(Post $post)
    {
        // $post = Post::findorfail($id);
        // if (!$post) {
        //     return response(['message' => 'post not found'], 404);
        // }
        return response()->json($post);
    }

    public function update(Request $request, Post $post)
    {
        // $post = Post::findorfail($id);
        // Gate::authorize('update',$post);

        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->auther = $request->input('auther');
        $post->published = $request->input('published');
        $post->save();
        return response($post, 200);
    }



    public function destroy(Post $post)
    {
        // $post = Post::findorfail($id);

        $post->delete();
        return response(['message' => 'post has been deleted'], 200);
    }
}
