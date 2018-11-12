@extends('admin.master')
@section('content')
	<h1>Edit User</h1>
<form method="POST" action=" {{route('users.update' , $user->id)}}">
  <div class="form-group">
  	{{csrf_field()}}
  	{{ method_field('PUT') }}
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter email" value = "{{ $user->email }}">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputUsername1">Username</label>
    <input type="Username" class="form-control" id="exampleInputUsername1" name="name" placeholder="Username" value = "{{ $user->name }}">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection	