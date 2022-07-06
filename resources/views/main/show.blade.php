@extends('layouts.pblog')
@section('content')

<main class="content">
	<!-- Blog Page -->
	<section id="blog-page-area" class="blog-page-section">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="blog-single blog-standard shadow-dark">
						<h1 class="my-0">5 Best App Development Tool for Your Project</h1>
						<ul class="list-inline unstyled meta mb-0 mt-3">
							<li class="list-inline-item">28 February 2020</li>
							<li class="list-inline-item"><a href="#" title="Posts by Bolby Doe" rel="author">Bolby
									Doe</a></li>
							<li class="list-inline-item"><a href="#">Reviews</a></li>
						</ul>
						<div class="thumb-wrapper mt-4"><img src="images/blog/1-1.svg" alt=""></div>
						<article>
							<div class="clearfix my-4">
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
									eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient
									montes, nascetur ridiculus mus.</p>
								<p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla
									consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec,
									vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,
									justo.</p>
								<p>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.
									Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo
									ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante,
									dapibus in, viverra quis, feugiat a, tellus.</p>
								<p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean
									imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.
									Nam eget dui. Etiam rhoncus.</p>
								<p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit
									amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus
									pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec
									vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci
									eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.
									Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue
									velit cursus nunc.</p>
							</div>
						</article>
					</div>
				</div>
				<!-- /blog-post-content -->
				<div class="col-md-4">
					<div class="blog-side-bar">
						<div class="widget bg-white rounded shadow-dark">
							<h3 class="widget-header">Categories</h3>
							<ul>
								<li class="cat-item cat-item-4"><a href="#">Business</a></li>
								<li class="cat-item cat-item-6"><a href="#">Reviews</a></li>
								<li class="cat-item cat-item-5"><a href="#">Tutorial</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

@endsection