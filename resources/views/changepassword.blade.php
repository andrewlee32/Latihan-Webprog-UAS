@extends('layouts.app')
@section('content')
<form action="{{ route('updatepassword', ['id'=>Auth::user()->id]) }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="currentPassword" class="form-label">Current Password</label>
        <input type="password" class="form-control" id="currentPassword" name="password">
    </div>
    <div class="mb-3">
        <label for="newPassword" class="form-label">Enter New Password</label>
        <input type="password" class="form-control" id="newPassword" name="newpassword">
    </div>
    <div class="mb-3">
        <label for="confirmPassword" class="form-label">Confirm New Password</label>
        <input type="password" class="form-control" id="confirmPassword" name="new2password">
    </div>
    <button type="submit" class="btn btn-primary">Update Password</button>
</form>

@endsection
