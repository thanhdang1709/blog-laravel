@if($message = Session::get('success'))
  <div class="alert alert-success alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button>
       <strong>{{ $message }}</strong>
</div>
@endif
@if($message = Session::get('error'))
  <div class="alert alert-warning alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button>
       <strong>{{ $message }}</strong>
</div>
@endif
@if($message = Session::get('errors'))
<div class="alert alert-danger alert-block">
<button type="button" class="close" data-dismiss="alert">×</button>
@foreach($message as $key=>$row)
       <strong>{{ $row[0]['error'] }}</strong><br>
@endforeach

</div>
@endif