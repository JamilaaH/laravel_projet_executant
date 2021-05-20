<x-app-layout>
    {{-- <x-slot name="header">
        @include('layouts.navigation')
    </x-slot> --}}

    <div class="container">
        <div class="flex align-items-center ">
            <h2>Liste des avatars</h2>
            <a href={{route('avatar.create')}} class="btn btn-primary ml-10">+</a>

        </div>
        <div class="row">
            @foreach ($avatars as $avatar)
                <div class="col-4 mb-2">
                    <div class="card" style="width: 18rem;">
                        <img src={{asset('img/'. $avatar->url)}} class="card-img-top" alt="...">
                        <div class="card-body d-flex space-x-1">
                            <a href="" class="btn btn-primary">edit</a>
                            <a href="" class="btn btn-success">show</a>
                            <form action={{route('avatar.destroy', $avatar)}} method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">del</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



</x-app-layout>
