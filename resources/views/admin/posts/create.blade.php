@extends('admin.layouts.pattern')
@section('content')
<div class="content-wrapper p-3">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2 ">
				<div class="col-sm-6">
					<h1 class="m-0">Посты</h1>
				</div>
			</div>
		</div>
	</div>
	<section class="content ">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6 col-md-8">
					<h5 class="mb-5">Добавление поста</h5>
					<p class="fw-light">Название поста</p>
					<form action="{{route('admin.post.store')	}}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="form-group ">
							<input type="text" class="form-control mb-3 shadow" name="title" placeholder="Пост стулья">
							@error('title')
							<div class="text-danger p-1">
								Поле название нужно заполнить!
							</div>
							@enderror
							<p class="fw-light">Текст поста</p>
							<textarea name="content" id="summernote"></textarea>
							@error('content')
							<div class="text-danger p-1">
								Поле контент нужно заполнить!
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
						</div>

						<input type="submit" class="btn btn-primary mt-3 shadow-light" value="Добавить">
					</form>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection