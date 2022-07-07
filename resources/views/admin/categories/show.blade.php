@extends('admin.layouts.pattern')
@section('content')

<div class="content-wrapper p-3">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2 ">
				<div class="col-sm-6">
					<h1 class="m-0">Редактирование категории</h1>
					<h5 class="mt-2">{{$category->title}}</h5>
				</div>
			</div>
		</div>
	</div>
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
									<th>Количество постов</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>{{$category->id}}</td>
									<td>{{$category->title}}</td>
									<td><span class="tag tag-success">Потом будет к каким постам привязано</span></td>
								</tr>
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