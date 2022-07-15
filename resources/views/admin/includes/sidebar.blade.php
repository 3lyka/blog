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
				<p class="d-block">Admin</p>
			</div>
		</div>
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<li class="nav-item">
					<a href="{{ route('admin.user.index') }}" class="nav-link">
						<i class="nav-icon fas fa-user-alt"></i>
						<p>
							Пользователи
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('admin.post.index') }}" class="nav-link">
						<i class="nav-icon	fas fa-book"></i>
						<p>
							Посты
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('admin.category.index') }}" class="nav-link">
						<i class="nav-icon fas fa-list-ul"></i>
						<p>
							Категории
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('admin.tag.index') }}" class="nav-link">
						<i class="nav-icon fas fa-tags"></i>
						<p>
							Теги
						</p>
					</a>
				</li>


			</ul>
		</nav>
	</div>
</aside>