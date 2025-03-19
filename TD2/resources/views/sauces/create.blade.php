@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Add a New Sauce</h2>
    <form action="{{ route('sauces.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="userId" class="form-label">Identifiant utilisateur:</label>
            <input type="text" name="userId" id="userId" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Nom:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="manufacturer" class="form-label">Fabricant:</label>
            <input type="text" name="manufacturer" id="manufacturer" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea name="description" id="description" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label for="mainPepper" class="form-label">Ingrédient épicé principal:</label>
            <input type="text" name="mainPepper" id="mainPepper" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="imageUrl" class="form-label">URL de l'image:</label>
            <input type="url" name="imageUrl" id="imageUrl" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="heat" class="form-label">Chaleur (1 à 10):</label>
            <input type="number" name="heat" id="heat" min="1" max="10" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Créer</button>
    </form>
</div>
@endsection
