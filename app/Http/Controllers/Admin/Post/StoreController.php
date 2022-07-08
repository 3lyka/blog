<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\post\StoreRequest;
use App\Models\Post;

class StoreController extends Controller
{
	public function __invoke(StoreRequest $request)
	{
		$data = $request->validated();
		Post::firstOrCreate($data); /* проверка title */
		return redirect()->route('admin.post.index');
	}
}
