@extends('admin.layouts.pattern')
@section('content')

<div class="content-wrapper p-3">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2 ">
				<div class="col-sm-12">
					<h1 class="m-0">Просмотр пользователя</h1>
					<h5 class="mt-2">{{$user->name}}
					</h5>
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
									<th>Пользователь</th>
									<th>email пользователя</th>
									<th>Редактировать</th>
									<th>Удалить</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>{{$user->id}}</td>
									<td>{{$user->name}}</td>
									<td>{{ $user->email }}</td>
									<td><a href="{{route('admin.user.edit', $user->id)}}"><span style="color:#B2FF00;"><i class="m-3 fas fa-pen"></i></span></a></td>
									<td>
										<form action="{{route('admin.user.delete',$user->id)}}" method="POST">
											@csrf
											@method('DELETE')
											<button type="submit" class="border-0 bg-transparent p-2">
												<span role="button" style="color:#FC4850;"><i class="fa-solid fa-trash-can"></i></span>
											</button>

										</form>
									</td>

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