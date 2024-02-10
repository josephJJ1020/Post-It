<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\RedirectResponse;

class PostController extends Controller
{
    //
    public function index()
    {
        $post = new Post();

        $post->content = "Sample content";
        $post->anon_name = "Anon123";

        $post->save();

        return redirect()->back()->with('toast', ['type' => "success", "message" => "Your post was created successfully!"]);
    }
}
