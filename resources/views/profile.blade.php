@extends('layouts.app')
@section('content')
    <form method="POST" action="{{ route('editprofile', ['id'=>$user->id]) }}">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{ $user->name }}" name="name">
      </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{ $user->email }}" name="email">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">No.Telp</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{ $user->Telp }}" name="Telp">
      </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <a href="{{ route('changepassword') }}">Change Password</a>
@endsection
