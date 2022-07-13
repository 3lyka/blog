@extends('admin.layouts.pattern')
@section('content')

<div class="content-wrapper p-3">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2 ">
				<div class="col-sm-6">
					<h1 class="m-0">Редактирование пользователей</h1>
				</div>
			</div>
		</div>
	</div>
	<section class="content ">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6 col-md-3">
					<p class="fw-light">Имя пользователей </p>

					<form action="{{route('admin.user.update',	$user->id )}}" method="POST">
						@csrf
						@method('PATCH')
						<div class="form-input m-2">
							<input type="text" class="form-control shadow" name="name" placeholder="Имя пользователя" value="{{$user->name}}">
							@error('name')
							<div class="text-danger p-1">
								{{ $message }}
							</div>
							@enderror
						</div>
						<div class="form-input m-2">
							<input type="text" class="form-control shadow" name="email" placeholder="Ваш email" value="{{$user->email}}">
							@error('email')
							<div class="text-danger p-1">
								{{ $message }}
							</div>
							@enderror
						</div>
						<div class="form-input m-2">
							<input type="hidden" class="form-control shadow" name="user_id"  value="{{$user->id}}">
						</div>
						<div class="col-12 col-sm-6">
						<p class="fw-light">Выберите роль </p>
							<select name="role" class="form-control">
								@foreach ($roles as $id => $role)
								<option value="{{$id}}" {{ $id == $user->role ? ' selected':'' }}>{{ $role }}</option>
								@endforeach
							</select>
							@error('role')
							<div class="text-danger p-1">
								{{ $message }}
							</div>
							@enderror
						</div>
						<input type="submit" class="btn btn-primary m-2 shadow-light" value="Обновить">
					</form>
				</div>
			</div>
		</div>
	</section>

</div>
@endsection