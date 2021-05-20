<x-app-layout>
    {{-- <x-slot name="header">
        @include('layouts.navigation')
    </x-slot> --}}

    <div class="container">
        <h2>Ajouter une image</h2>
        <form action={{route('galerie.store')}} method="post"  enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="url">Ajouter une image</label>
                <input type="file" name="url" id="url" class="form-control-file @error('url') is-invalid @enderror">
                @error('url')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="categorie">Catégorie : </label>
                <select name="categorie" id="categorie" class="form-control @error('categorie') is-invalid @enderror">
                    @foreach ($categories as $categorie)
                        <option value={{$categorie->id}}>{{$categorie->nom}}</option>
                        
                    @endforeach
                </select>
                @error('categorie')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </div>



</x-app-layout>
