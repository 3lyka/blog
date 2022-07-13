@extends('admin.layouts.pattern')
@section('content')

<div class="content-wrapper p-3">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2 ">
				<div class="col-sm-6">
					<h1 class="m-0">Пользователи</h1>
				</div>
			</div>
		</div>
	</div>
	<section class="content ">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6 col-md-3">
					<button class="btn btn-primary  ps-5 pe-5"><a href="{{	route('admin.user.create')	}}" class="text-white">Добавить</a></button>
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
									<th>Имя</th>
									<th>Дата</th>
									<th>Роль</th>
									<th>Просмотр</th>
									<th>Редактировать</th>
									<th>Удалить</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($users as $user)
								<tr>
									<td>{{$user->id}}</td>
									<td>{{$user->name}}</td>
									<td>{{$user->created_at}}</td>
									<td><span class="user user-success">{{ $user->role }}</span></td>
									<td><a href="{{route('admin.user.show', $user->id)}}"><span style="color:#CBE5FF;"><i class="far fa-eye"></i></span></a></td>
									<td><a href="{{route('admin.user.edit', $user->id)}}"><span style="color:#B2FF00;"><i class="fas fa-pen"></i></span></a></td>
									<td>
										<form action="{{route('admin.user.delete',$user->id)}}" method="POST">
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