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

	<section class="container-fluid">
		<div class="row mt-5">
			<div class="col-sm-6 col-md-12">
				<div class="card">
					<div class="card-body table-responsive p-0">
						<table class="table table-hover align-middle">
							<thead>
								<tr>
									<th>ID</th>
									<th>Коммент</th>
									<th>Дата</th>
									<th>Просмотр</th>
									<th>Удалить</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($comments as $comment)
								<tr>
									<td>{{$comment->id}}</td>
									<td>{{$comment->message}}</td>
									<td>{{$comment->created_at}}</td>
									<td><a href="{{route('personal.comment.edit', $comment->id)}}"><span style="color:#B2FF00;"><i class="fas fa-pen"></i></span></a></td>
									<td>
										<form action="{{route('personal.comment.delete',$comment->id)}}" method="POST">
											@csrf
											@method('DELETE')
											<button type="submit" class="border-0 bg-transparent">
												<span role="button" style="color:#FC4850;"><i class="fa-solid fa-trash-can"></i></span>
											</button>

										</form>

									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
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