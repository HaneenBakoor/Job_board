<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tag = Tag::all();
        return response()->json($tag);
    }

  
    public function store(Request $request)
    {
        try {
            Tag::create([
                'title' => 'Tag1',

            ]);
            return response()->json("created siccessfully");
        } catch (\Exception $e) {
            return response()->json($e);
        }
    }

    public function show(string $id)
    {
        $tag = Tag::findorfail($id);
        return response()->json($tag);
    }

    public function update(Request $request, string $id) {}


    public function destroy(string $id)
    {
        if (Tag::destroy($id))
            return response()->json("deleting successfully");
    }
}
