@extends('admin.master')

@section('content')
	<h1 class="page-header">List User</h1>
	<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
    <thead>
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    </thead>
    <tbody>
    	@foreach($listUser as $user)
		<tr class="gradeA even" role="row">
            <td class="sorting_1">{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
            	<a href="{{ action('UserController@edit' , ['id' => $user->id]) }}" >
            	<button type="button" class="btn btn-success">Edit</button>
            	</a>
                <form method="POST" action = {{ route('users.destroy', [$user->id]) }}>
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                	<a href="">
                	   <button onclick="return confirm_delete()" type="submit" class="btn btn-danger"">Delete
                       </button>
                	</a>
                </form>
        	</td>
        </tr>
        @endforeach
    </tbody>
</table>
<script type="text/javascript">
    function confirm_delete() {
        return confirm('are you sure?');
    }
</script>
@endsection