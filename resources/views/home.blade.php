@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Menus') }}</div>

                <div class="card-body">
                    <div class="row">
                        @foreach($menus as $menu)
                            <div class="col-md-4 text-center">
                                <img src="{{ asset($menu->gambar) }}" alt="{{ $menu->name }}" class="img-fluid" style="height: 200px; width: auto;">
                                <p>{{ $menu->name }}</p>
                            </div>
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    <div class="d-flex justify-content-center mt-3">
                        <ul class="pagination pagination-sm">
                            {{ $menus->links('pagination::bootstrap-4') }}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Banner') }}</div>

                <div class="card-body">
                    <img src="{{ asset('storage/images/5800_8_01.jpg') }}" alt="" style="width: 100%">
                </div>
                <div class="container">
                    <a href="{{ route('daftarmenu') }}">See All Menus</a>
                </div>
                <div class="container">
                    <a href="{{ route('daftarRest') }}">See All Restaurant</a>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection
