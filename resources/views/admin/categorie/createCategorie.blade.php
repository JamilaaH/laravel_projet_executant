<x-app-layout>
    {{-- <x-slot name="header">
        @include('layouts.navigation')
    </x-slot> --}}

    <div class="container">
        <h2>Ajouter une catégorie</h2>
        <form action={{route('categorie.store')}} method="post">
            @csrf
            <div class="form-group">
                <label for="categorie">Catégorie : </label>
                <input type="text" name="categorie" id="categorie">
                @error('categorie')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </div>



</x-app-layout>
