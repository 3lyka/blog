@extends('layouts.pblog')
@section('content')

<main class="content">
	<!-- Blog Page -->
	<section id="blog-page-area" class="blog-page-section">
		<div class="container">
			<div class="row">
				<div class="col-md-8">

					<div class="blog-single blog-standard shadow-dark">
						<h1 class="my-0">{{ $post->title }}</h1>
						<ul class="list-inline unstyled meta mb-0 mt-3">
							<li class="list-inline-item"> {{ $date->day }} </li>
							<li class="list-inline-item">{{ $date->translatedFormat('F') }} </li>
							<li class="list-inline-item">{{ $date->format('H:i') }} </li>
							<li class="list-inline-item"> {{ $post->comments->count() }} комментариев </li>
						</ul>
						@php
						$image = '';
						if($post->main_image) {
						$image = 'storage/'. $post->main_image;
						} else {
						$image = 'storage/images/'. 'no_cart.png';
						}
						@endphp
						<div class="thumb-wrapper mt-4"><img src="{{ asset($image) }}" alt=""></div>
						<article>
							<div class="clearfix my-4">
								{!! $post->content !!}
							</div>
						</article>

						<section>
							<div class="comment-area-section clearfix">
								<h3>{{ $post->comments->count() }} Comment Found</h3>
								<div class="comment-inner-box mt-0">
									@foreach ($post->comments as $comment)
									<div class="comment-author-text">
										<h4><a href="{{route('personal.comment.index')}}">{{ $comment->user->name }}</a></h4>
										<span>{{ $date->day }}
											{{ $date->translatedFormat('F') }}
											{{ $date->format('H:i') }}</span>
										<p>{{$comment->message}}</p>
									</div>
									@endforeach

								</div>
							</div>
							@auth
							<div class="comment-respond">
								<h2 class="comment-reply-title">Оставить комментарий</h2>
								<form action="{{ route('main.comment.store',$post->id) }}" method="post">
									@csrf
									<textarea name="message" cols="60" rows="8" maxlength="65525" required="required"></textarea>
									<input type="submit" value="Отправить">
								</form>
							</div>
						</section>
						@endauth

					</div>
				</div>
				<div class="col-md-4">
					<div class="blog-side-bar">
						<div class="widget bg-white rounded shadow-dark">
							<h3 class="widget-header">Категории</h3>
							<ul>
								<li class="cat-item cat-item-4"><a href="#">{{ $post->category->title }}</a></li>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

@endsection