@extends('admin.layouts.pattern')
@section('content')

<div class="content-wrapper p-3">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2 ">
				<div class="col-sm-6">
					<h1 class="m-0">Редактирование поста</h1>
				</div>
			</div>
		</div>
	</div>
	<section class="content ">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6 col-md-8">


					<form action="{{route('admin.post.update',	$post->id )}}" method="POST" enctype="multipart/form-data">
						@csrf
						@method('PATCH')
						<label class="fw-light">Выбрать категорию поста</label>
						<div class="col-12 col-sm-6">
							<select name="category_id" class="form-control">
								@foreach ($categories as $category)
								<option value="{{$category->id}}" {{ $category->id == $post->category_id ? ' selected':'' }}>{{ $category->title }}</option>
								@endforeach
							</select>
						</div>
						<label>Выбор тегов</label>
						<div class="col-12 col-sm-6">
							<select name="tag_ids[]" class="select2" multiple="" data-dropdown-css-class="select2-purple" style="width: 100%;">
								@foreach ($tags as $tag)
								<option {{ is_array($post->tags->pluck('id')->toArray()) && in_array($tag->id, $post->tags->pluck('id')->toArray()) ? 'selected':'' }} value="{{$tag->id}}">{{ $tag->title}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-input">
							<p class="fw-light">Название поста </p>
							<input type="text" class="form-control shadow mb-3" name="title" placeholder="Пост стулья" value="{{$post->title}}">
							@error('title')
							<div class="text-danger p-1">
								Поле нужно заполнить!
							</div>
							@enderror
							<p class="fw-light">Текст поста</p>
							<textarea name="content" id="summernote" value="{{$post->content}}">
							{{$post->content}}
							</textarea>
							@error('content')
							<div class="text-danger p-1">
								Поле нужно заполнить!
							</div>
							@enderror
						</div>
						<div class="form-group">
							<label for="exampleInputFile">Добавить превью</label>
							<div class="input-group">
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="exampleInputFile" name="preview_image">
									<label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
								</div>
								<div class="input-group-append">
									<span class="input-group-text">Загрузить</span>
								</div>
							</div>
							<div class="col-6 image">
								<img src="{{asset('storage/' . $post->preview_image)}}" alt="preview_image" class="w-25 mt-1">
							</div>
						</div>
						<div class="form-group">
							<label for="exampleInputFile">Добавить главное изображение</label>
							<div class="input-group">
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="exampleInputFile" name="main_image">
									<label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
								</div>
								<div class="input-group-append">
									<span class="input-group-text">Загрузить</span>
								</div>
							</div>
							<div class="col-6 image">
								<img src="{{asset('storage/' . $post->main_image)}}" alt="main_image" class="w-25 mt-1">
							</div>
						</div>

						<input type="submit" class="btn btn-primary mt-3 shadow-light" value="Обновить">
					</form>
				</div>
			</div>
		</div>
	</section>

</div>
@endsection