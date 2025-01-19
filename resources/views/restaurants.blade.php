@extends('layouts.app')
@section('content')
<div class="container">
    @foreach ($restaurant as $rest)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $rest->name }}</h5>
                <h5 class="card-title">{{ $rest->email }}</h5>
                <h5 class="card-title">{{ $rest->alamat }}</h5>
                <h5 class="card-title">{{ $rest->Telp }}</h5>
            </div>
        </div>
        <div class="py-3"></div>
    @endforeach
    <div class="d-flex justify-content-center mt-3">
        <ul class="pagination pagination-sm">
            {{ $restaurant->links('pagination::bootstrap-4') }}
        </ul>
    </div>
</div>

<div class="container">
    <form class="d-flex" role="search" method="GET" action="/searchRestaurant">
        <input class="form-control me-2" type="search" placeholder="Search Restaurant" aria-label="Search" name="query">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
</div>
@endsection
