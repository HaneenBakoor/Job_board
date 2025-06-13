<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::all();
        return response()->json($post);
    }


    public function store(Request $request)
    {
        try {
            Post::create([
                'title' => 'post1',
                'body' => 'hello',
                'published' => '1'
            ]);
            return response()->json("created siccessfully");
        } catch (\Exception $e) {
            return response()->json($e);
        }
    }

    public function show(string $id)
    {
        $post = Post::findorfail($id);
        return response()->json($post);
    }

    public function update(Request $request, string $id) {}


    public function destroy(string $id)
    {
        if (Post::destroy($id))
            return response()->json("deleting successfully");
    }
}
