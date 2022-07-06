		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="{{route('admin.main.index')}}" class="brand-link">
				<span class="brand-text font-weight-light">Admin panel</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user panel (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="/images/avatar-1.svg" class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
						<p class="d-block">User</p>
					</div>
				</div>
				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
<!-- 						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-table"></i>
								<p>
									Tables
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="pages/tables/simple.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Simple Tables</p>
									</a>
								</li>
							</ul>
						</li> -->
<!-- 						<li class="nav-item">
							<a href="pages/calendar.html" class="nav-link">
								<i class="nav-icon fas fa-calendar-alt"></i>
								<p>
									Calendar
									<span class="badge badge-info right">2</span>
								</p>
							</a>
						</li> -->
						<li class="nav-item">
							<a href="{{ route('categories') }}" class="nav-link">
							<i class="nav-icon fas fa-list-ul"></i>
								<p>
									Категории
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{route ('admin.main.index')}}" class="nav-link">
								<i class="nav-icon far fa-image"></i>
								<p>
									Галерея 
								</p>
							</a>
						</li>
<!-- 						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-book"></i>
								<p>
									Страницы
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="pages/examples/invoice.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Invoice</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/profile.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Profile</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/e-commerce.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>E-commerce</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/projects.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Projects</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/project-add.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Project Add</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/project-edit.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Project Edit</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/project-detail.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Project Detail</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/contacts.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Contacts</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/faq.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>FAQ</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/contact-us.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Contact us</p>
									</a>
								</li>
							</ul>
						</li> -->
					</ul>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

		