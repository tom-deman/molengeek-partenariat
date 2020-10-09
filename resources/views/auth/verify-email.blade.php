<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Merci pour votre inscription! Avant de commencer, pouvez-vous verifier votre adresse email en cliquant sur le lien que l\'on vient de vous envoyer par email ? Si vous n\'avez pas reçu d\'email, nous vous en renverrons un avec plaisir.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('Un nouveau lien de verification a été envoyé à l\'adresse email que vous avez fourni durant votre inscription.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-jet-button type="submit">
                        {{ __('Renvoyez un mail de validation.') }}
                    </x-jet-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Se déconnecter') }}
                </button>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
