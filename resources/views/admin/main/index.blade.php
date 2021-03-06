@extends('admin.layouts.pattern')
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
						<span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

						<div class="info-box-content">
							<span class="info-box-text">Пользователи</span>
							<span class="info-box-number">{{ $data['usersCount'] }}</span>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-3">
					<div class="info-box">
						<span class="info-box-icon bg-info elevation-1"><i class="fas fa-book"></i></span>

						<div class="info-box-content">
							<span class="info-box-text">Посты</span>
							<span class="info-box-number">
							{{ $data['postsCount'] }}
							</span>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-3">
					<div class="info-box mb-3">
						<span class="info-box-icon bg-danger elevation-1"><i class="fas fa-list-ul"></i></span>

						<div class="info-box-content">
							<span class="info-box-text">Категории</span>
							<span class="info-box-number">{{ $data['categoriesCount'] }}</span>
						</div>
					</div>
				</div>
				<div class="clearfix hidden-md-up"></div>

				<div class="col-12 col-sm-6 col-md-3">
					<div class="info-box mb-3">
						<span class="info-box-icon bg-success elevation-1"><i class="fas fa-tags"></i></span>

						<div class="info-box-content">
							<span class="info-box-text">Теги</span>
							<span class="info-box-number">{{ $data['tagsCount'] }}</span>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
</div>
@endsection