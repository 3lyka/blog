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
					<button class="btn btn-primary  ps-5 pe-5"><a href="{{	route('admin.category.create')	}}" class="text-white">Добавить</a></button>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="row mt-5">
			<div class="col-9">
				<div class="card">
					<div class="card-body table-responsive p-0">
						<table class="table table-hover text-nowrap">
							<thead>
								<tr>
									<th>ID</th>
									<th>Название</th>
									<th>Дата</th>
									<th>Количество постов</th>
									<th>Просмотр</th>
									<th>Редактировать</th>
									<th>Удалить</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($categories as $category)
								<tr>
									<td>{{$category->id}}</td>
									<td>{{$category->title}}</td>
									<td>{{$category->created_at}}</td>
									<td><span class="tag tag-success">Потом будет к каким постам привязано</span></td>
									<td><a href="{{route('admin.category.show', $category->id)}}"><span style="color:#CBE5FF;"><i class="far fa-eye"></i></span></a></td>
									<td><a href="{{route('admin.category.edit', $category->id)}}"><span style="color:#B2FF00;"><i class="fas fa-pen"></i></span></a></td>
									<td>
										<form action="{{route('admin.category.delete',$category->id)}}" method="POST">
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