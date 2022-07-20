<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
	public function __invoke(Request $request)
	{
		$data = [];
		$data['usersCount'] = User::all()->count();
		$data['postsCount'] = Post::all()->count();
		$data['categoriesCount'] = Category::all()->count();
		$data['tagsCount'] = Tag::all()->count();
		$data['commentCount'] = Comment::all()->count();
		return view('personal.main.index', compact('data'));
	}
}
