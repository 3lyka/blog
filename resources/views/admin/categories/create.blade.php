@extends('admin.layouts.pattern')
@section('content')

<div class="content-wrapper p-3">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2 ">
				<div class="col-sm-6">
					<h1 class="m-0">Категории</h1>
				</div>
			</div>
		</div>
	</div>
	<section class="content ">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6 col-md-3">
					<h5 class="mb-5">Добавление категории</h5>
					<p class="fw-light">Название категории</p>

					<form action="{{route('admin.category.store')	}}" method="POST">
						@csrf
						<div class="form-input">
							<input type="text" class="form-control shadow" name="title" placeholder="Категория стулья">
							@error('title')
							<div class="text-danger p-1">
								Поле нужно заполнить!
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