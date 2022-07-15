@extends('personal.layouts.pattern')
@section('content')

<div class="content-wrapper">

	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">{{ config('app.name', 'admin') }}</h1>
				</div>
			</div>
		</div>
	</div>

	<section class="content">
		<div class="container-fluid">

			<div class="row">
				<div class="col-12 col-sm-6 col-md-3">
					<div class="info-box mb-3">
						<span class="info-box-icon bg-warning elevation-1"><i class="fas fa-heart"></i></span>

						<div class="info-box-content">
							<span class="info-box-text">Нравится</span>
							<span class="info-box-number">10</span>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-3">
					<div class="info-box">
						<span class="info-box-icon bg-info elevation-1"><i class="fas fa-book"></i></span>

						<div class="info-box-content">
							<span class="info-box-text">Посты</span>
							<span class="info-box-number">
								10
							</span>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-3">
					<div class="info-box mb-3">
						<span class="info-box-icon bg-danger elevation-1"><i class="fas fa-comments"></i></span>

						<div class="info-box-content">
							<span class="info-box-text">Комментарии</span>
							<span class="info-box-number">10</span>
						</div>
					</div>
				</div>
				<div class="clearfix hidden-md-up"></div>

				<div class="col-12 col-sm-6 col-md-3">
					<div class="info-box mb-3">
						<span class="info-box-icon bg-success elevation-1"><i class="fas fa-tags"></i></span>

						<div class="info-box-content">
							<span class="info-box-text">Теги</span>
							<span class="info-box-number">13</span>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<section class="content ">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 col-md-6">
					<p class="fw-light">Комментарий </p>

					<form action="{{route('personal.comment.update',$comment->id )}}" method="POST">
						@csrf
						@method('PATCH')
						<div class="form-input">
							<div class="form-floating">
								<textarea name="message" class="form-control" id="floatingTextarea2" style="height: 100px">{{$comment->message}}</textarea>
							</div>
							@error('message')
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
<style>
	td,
	th {
		text-align: center;
	}
</style>
@endsection