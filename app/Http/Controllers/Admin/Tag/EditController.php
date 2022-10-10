<?php

namespace App\Http\Controllers\Admin\Tag;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tag;

class EditController extends Controller
{
    public function __invoke(Tag $tag)
    {
        return view('admin.tag.edit', compact('tag'));
    }

}
