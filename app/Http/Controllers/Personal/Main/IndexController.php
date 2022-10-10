<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\PostUserLike;

class IndexController extends Controller
{
    public function __invoke()
    {
        $data = [];
        $data['commentCount'] = Comment::all()->count();
        $data['likedCount'] = PostUserLike::all()->count();
        return view('personal.main.index', compact('data'));
    }

}
