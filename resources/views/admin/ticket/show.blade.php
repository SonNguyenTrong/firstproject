@extends('admin.master')
@section('content')
    <h1 class="page-header">Tickets</h1>
    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>

            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr class="gradeA even" role="row">
                <td class="sorting_1">{{ $ticket->title }}</td>
                <td>{{ $ticket->content }}</td>
                @if($ticket->status == 1)
                    <td>Approved</td>
                @else
                    <td>Pending</td>
                @endif
            </tr>
        </tbody>
    </table>
    <div class="comment-form">
        @foreach($errors->all() as $error)
            <p class="alert alert-danger">{{ $error }}</p>
        @endforeach()
        <form action="{{ route('newComment') }}" method="POST" class="comment-form">
        {!! csrf_field() !!}
        {{ method_field('POST') }}
            <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                <textarea rows="10" id="content" class="form-control" name="content" placeholder="content About Your Ticket Here!"></textarea>
                <input type="hidden" name="post_id" value="{{ $ticket->id }}">
                @if ($errors->has('content'))
                    <span class="help-block">
                        <strong>{{ $errors->first('content') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </form>
    </div>



@endsection
