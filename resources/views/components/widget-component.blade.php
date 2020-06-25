<div {{$attributes}}>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
    <span>{{$title}}</span>
    <span>{{$email}}</span>
    @foreach ($users('Cao Thanh Đẳng') as $user)
    	<span>{{ $user }}</span>	
    @endforeach


</div>