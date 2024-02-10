<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function index()
    {
        $profile = [
            'firstName' => 'Earl',
            'lastName' => "Fernando",
            'age' => 21,
            'contactNo' => '09119091090'
        ];

        $posts = [
            ["_id" => 1, "title" => "Post1", "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra lorem et bibendum porta. Interdum et malesuada fames ac ante ipsum primis in faucibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur fringilla lobortis orci, eget cursus nulla commodo ac. Cras convallis sit amet."],
            ["_id" => 2, "title" => "Post2", "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra lorem et bibendum porta. Interdum et malesuada fames ac ante ipsum primis in faucibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur fringilla lobortis orci, eget cursus nulla commodo ac. Cras convallis sit amet."],
            ["_id" => 3, "title" => "Post3", "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra lorem et bibendum porta. Interdum et malesuada fames ac ante ipsum primis in faucibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur fringilla lobortis orci, eget cursus nulla commodo ac. Cras convallis sit amet."],
        ];

        // return view and provide data (in this case $profile and $posts)
        return view("profile", ["user" => $profile, "posts" => $posts, "title" => $profile["firstName"]]);
    }
}
