<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
	public function __invoke()
	{

		$posts = Post::paginate(6);
		$likedPosts = Post::withCount('likedUsers')->orderBy('liked_users_count', 'DESC')->get();
		$categories = Category::all();
		return view('main.index', compact('posts', 'categories', 'likedPosts'));
	}
}
