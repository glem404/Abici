<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Nombre') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-label for="apellidos" value="{{ __('Apellido') }}" />
                <x-input id="apellidos" class="block mt-1 w-full" type="text" name="apellidos" :value="old('apellidos')" required  autocomplete="apellidos" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Correo') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="TipoDocumento" value="{{ __('Tipo de Documento') }}" />
                <select  id="TipoDocumento"  class="block mt-1 w-full" name="TipoDocumento" required>
                    <option value="CC">Cedula de Ciudadania</option>
                    <option value="TI">Targeta de Identidad</option>
                </select>
                
            </div>

            <div class="mt-4">
                <x-label for="NumDocumento" value="{{ __('Número de documento') }}" />
                <x-input id="NumDocumento" class="block mt-1 w-full" type="Vachar" name="NumDocumento" required  />
            </div>

            <div class="mt-4">
                <x-label for="Telefono" value="{{ __('Teléfono') }}" />
                <x-input id="Telefono" class="block mt-1 w-full" type="varcahar" name="Teléfono" required  />
            </div>

            <div class="mt-4">
                <x-label for="Direccion" value="{{ __('Dirección') }}" />
                <x-input id="Direccion" class="block mt-1 w-full" type="varchar" name="Direccion" required  />
            </div>

            <div class="mt-4">
                <x-label for="FechaNacimiento" value="{{ __('Fecha de Nacimiento') }}" />
                <x-input id="FechaNacimiento" class="block mt-1 w-full" type="date" name="FechaNacimiento" required  />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Contraseña') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirmar Contraseña') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Ya Estas Registrado?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Registrarse') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
