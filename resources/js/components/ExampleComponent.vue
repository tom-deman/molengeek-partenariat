<template>
    <!-- <form action=""> -->
    <div class="container mx-auto mt-40">
        <div class="p-10 bg-gray-100 rounded relative">
            <div class="mx-4 p-4">
                <div class="flex items-center">
                    <div
                        class="flex items-center relative"
                        :class="step === 0 ? 'text-gray-100' : 'text-teal-600'"
                    >
                        <div
                            class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-teal-600"
                            :class="step === 0 ? 'bg-teal-600' : ''"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="100%"
                                height="100%"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="feather feather-bookmark"
                            >
                                <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                            </svg>
                        </div>
                        <div
                            class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase"
                            :class="step ===  0 ? 'text-teal-600' : 'text-gray-600'"
                        >
                            Step 1
                        </div>
                    </div>
                    <div
                        class="flex-auto border-t-2 transition duration-500 ease-in-out"
                        :class="step > 0 ? ' border-teal-600' : 'border-gray-300'"
                    >
                    </div>
                    <div
                        class="flex items-center relative"
                        :class="stepOneClass"
                    >
                        <div
                            v-if="step === 0"
                            class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-gray-300"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="100%"
                                height="100%"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="feather feather-user-plus"
                            >
                                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="8.5" cy="7" r="4"></circle>
                                <line x1="20" y1="8" x2="20" y2="14"></line>
                                <line x1="23" y1="11" x2="17" y2="11"></line>
                            </svg>
                        </div>
                        <div
                            v-else-if="step === 1"
                            class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 bg-teal-600 border-teal-600"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="100%"
                                height="100%"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="feather feather-user-plus"
                            >
                                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="8.5" cy="7" r="4"></circle>
                                <line x1="20" y1="8" x2="20" y2="14"></line>
                                <line x1="23" y1="11" x2="17" y2="11"></line>
                            </svg>
                        </div>
                        <div
                            v-else-if="step > 1"
                            class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-teal-600"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="100%"
                                height="100%"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="feather feather-user-plus"
                            >
                                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="8.5" cy="7" r="4"></circle>
                                <line x1="20" y1="8" x2="20" y2="14"></line>
                                <line x1="23" y1="11" x2="17" y2="11"></line>
                            </svg>
                        </div>
                        <div
                            class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-gray-600"
                            :class="step ===  1 ? 'text-teal-600' : 'text-gray-600'"
                        >
                            Step 2
                        </div>
                    </div>
                    <div
                        class="flex-auto border-t-2 transition duration-500 ease-in-out border-gray-300"
                        :class="step > 1 ? ' border-teal-600' : 'border-gray-300'"
                    >
                    </div>
                    <div
                        class="flex items-center relative"
                        :class="stepTwoClass"
                    >
                        <div
                            class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-gray-300"
                            v-if="step < 2"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="100%"
                                height="100%"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="feather feather-mail"
                            >
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                        </div>
                        <div
                            class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 bg-teal-600 border-teal-600"
                            v-if="step === 2"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="100%"
                                height="100%"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="feather feather-mail"
                            >
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                        </div>
                        <div
                            class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-teal-600"
                            v-if="step > 2"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="100%"
                                height="100%"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="feather feather-mail"
                            >
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                        </div>
                        <div
                            class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-gray-500"
                            :class="step ===  2 ? 'text-teal-600' : 'text-gray-600'"
                        >
                            Step 3
                        </div>
                    </div>
                    <div
                        class="flex-auto border-t-2 transition duration-500 ease-in-out border-gray-300"
                        :class="step > 2 ? ' border-teal-600' : 'border-gray-300'"
                    >
                    </div>
                    <div
                        class="flex items-center relative"
                        :class="stepThreeClass"
                    >
                        <div
                            class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-gray-300"
                            v-if="step < 3"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="100%"
                                height="100%"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="feather feather-database"
                            >
                                <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                                <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                                <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                            </svg>
                        </div>
                        <div
                            class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 bg-teal-600 border-teal-600"
                            v-if="step === 3"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="100%"
                                height="100%"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="feather feather-database"
                            >
                                <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                                <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                                <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                            </svg>
                        </div>
                        <div
                            class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-gray-500"
                            :class="step ===  3 ? 'text-teal-600' : 'text-gray-600'"
                        >
                            Step 4
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-8 p-4">
                <div v-if="step === 0" class="h-auto sm:h-auto md:h-48 lg:h-48 xl:h-48">
                    <div class="font-bold text-gray-600 text-xs leading-8 uppercase h-6 mx-2 mt-3">
                        Nom complet
                    </div>
                    <div class="flex flex-col md:flex-row">
                        <div class="w-full flex-1 mx-2 svelte-1l8159u">
                            <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                                <input
                                    placeholder="Nom"
                                    class="p-1 px-2 appearance-none outline-none w-full text-gray-800"
                                    v-model="inputLastName"
                                    required
                                />
                            </div>
                        </div>
                        <div class="w-full flex-1 mx-2 svelte-1l8159u">
                            <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                                <input
                                    placeholder="Prénom"
                                    class="p-1 px-2 appearance-none outline-none w-full text-gray-800"
                                    v-model="inputFirstName"
                                    required
                                />
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row">
                        <div class="w-full mx-2 flex-1 svelte-1l8159u">
                            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">Date de naissance</div>
                            <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                                <input
                                    placeholder="Date de naissance"
                                    class="p-1 px-2 appearance-none outline-none w-full text-gray-800"
                                    v-model="inputBirthday"
                                    required
                                />
                            </div>
                        </div>
                        <div class="w-full mx-2 flex-1 svelte-1l8159u">
                            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">Profession</div>
                            <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                                <input
                                    placeholder="profession"
                                    class="p-1 px-2 appearance-none outline-none w-full text-gray-800"
                                    v-model="inputProfession"
                                    required
                                />
                            </div>
                        </div>
                    </div>
                </div>
                <div v-if="step === 1" class="h-auto sm:h-auto md:h-48 lg:h-48 xl:h-48">
                    <div class="w-full mx-2 flex-1 svelte-1l8159u">
                        <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">
                            Avez vous une entreprise ?
                        </div>
                        <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                            <select
                                name=""
                                id=""
                                class="p-1 px-2 appearance-none outline-none w-full text-gray-800"
                                v-model="company"
                                required
                            >
                                <option
                                    value=""
                                    disabled
                                >
                                    Veuillez faire un choix
                                </option>
                                <option value="yes">Oui</option>
                                <option value="no">Non</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div v-if="step === 2" class="h-auto sm:h-auto md:h-48 lg:h-48 xl:h-48">
                    <div class="w-full mx-2 flex-1 svelte-1l8159u">
                        <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">Nom de l'entreprise</div>
                        <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                            <input
                                placeholder="Nom entreprise"
                                class="p-1 px-2 appearance-none outline-none w-full text-gray-800"
                                v-model="inputCompany"
                                required
                            />
                        </div>
                    </div>
                </div>
                <div v-if="step === 3" class="h-auto sm:h-auto md:h-48 lg:h-48 xl:h-48">
                    <div class="w-full mx-2 flex-1 svelte-1l8159u">
                        <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">Comment avez-vous connu MolenGeek ?</div>
                        <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                            <input
                                placeholder="Réponse"
                                class="p-1 px-2 appearance-none outline-none w-full text-gray-800"
                                v-model="inputMolengeek"
                                required
                            />
                        </div>
                    </div>
                </div>
                <div class="flex p-2 mt-4">
                    <button
                        :class="step < 1 ? disabledClass : activeClass"
                        class="text-base hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer border duration-200 ease-in-out transition"
                        @click="decrementStep()"
                        :disabled="step < 1"
                    >
                        Précédent
                    </button>
                    <div class="flex-auto flex flex-row-reverse">
                        <button
                            :class="'text-base ml-2 hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer border duration-200 ease-in-out transition ' + nextStepClass"
                            :disabled="!valid"
                            @click="incrementStep()"
                        >
                            {{ step === 3 ? 'Valider' : 'Suivant'}}
                        </button>
                    </div>
                </div>
                <div class="flex items-center justify-end mt-4">
                    <a
                        class="underline text-sm text-gray-600 hover:text-gray-900"
                        href="/login"
                    >
                        Déjà inscrit ?
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- </form> -->

</template>

<script>
    export default {
        data: () => ({
            step: 0,
            stepOneClass: 'text-gray-600',
            stepTwoClass: 'text-gray-600',
            stepThreeClass: 'text-gray-600',
            company: '',
            disabledClass: 'bg-gray-300 text-gray-400 border-gray-400 pointer-events-none',
            activeClass: 'border-teal-600 hover:bg-teal-600 bg-teal-600 text-teal-100',
            nextStepClass: 'bg-gray-300 text-gray-400 border-gray-400 pointer-events-none',
            inputLastName: '',
            inputFirstName: '',
            inputBirthday: '',
            inputProfession: '',
            inputCompany: '',
            inputMolengeek: '',
            valid: false
        }),

        methods: {
            incrementStep() {
                if( this.step === 0 && this.inputLastName && this.inputFirstName && this.inputBirthday && this.inputProfession ){
                    this.stepOneClass = 'text-white'
                    this.stepTwoClass = 'text-gray-600'
                    this.stepThreeClass = 'text-gray-600'
                    this.nextStepClass = 'bg-gray-300 text-gray-400 border-gray-400 pointer-events-none'
                    this.valid = false
                    this.step = 1
                }
                else if( this.step === 1 && this.company === 'yes' ) {
                    this.step = 2
                    this.stepOneClass = 'text-teal-600'
                    this.stepTwoClass = 'text-white'
                    this.stepThreeClass = 'text-gray-600'
                    this.nextStepClass = 'bg-gray-300 text-gray-400 border-gray-400 pointer-events-none'
                    this.valid = false
                }
                else if( this.step === 1 && this.company === 'no' ) {
                    this.inputCompany = ''
                    this.step = 3
                    this.stepOneClass = 'text-teal-600'
                    this.stepTwoClass = 'text-teal-600'
                    this.stepThreeClass = 'text-white'
                    this.nextStepClass = 'bg-gray-300 text-gray-400 border-gray-400 pointer-events-none'
                    this.valid = false
                }
                else if( this.step === 2 ){
                    this.stepOneClass = 'text-teal-600'
                    this.stepTwoClass = 'text-teal-600'
                    this.stepThreeClass = 'text-white'
                    this.nextStepClass = 'bg-gray-300 text-gray-400 border-gray-400 pointer-events-none'
                    this.valid = false
                    this.step = 3
                }
                else if( this.step === 3 ){
                    console.log( this.inputBirthday, this.inputProfession, this.inputCompany, this.inputMolengeek, this.inputLastName, this.inputFirstName, this.company )
                }
            },

            decrementStep() {
                if( this.step === 1 ){
                    this.stepOneClass = 'text-gray-600'
                    this.stepTwoClass = 'text-gray-600'
                    this.stepThreeClass = 'text-gray-600'
                    this.step = 0
                }
                else if(this.step === 2){
                    this.stepOneClass = 'text-white'
                    this.stepTwoClass = 'text-gray-600'
                    this.stepThreeClass = 'text-gray-600'
                    this.step = 1
                }
                else if( this.step === 3 && this.company === 'yes' ){
                    this.stepOneClass = 'text-teal-600'
                    this.stepTwoClass = 'text-white'
                    this.stepThreeClass = 'text-gray-600'
                    this.step = 2
                }
                else if( this.step === 3 && this.company === 'no' ){
                    this.stepOneClass = 'text-white'
                    this.stepTwoClass = 'text-gray-600'
                    this.stepThreeClass = 'text-gray-600'
                    this.step = 1
                }
            }
        },

        updated() {
            if( this.step === 0 && this.inputLastName && this.inputFirstName && this.inputBirthday && this.inputProfession ){
                this.nextStepClass = 'border-teal-600 hover:bg-teal-600 bg-teal-600 text-teal-100'
                this.valid = true
            }
            else if( this.step === 0 && !this.inputLastName || !this.inputFirstName || !this.inputBirthday || !this.inputProfession  ){
                this.valid = false
                this.nextStepClass = 'bg-gray-300 text-gray-400 border-gray-400 pointer-events-none'
            }

            if( this.step === 1 && this.company ){
                this.nextStepClass = 'border-teal-600 hover:bg-teal-600 bg-teal-600 text-teal-100'
                this.valid = true
            }
            else if( this.step === 1 && !this.company ){
                this.valid = false
                this.nextStepClass = 'bg-gray-300 text-gray-400 border-gray-400 pointer-events-none'
            }

            if( this.step === 2 && this.inputCompany ){
                this.nextStepClass = 'border-teal-600 hover:bg-teal-600 bg-teal-600 text-teal-100'
                this.valid = true
            }
            else if( this.step === 2 && !this.inputCompany ){
                this.valid = false
                this.nextStepClass = 'bg-gray-300 text-gray-400 border-gray-400 pointer-events-none'
            }

            if( this.step === 3 && this.inputMolengeek ){
                this.valid = true
                this.nextStepClass = this.nextStepClass = 'border-teal-600 hover:bg-teal-600 bg-teal-600 text-teal-100'
            }
            else if( this.step === 3 && !this.inputMolengeek ){
                this.valid = false
                this.nextStepClass = 'bg-gray-300 text-gray-400 border-gray-400 pointer-events-none'
            }
        },
    }
</script>

<!-- Old jetstream component -->
<!-- action="{{ route('register') }} -->
<!-- <form method="POST"> -->
    <!-- <div>
        <x-jet-label value="{{ __('Nom') }}" />
        <x-jet-input class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
    </div>
    <div class="mt-4">
        <x-jet-label value="{{ __('Adresse email') }}" />
        <x-jet-input class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
    </div>
    <div class="mt-4">
        <x-jet-label value="{{ __('Mot de passe') }}" />
        <x-jet-input class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
    </div>
    <div class="mt-4">
        <x-jet-label value="{{ __('Confirmer le mot de passe') }}" />
        <x-jet-input class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
    </div> -->
