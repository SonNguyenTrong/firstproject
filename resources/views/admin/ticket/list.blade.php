@extends('admin.master')
@section('content')
	<h1 class="page-header">List Tickets</h1>
	<a href="{{ action('TicketController@create') }}" >
           <button type="button" class="btn btn-success">Create</button>
    </a>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
	<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr>
            <th>Title</th>
            <th>Content</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    	@foreach($listTicket as $ticket)
		<tr class="gradeA even" role="row">
            <td class="sorting_1">{{ $ticket->title }}</td>
            <td>{{ $ticket->content }}</td>
            @if($ticket->status == 1)
                <td>Approved</td>
            @else
                <td>Pending</td>
            @endif
            <td>
            	<a href="{{ route('editTicket', $ticket->id) }}" >
            	<button type="button" class="btn btn-success">Edit</button>
            	</a>
            	<form method="POST" action = {{ route('tickets.destroy', [$ticket->id]) }}>
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                	<button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger">
                		Delete
                    </button> 	
                </form>
                <a href="{{ route('showTicket', $ticket->id)}}">
                    <button type="button" class="btn btn-primary">Show</button>
                </a>
            </td>	
        </tr>
		@endforeach
    </tbody>
</table>
		{{$listTicket->links()}}
@endsection
