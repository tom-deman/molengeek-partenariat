<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div x-data="{ recovery: false }">
            <div class="mb-4 text-sm text-gray-600" x-show="! recovery">
                {{ __('Veuillez confirmez l\'acces à votre compte en entrant le code d\'authentification que vous avez reçu dans votre application d\'authentification.') }}
            </div>

            <div class="mb-4 text-sm text-gray-600" x-show="recovery">
                {{ __('Veuillez confirmez l\'acces a votre compte en entrant un de vos code de récupération.') }}
            </div>

            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="/two-factor-challenge">
                @csrf

                <div class="mt-4" x-show="! recovery">
                    <x-jet-label value="{{ __('Code') }}" />
                    <x-jet-input class="block mt-1 w-full" type="text" name="code" autofocus x-ref="code" autocomplete="one-time-code" />
                </div>

                <div class="mt-4" x-show="recovery">
                    <x-jet-label value="{{ __('Code de récupération') }}" />
                    <x-jet-input class="block mt-1 w-full" type="text" name="recovery_code" x-ref="recovery_code" autocomplete="one-time-code" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button type="button" class="text-sm text-gray-600 hover:text-gray-900 underline cursor-pointer"
                                    x-show="! recovery"
                                    x-on:click="
                                        recovery = true;
                                        $nextTick(() => { $refs.recovery_code.focus() })
                                    ">
                        {{ __('Utiliser un code de récuperation.') }}
                    </button>

                    <button type="button" class="text-sm text-gray-600 hover:text-gray-900 underline cursor-pointer"
                                    x-show="recovery"
                                    x-on:click="
                                        recovery = false;
                                        $nextTick(() => { $refs.code.focus() })
                                    ">
                        {{ __('Utiliser un code d\'authentification') }}
                    </button>

                    <x-jet-button class="ml-4">
                        {{ __('Se connecter') }}
                    </x-jet-button>
                </div>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
