<x-app-layout>

    <div class="container">
        @dump($user)
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form action={{route('user.update', $user)}} method="post" class="mx-auto">
            @csrf
            @method('PUT')
            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="Auth::user()->nom" required autofocus />
            </div>

            
            <!-- Prenom -->
            <div class="mt-4">
                <x-label for="prenom" :value="__('Prenom')" />
                
                <x-input id="prenom" class="block mt-1 w-full" type="text" name="prenom" :value="Auth::user()->prenom" required />
            </div>
            
            <!-- Age -->
            <div class="mt-4">
                <x-label for="age" :value="__('Age')" />
                
                <x-input id="age" class="block mt-1 w-full" type="text" name="age" :value="Auth::user()->age" required />
            </div>

            <!-- avatar -->
            <div class="mt-4">
                <x-label for="avatar" :value="__('Avatar')" />
                <select class="form-control mt-1 block w-full" name="avatar">
                    @foreach ($avatars as $avatar)
                    <option value="{{$avatar->id}}">{{$avatar->nom}}</option>
                        
                    @endforeach
                </select>
            </div>

            
            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="Auth::user()->email" required />
            </div>
            
            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Ancien password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Valider') }}
                </x-button>
            </div>


        </form>
    </div>
</x-app-layout>