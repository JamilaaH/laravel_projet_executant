<x-app-layout>
    {{-- <x-slot name="header">
        @include('layouts.navigation')
    </x-slot> --}}

    <div class="container">
        <h2>Ajouter une catégorie</h2>
        <form action={{route('categorie.store')}} method="post">
            @csrf
            <div class="form-group">
                <label for="nom">Catégorie : </label>
                <input type="text" name="nom" id="nom" class="form-control @error('nom') is-invalid @enderror">
                @error('nom')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </div>



</x-app-layout>
