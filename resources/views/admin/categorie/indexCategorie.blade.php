<x-app-layout>
    <div class="container">
        <h2>Liste des catégories</h2>
        <a href={{route('categorie.create')}} class="btn btn-primary">+</a>
        <div class="grid grid-cols-3 gap-4">
            @foreach ($categories as $categorie)
                <div class="card bg-blue-200">
                    <div class="card-body">
                        <p class="text-lg"><span class="font-weight-bold">Catégorie : </span>{{$categorie->nom}}</p>
                        <div class="flex space-x-5">
                            <a href={{route('categorie.edit', $categorie->id)}} class="btn btn-primary">Edit</a>
                            <form action={{route('categorie.destroy', $categorie)}} method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Del</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</x-app-layout>