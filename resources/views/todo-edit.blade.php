@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10">
		<h3>Todo/Edit</h3>
			<form action="{{route('postEditRoute',$data->id)}}" method="POST" class="form-inline">
			<input type="hidden" name="_token" value="{{csrf_token()}}">

			
			<p>
				<input type="text" name="workName" class="form-control" value="{{$data->work}}">
				<input type="text" name="status" class="form-control" value="{{$data->status}}">
			    <span><input type="submit" class="btn btn-success" value="Update"></span>
			</p>
				
			</form>

			
		</div>
	</div>
</div>
@endsection
