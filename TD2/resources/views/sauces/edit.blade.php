@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Edit Sauce</h2>
    <form action="{{ route('sauces.update', $sauce->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="userId" class="form-label">Identifiant utilisateur:</label>
            <input type="text" name="userId" id="userId" class="form-control" value="{{ $sauce->userId }}" required>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Nom:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $sauce->name }}" required>
        </div>
        <div class="mb-3">
            <label for="manufacturer" class="form-label">Fabricant:</label>
            <input type="text" name="manufacturer" id="manufacturer" class="form-control" value="{{ $sauce->manufacturer }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea name="description" id="description" class="form-control" required>{{ $sauce->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="mainPepper" class="form-label">Ingrédient épicé principal:</label>
            <input type="text" name="mainPepper" id="mainPepper" class="form-control" value="{{ $sauce->mainPepper }}" required>
        </div>
        <div class="mb-3">
            <label for="imageUrl" class="form-label">URL de l'image:</label>
            <input type="url" name="imageUrl" id="imageUrl" class="form-control" value="{{ $sauce->imageUrl }}" required>
        </div>
        <div class="mb-3">
            <label for="heat" class="form-label">Chaleur (1 à 10):</label>
            <input type="number" name="heat" id="heat" min="1" max="10" class="form-control" value="{{ $sauce->heat }}" required>
        </div>
        <button type="submit" class="btn btn-warning">Mettre à jour</button>
    </form>
</div>
@endsection
