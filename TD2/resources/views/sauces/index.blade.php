@extends('layouts.app')

@section('content')
    <h2 class="text-center mb-4">The Sauces</h2>

    <div class="row">
        @foreach ($sauces as $sauce)
            <div class="col-md-3 mb-4">
                <div class="card sauce-card">
                    <img src="{{ $sauce->imageUrl }}" class="card-img-top" alt="{{ $sauce->name }}">
                    <div class="card-body text-center">
                        <h5 class="card-title text-uppercase">{{ $sauce->name }}</h5>
                        <p class="card-text">Heat: {{ $sauce->heat }}/10</p>
                        <a href="{{ route('sauces.show', $sauce->id) }}" class="btn btn-primary">Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
