@extends('admin.master')
@section('content')
@foreach($errors->all() as $error)
<p class="alert alert-danger">{{ $error }}</p>
@endforeach()
<form method="POST" action = {{route('updateTicket',$ticket->id) }}>
    <div class="form-group">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
        <label for="exampleInputEmail1">Title</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Title" name="title" value ="{{$ticket->title}}">
    </div>
    <div class="form-group">
        <label for="exampleInputUsername1">Content</label>
        <textarea type="text" class="form-control" id="exampleInputUsername1" name="content" placeholder="Content">{{$ticket->content}}</textarea>
    </div>
    <div class="form-group">
        <label for="exampleInputUsername1">Status</label>
    <select name="status" class="form-control">
      <option value="1" selected="true">Answered</option>
      <option value="2">Pending</option>
    </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection