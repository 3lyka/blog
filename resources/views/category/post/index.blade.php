@extends('layouts.pblog')
@section('content')

<main class="content">
	<!-- Blog Page -->
	<section id="blog-page-area" class="blog-page-section">
		<div class="container">
			<div class="row">

				<h1>Название категории</h1>
				<div class="col-md-8">
					<div class="blog-post-content">
						@foreach ($posts as $post)

						@php
						$image = '';
						if($post->preview_image) {
						$image = 'storage/'. $post->preview_image;
						} else {
						$image = 'storage/images/'. 'no_cart.png';
						}
						@endphp
						<div class="blog-img-text bg-white rounded blog-standard">
							<div class="blog-img mb-4">
								<img src="{{ asset($image) }}" style="object-fit:cover ;max-height:420px;width:100%;" alt="">
							</div>
							<div class="blog-text-title">
								<h4 class="mt-0 title"><a href="#"> {{ $post->title }} </a>
								</h4>
								<ul class="list-inline unstyled meta mb-0 mt-3">
									<li class="list-inline-item">28 February 2020</li>
								</ul>
								<p class="mt-3 mb-0"> {!! $post->content  !!} </p>
								<div class="br-more mt-3">
									<a href="{{route('main.show', $post->id)}}">Посмотреть</a>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
				<!-- /blog-post-content -->
				<div class="col-md-4">
					<div class="blog-side-bar">
						<div class="widget bg-white rounded shadow-dark">
							<h3 class="widget-header">Recent Posts</h3>
							<ul>

								@foreach ($categories as $category)
								<li> <a href="{{route('category.post.index', $category->id)}}">{{ $category->title }}</a></li>
								@endforeach


							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

@endsection