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
					<p class="fw-light">Название поста </p>

					<form action="{{route('admin.post.update',	$post->id )}}" method="POST">
						@csrf
						@method('PATCH')
						<div class="form-input">
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

						<input type="submit" class="btn btn-primary mt-3 shadow-light" value="Обновить">
					</form>
				</div>
			</div>
		</div>
	</section>

</div>
@endsection