@extends('layouts.app')

@section('content')
<div class="container">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset($menu->gambar) }}" class="card-img-top" alt="{{ $menu->name }}">
            <div class="card-body">
                <h5 class="card-title">{{ $menu->name }}</h5>
                <p>{{ $menu->desc }}</p>
                <h5 class="card-title">{{ $menu->price }}</h5>
            </div>
        </div>
        <div class="py-3"></div>
</div>
@endsection
