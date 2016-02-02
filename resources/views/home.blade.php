@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10">
			<form action="" method="POST" class="form-inline">
			<input type="hidden" name="_token" value="{{csrf_token()}}">

			<p>Work name</p>
			<p>
				<input type="text" class="form-control" name="workName" placeholder="Enter a task name.">
			    <span><input type="submit" class="btn btn-success" value="Save"></span>
			</p>
				
			</form>

			<table class="table">
			<tr>
			    <td>SL</td>
				<td>Task Name</td>
				<td>Status</td>
				<td>Action</td>
			</tr>

			<?php $i=1; ?>
			@foreach($data as $row)
			<tr>
            <td>{{$i++}}</td>
            <td>{{$row->work}}</td>
            <td>{{$row->status}}</td>
            <td>
            	<a href="{{route('getEditRoute',$row->id)}}" class="btn btn-warning">Edit</a>
                
                <form action="{{route('deleteTask', $row->id) }}" method="POST" style="display: inline" onsubmit="
                if(confirm('Delete!Are you sure?')) { return true } else {return false};" >
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                 <button type="submit" class="btn btn-danger">Delete</button>

                </form>

                
            </td>
            </tr>
			@endforeach
				
			</table>
		</div>
	</div>
</div>
@endsection
