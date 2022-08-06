<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return response($posts, 200);
    }

    public function show($id)
    {
        return Post::findOrFail($id);
    }

    public function store(Request $request)
    {
        Post::create($request->all());
        return response()->json(["result" => "ok"], 201);
    }

    public function destroy($postId)
    {
        $post = Post::find($postId);
        $post->delete();

        return response()->json(["result" => "ok"], 200);
    }

    public function update(Request $request, $postId)
    {
        $post = Post::find($postId);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return response()->json(["result" => "ok"], 201);
    }



    // public function search(Request $request){

    //     $query = Review::query();

    //     if ($s = $request->input('s')) {
    //         $query->where('writer','regexp',"/.*$s/i")
    //         ->orWhere('title_book','regexp',"/.*$s/i");

    //         return $query->get();



    //     } else {
    //         return response()->json([
    //             'notice' => 'Não foi possivel realizar a busca'
    //         ]);
    //     }


    // }

    public function search(Request $request)
    {

        $query = Post::query();

        if ($s = $request->input('s')) {
            $query->where('title','regexp', "/.*$s/i")
            ->orWhere('content','regexp',"/.*$s/i");

            return $query->get();
        } else
        {
            return response()->json([
                'notice ' => 'Não foi possivel realizar a busca'
            ]);
        }

    }

}
