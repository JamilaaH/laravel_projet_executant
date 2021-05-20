<x-app-layout>
    {{-- <x-slot name="header">
        @include('layouts.navigation')
    </x-slot> --}}

    <div class="container">
        <h2>Nouveau avatar</h2>
        <form action={{route('avatar.store')}} method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nom">Nom de l'image</label>
                <input type="text" name="nom" class="form-control" value="{{old('nom')}}">
            </div>
            <div class="form-group">
                <input type="file" class="form-control-file" name="avatar">
            </div>
            <button class="btn btn-primary" type="submit"> Valider</button>
        </form>
</div>



</x-app-layout>
