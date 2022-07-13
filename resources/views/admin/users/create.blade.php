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
					<h5 class="mb-5">Добавление пользователя</h5>
					<form action="{{route('admin.user.store')	}}" method="POST">
						@csrf
						<div class="form-input m-2">
							<p class="fw-light">Имя пользователя</p>
							<input type="text" class="form-control shadow" name="name" placeholder="Имя пользователя">
							@error('name')
							<div class="text-danger p-1">
								{{ $message }}
							</div>
							@enderror
						</div>
						<div class="form-input m-2">
							<p class="fw-light">email пользователя</p>
							<input type="text" class="form-control shadow" name="email" placeholder="Ваш email">
							@error('email')
							<div class="text-danger p-1">
								{{ $message }}
							</div>
							@enderror
						</div>
						<div class="col-12 col-sm-6">
							<p class="fw-light">Роль пользователя</p>
							<select name="role" class="form-control">
								@foreach ($roles as $id => $role)
								<option value="{{$id}}" {{ $id == old('role') ? ' selected':'' }}>{{ $role }}</option>
								@endforeach
							</select>
							@error('role')
							<div class="text-danger p-1">
								{{ $message }}
							</div>
							@enderror
						</div>
						<input type="submit" class="btn btn-primary mt-3 shadow-light m-2" value="Добавить">
					</form>
				</div>
			</div>
		</div>
	</section>

</div>
@endsection