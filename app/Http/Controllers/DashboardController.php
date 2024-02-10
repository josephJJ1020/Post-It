<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class DashboardController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    // return feed view
    public function feed()
    {
        $posts = Post::all();

        // $posts = [["author_name" => "Anon1", "content" => "sample content 1"], ["author_name" => "Anon 2", "content" => "sample content 2"]];

        // return view('feed', ["posts" => $posts, "toast" => ["type" => "success", "message" => "sample toast"]]);
        return view('feed', ["posts" => $posts]);
    }
}
