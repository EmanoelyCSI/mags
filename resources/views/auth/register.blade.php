<x-guest-layout>
    <x-auth-card>
         <x-slot name="logo"> 
            <a href="">
                <!--<x-application-logo class="w-20 h-20 fill-current" />  -->
            </a>
         </x-slot> 

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nome')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Cell phone -->
            <div class="mt-4">
                <x-label for="cell" :value="__('Celular')" />

                <x-input id="cell" class="block mt-1 w-full" type="tel" name="cell" :value="old('cell')" required />
            </div>

             <!-- Telephone -->
             <div class="mt-4">
                <x-label for="tel" :value="__('Telefone')" />

                <x-input id="tel" class="block mt-1 w-full" type="tel" name="tel" :value="old('tel')" required />
            </div>


            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Senha')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirmar senha')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div>
                <select class="form-select block mt-1 w-full" aria-label="profile" name="profile" id="profile">
                    <option selected>Defina o perfil de usuário</option>
                    <option value="proprietario" >Proprietário</option>
                    <option value="gerente">Gerente</option>
                </select>
            </div>

             <!-- <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a> -->

                <x-button class="ml-4">
                    {{ __('Salvar') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
