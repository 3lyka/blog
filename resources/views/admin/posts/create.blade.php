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

					<form action="{{route('admin.post.store')	}}" method="POST">
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
						<input type="submit" class="btn btn-primary mt-3 shadow-light" value="Добавить">
					</form>
				</div>
			</div>
		</div>
	</section>

</div>
@endsection