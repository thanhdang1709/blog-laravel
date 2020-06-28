@extends('front.layouts.app')

@section('title')
{{$post->title}}
@endsection
@section('meta')
<meta name="description" content="{{$post->summary}}">
<meta name="keywords" content="{{$post->summary}}">
<meta property="og:title" content="{{$post->title}}" />
<meta property="og:type" content="article" />
<meta property="og:url" content="{{\config('app.url')}}/post/{{$post->slug}}" />
<meta property="og:image" content="{{$post->thumbnail}}" />
<meta property="og:description" content="{{$post->summary}}" />
@endsection
@section('content')
<div class="row pt-md-4" style="padding: 0 5px">

		<h1 class="mb-3">{{$post->title}}</h1>
		{!!$post->content!!}
	

</div>
<div class="row">
	<div class="col">
		
	</div>
</div>
@endsection