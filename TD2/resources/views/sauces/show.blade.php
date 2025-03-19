@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mb-4">
        <div class="card-header">
            <h2 class="mb-0">{{ $sauce->name }}</h2>
        </div>
        <div class="card-body text-center">
            <img src="{{ $sauce->imageUrl }}" alt="{{ $sauce->name }}" class="img-fluid mb-3" style="max-height: 300px;">
            <p><strong>Identifiant utilisateur :</strong> {{ $sauce->userId }}</p>
            <p><strong>Fabricant :</strong> {{ $sauce->manufacturer }}</p>
            <p><strong>Description :</strong> {{ $sauce->description }}</p>
            <p><strong>Ingrédient épicé principal :</strong> {{ $sauce->mainPepper }}</p>
            <p><strong>Chaleur :</strong> {{ $sauce->heat }}/10</p>
            <p><strong>Likes :</strong> {{ $sauce->likes }}</p>
            <p><strong>Dislikes :</strong> {{ $sauce->dislikes }}</p>
        </div>
    </div>
    <a href="{{ route('sauces.edit', $sauce->id) }}" class="btn btn-warning">Modifier la sauce</a>
    <a href="{{ route('sauces.index') }}" class="btn btn-secondary">Retour à la liste</a>
</div>
@endsection
