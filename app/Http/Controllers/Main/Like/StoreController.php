<?php

namespace App\Http\Controllers\Main\Like;

use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Http\Requests\Main\Comment\StoreRequest;
use App\Models\Comment;

class StoreController extends Controller
{
	public function __invoke(Post $post)
	{
		auth()->user()->LikedPosts()->toggle($post->id);
		return redirect()->back();
	}
}
