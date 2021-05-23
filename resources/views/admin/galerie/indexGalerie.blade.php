<x-app-layout>
    {{-- <x-slot name="header">
        @include('layouts.navigation')
    </x-slot> --}}

    <div class="container">
        <div class="flex align-items-center ">
            <h2>Galerie</h2>

        </div>
        <div class="row">
            @foreach ($galeries as $galerie)
                <div class="col-4 mb-2">
                    <div class="card">
                        <img src={{asset('img/galerie/'. $galerie->url)}} class="card-img-top" alt="...">
                        <div class="card-body">
                            <p><span class="font-weight-bold">Catégorie : </span>{{$galerie->categorie->nom}}</p>
                        </div>
                        @admin
                        <div class="card-body d-flex space-x-1">
                            <a href="" class="btn btn-primary">edit</a>
                            <a href="" class="btn btn-success">show</a>
                            <form action="" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">del</button>
                            </form>
                        </div>
                        @endadmin
                        @member
                        <div class="card-body">
                            <a href={{route('galerie.download', $galerie->id)}} class="btn btn-warning">Download</a>
                        </div>
                        @endmember
                    </div>
                </div>
            @endforeach
        </div>
    </div>



</x-app-layout>
