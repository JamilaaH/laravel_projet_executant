<x-app-layout>
    {{-- <x-slot name="header">
        @include('layouts.navigation')
    </x-slot> --}}

    <div class="container">
        <h2>Votre profil Utilisateur</h2>
        <div class="row">
                <div class="col-4">
                        <div class="card">
                                <div class="card-body">
                                        <h4>{{Auth::user()->nom}} {{Auth::user()->prenom}}</h4>
                                        <img src={{asset('img/'.Auth::user()->avatar->url)}} alt="photo de profil" class="w-50 mb-3">
                                        <h6>{{Auth::user()->role->nom}}</h6>
                                </div>
                        </div>
                </div>
                <div class="col-8">
                        <div class="card">
                                <div class="card-header">
                                        <h3>Description</h3>
                                </div>
                                <div class="card-body">
                                        <div class="row">
                                                <div class="col-6">
                                                        <div class="card bg-light my-2 ">
                                                                <p><span class="font-weight-bold">Adresse mail</span> : {{Auth::user()->email}} </p>
                                                        </div>
                                                </div>
                                                <div class="col-6">
                                                        <div class="card bg-light my-2 ">
                                                                <p><span class="font-weight-bold">Mot de passe</span> : ******** </p>
                                                        </div>
                                                </div>
                                                <div class="col-6">
                                                        <div class="card bg-light my-2 ">
                                                                <p><span class="font-weight-bold">Nom</span> : {{Auth::user()->nom}} </p>
                                                        </div>
                                                        <div class="card bg-light my-2">
                                                                <p><span class="font-weight-bold">Age</span> : {{Auth::user()->age}} ans </p>
                                                        </div>
                                                </div>
                                                <div class="col-6">
                                                        <div class="card bg-light my-2">
                                                                <p><span class="font-weight-bold">Prénom</span> : {{Auth::user()->prenom}} </p>
                                                        </div>

                                                </div>
                                        </div>
                                </div>
                                <div class="card-body">
                                        <a href= {{route('user.edit', Auth::user())}} class="btn btn-success" >edit</a>
                                </div>
                        </div>
                </div>                            
        </div>
</div>



</x-app-layout>
