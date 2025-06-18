<?php

namespace App\Http\Controllers\Api;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;

class CommentControllr extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comment::all();
        return response()->json($comments, 200);
    }


    public function store(CommentRequest $request)
    {
        $comment =  Comment::create([
            'auther' => $request->auther,
            'content' => $request->content,
            'post_id' => $request->post_id
        ]);
        return response()->json($comment, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comment = Comment::findorfail($id);
        if (!$comment)
            return response('not found', 404);
        else
            return response($comment, 200);
    }

    public function update(CommentRequest $request, string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
