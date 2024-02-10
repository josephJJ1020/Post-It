<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // anon posting only temporarily
    public function index(Request $request)
    {
        $content = $request->content;

        $randomNumber = null;

        $post = new Post();

        // validate author id
        if (!$request->author_id) {
            $randomNumber = rand(0, 100);
            $post->author_name = "Anon{$randomNumber}";
        }

        // set post values
        $post->content = $content;

        // save post
        $post->save();

        // redirect to current page with toast
        return redirect()->back()->with('toast', ['type' => "success", "message" => "Your post was created successfully!"]);
    }
}
