<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
	public function __invoke(Request $request)
	{
		$posts = Post::all();
		return view('admin.posts.index', compact('posts'));
	}
}
