@extends('layouts.app')
@section('content')
    <div class="container">
        @foreach ($menus as $menu)
            <div class="card" style="width: 18rem;">
                <img src="{{ asset($menu->gambar) }}" class="card-img-top" alt="{{ $menu->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $menu->name }}</h5>
                    <div>
                        <a onclick="window.location.href='{{ route('detailmenuRedirect', ['id' => $menu->menu_id]) }}'" class="btn btn-primary">Check Details</a>
                        <button class="btn btn-outline-success" type="submit">+</button>
                    </div>
                </div>
            </div>
            <div class="py-3"></div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center mt-3">
        <ul class="pagination pagination-sm">
            {{ $menus->links('pagination::bootstrap-4') }}
        </ul>
    </div>
    <div class="container">
        <form class="d-flex" role="search" method="GET" action="/searchMenu">
            <input class="form-control me-2" type="search" placeholder="Search menu" aria-label="Search" name="query">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
@endsection
