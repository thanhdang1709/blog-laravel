@extends('front.layouts.app')
@section('content')

<div class="row pt-md-4">
	
	@foreach ($posts as $post)
		<div class="col-md-12">
		<div class="blog-entry ftco-animate d-md-flex">
			<a href="p/{{$post->slug}}" class="img img-2" style="background-image: url({{$post->thumbnail??'/assets/front/images/image_1.jpg'}});"></a>
			<div class="text text-2 pl-md-4">
				<h3 class="mb-2"><a href="/post/{{$post->slug}}">{{ Str::limit($post->title, 70, $end='...') }}</a></h3>
				@if (empty($post))
					<h3 class="mb-2">Không có bài viết trong danh mục này.</h3>
				@endif
				<div class="meta-wrap">
					<p class="meta">
						<span><i class="icon-calendar mr-2"></i>{{date('d-m-Y',strtotime($post->created_at))}}</span>
						@foreach ($post->categories as $category)
							<span><a href="single.html"><i class="icon-folder-o mr-2"></i>{{$category->name}}</a></span>
						@endforeach
						
						<span><i class="icon-comment2 mr-2"></i>{{$post->get_comments()->count()}} Bình luận</span>
					</p>
				</div>
				<p class="mb-4">{{ Str::limit($post->summary, 100, $end='...') }}</p>
				<p><a href="/post/{{$post->slug}}" class="btn-custom">Đọc tiếp <span class="ion-ios-arrow-forward"></span></a></p>
			</div>
		</div>
	</div>
	@endforeach
	

</div>
{{-- <div class="row">
	<div class="col">
		{{ $posts->links('pagination.bootstrap-4')}}
	</div>
</div> --}}
@endsection