@extends('admin.layouts.pattern')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper p-3">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2 ">
				<div class="col-sm-6">
					<h1 class="m-0">Категории</h1>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content ">
		<div class="container-fluid">
			<!-- Info boxes -->
			<div class="row">
				<div class="col-sm-6 col-md-3">
					<button class="btn btn-primary  ps-5 pe-5"><a type="#" href="{{	route('admin.category.create')	}}" class="text-white">Добавить</a></button>
				</div>

				<!-- /.col -->
			</div>
			<!-- /.row -->
		</div>
		<!--/. container-fluid -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection