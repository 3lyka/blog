<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<a href="{{route('admin.main.index')}}" class="brand-link">
		<span class="brand-text font-weight-light">Admin panel</span>
	</a>

	<div class="sidebar">
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="/images/avatar-1.svg" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<p class="d-block">Привет</p>
			</div>
		</div>
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
<!-- 				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-user-alt"></i>
						<p>
							Пользователи
						</p>
					</a>
				</li> -->
				<li class="nav-item">
					<a href="{{ route('personal.liked.index') }}" class="nav-link">
					<i class="nav-icon fas fa-heart"></i>
						<p>
							Понравившееся
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('personal.comment.index') }}" class="nav-link">
					<i class="nav-icon fas fa-comments"></i>
						<p>
							Коментарии
						</p>
					</a>
				</li>
			</ul>
		</nav>
	</div>
</aside>