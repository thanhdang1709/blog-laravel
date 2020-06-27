@extends('front.layouts.app')
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