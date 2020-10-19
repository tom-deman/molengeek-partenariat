<template>
    <form method="post" @submit="sendForm">
        <div class="container mx-auto mt-32">
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
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true"
                                    focusable="false"
                                    width="100%"
                                    height="100%"
                                    style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                    preserveAspectRatio="xMidYMid meet"
                                    viewBox="0 0 24 24"
                                >
                                    <g
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                                        <circle cx="8.5" cy="7" r="4"/>
                                        <path d="M20 8v6"/><path d="M23 11h-6"/>
                                    </g>
                                </svg>
                            </div>
                            <div
                                class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium"
                                :class="step ===  0 ? 'text-teal-600' : 'text-gray-600'"
                            >
                                Informations personelles
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
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true"
                                    focusable="false"
                                    width="100%"
                                    height="100%"
                                    style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                    preserveAspectRatio="xMidYMid meet"
                                    viewBox="0 0 512 512"
                                >
                                    <path
                                        fill="currentColor"
                                        d="M459.26 96L328 225.7V96h-34.525L168 223.267V16H16v480h480V96zM464 464H48V48h88v216h36.778L296 139.018V264h38.764L464 136.3z"
                                    />
                                    <path
                                        fill="currentColor"
                                        d="M136 328v8h32v-32h-32v24z"
                                    />
                                    <path
                                        fill="currentColor"
                                        d="M136 376h32v32h-32z"
                                    />
                                    <path
                                        fill="currentColor"
                                        d="M216 328v8h32v-32h-32v24z"
                                    />
                                    <path
                                        fill="currentColor"
                                        d="M216 376h32v32h-32z"
                                    />
                                    <path
                                        fill="currentColor"
                                        d="M296 328v8h32v-32h-32v24z"
                                    />
                                    <path
                                        fill="currentColor"
                                        d="M296 376h32v32h-32z"
                                    />
                                    <path
                                        fill="currentColor"
                                        d="M376 304h32v32h-32z"
                                    />
                                    <path
                                        fill="currentColor"
                                        d="M376 376h32v32h-32z"
                                    />
                                </svg>
                            </div>
                            <div
                                v-else-if="step === 1"
                                class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 bg-teal-600 border-teal-600"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true"
                                    focusable="false"
                                    width="100%"
                                    height="100%"
                                    style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                    preserveAspectRatio="xMidYMid meet"
                                    viewBox="0 0 512 512"
                                >
                                    <path
                                        fill="currentColor"
                                        d="M459.26 96L328 225.7V96h-34.525L168 223.267V16H16v480h480V96zM464 464H48V48h88v216h36.778L296 139.018V264h38.764L464 136.3z"
                                    />
                                    <path
                                        fill="currentColor"
                                        d="M136 328v8h32v-32h-32v24z"
                                    />
                                    <path
                                        fill="currentColor"
                                        d="M136 376h32v32h-32z"
                                    />
                                    <path
                                        fill="currentColor"
                                        d="M216 328v8h32v-32h-32v24z"
                                    />
                                    <path
                                        fill="currentColor"
                                        d="M216 376h32v32h-32z"
                                    />
                                    <path
                                        fill="currentColor"
                                        d="M296 328v8h32v-32h-32v24z"
                                    />
                                    <path
                                        fill="currentColor"
                                        d="M296 376h32v32h-32z"
                                    />
                                    <path
                                        fill="currentColor"
                                        d="M376 304h32v32h-32z"
                                    />
                                    <path
                                        fill="currentColor"
                                        d="M376 376h32v32h-32z"
                                    />
                                </svg>
                            </div>
                            <div
                                v-else-if="step > 1"
                                class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-teal-600"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true"
                                    focusable="false"
                                    width="100%"
                                    height="100%"
                                    style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                    preserveAspectRatio="xMidYMid meet"
                                    viewBox="0 0 512 512"
                                >
                                    <path
                                        fill="currentColor"
                                        d="M459.26 96L328 225.7V96h-34.525L168 223.267V16H16v480h480V96zM464 464H48V48h88v216h36.778L296 139.018V264h38.764L464 136.3z"
                                    />
                                    <path
                                        fill="currentColor"
                                        d="M136 328v8h32v-32h-32v24z"
                                    />
                                    <path
                                        fill="currentColor"
                                        d="M136 376h32v32h-32z"
                                    />
                                    <path
                                        fill="currentColor"
                                        d="M216 328v8h32v-32h-32v24z"
                                    />
                                    <path
                                        fill="currentColor"
                                        d="M216 376h32v32h-32z"
                                    />
                                    <path
                                        fill="currentColor"
                                        d="M296 328v8h32v-32h-32v24z"
                                    />
                                    <path
                                        fill="currentColor"
                                        d="M296 376h32v32h-32z"
                                    />
                                    <path
                                        fill="currentColor"
                                        d="M376 304h32v32h-32z"
                                    />
                                    <path
                                        fill="currentColor"
                                        d="M376 376h32v32h-32z"
                                    />
                                </svg>
                            </div>
                            <div
                                class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium text-gray-600"
                                :class="step ===  1 ? 'text-teal-600' : 'text-gray-600'"
                            >
                                Entreprise
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
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" focusable="false"
                                    width="100%"
                                    height="100%"
                                    style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                    preserveAspectRatio="xMidYMid meet"
                                    viewBox="0 0 32 32"
                                >
                                    <path
                                        d="M17 22v-9h-4v2h2v7h-3v2h8v-2h-3z"
                                        fill="currentColor"
                                    />
                                    <path
                                        d="M16 7a1.5 1.5 0 1 0 1.5 1.5A1.5 1.5 0 0 0 16 7z"
                                        fill="currentColor"
                                    />
                                    <path
                                        d="M16 30a14 14 0 1 1 14-14a14 14 0 0 1-14 14zm0-26a12 12 0 1 0 12 12A12 12 0 0 0 16 4z"
                                        fill="currentColor"
                                    />
                                </svg>
                            </div>
                            <div
                                class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 bg-teal-600 border-teal-600"
                                v-if="step === 2"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" focusable="false"
                                    width="100%"
                                    height="100%"
                                    style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                    preserveAspectRatio="xMidYMid meet"
                                    viewBox="0 0 32 32"
                                >
                                    <path
                                        d="M17 22v-9h-4v2h2v7h-3v2h8v-2h-3z"
                                        fill="currentColor"
                                    />
                                    <path
                                        d="M16 7a1.5 1.5 0 1 0 1.5 1.5A1.5 1.5 0 0 0 16 7z"
                                        fill="currentColor"
                                    />
                                    <path
                                        d="M16 30a14 14 0 1 1 14-14a14 14 0 0 1-14 14zm0-26a12 12 0 1 0 12 12A12 12 0 0 0 16 4z"
                                        fill="currentColor"
                                    />
                                </svg>
                            </div>
                            <div
                                class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-teal-600"
                                v-if="step > 2"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" focusable="false"
                                    width="100%"
                                    height="100%"
                                    style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                    preserveAspectRatio="xMidYMid meet"
                                    viewBox="0 0 32 32"
                                >
                                    <path
                                        d="M17 22v-9h-4v2h2v7h-3v2h8v-2h-3z"
                                        fill="currentColor"
                                    />
                                    <path
                                        d="M16 7a1.5 1.5 0 1 0 1.5 1.5A1.5 1.5 0 0 0 16 7z"
                                        fill="currentColor"
                                    />
                                    <path
                                        d="M16 30a14 14 0 1 1 14-14a14 14 0 0 1-14 14zm0-26a12 12 0 1 0 12 12A12 12 0 0 0 16 4z"
                                        fill="currentColor"
                                    />
                                </svg>
                            </div>
                            <div
                                class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium text-gray-500"
                                :class="step ===  2 ? 'text-teal-600' : 'text-gray-600'"
                            >
                                Informations de l'entreprise
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
                                class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium text-gray-500"
                                :class="step ===  3 ? 'text-teal-600' : 'text-gray-600'"
                            >
                                MolenGeek et vous
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8 p-4">
                    <div v-if="step === 0" class="h-auto sm:h-auto md:h-56 lg:h-56 xl:h-56">
                        <div class="font-bold text-gray-600 text-xs leading-8 uppercase h-6 mx-2 mt-3">
                            Nom complet
                        </div>
                        <div class="flex flex-col md:flex-row">
                            <div class="w-full flex-1 mx-2 svelte-1l8159u">
                                <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                                    <input
                                        @blur="checkErrors( 'lastName' )"
                                        @keydown="checkInput"
                                        placeholder="Nom"
                                        class="p-1 px-2 appearance-none outline-none w-full text-gray-800"
                                        v-model="inputLastName"
                                        required
                                    />
                                </div>
                                <div class="h-4">
                                    <p
                                        class="text-red-400 text-sm"
                                        v-if="errors.lastName"
                                    >
                                        {{ errors.lastName }}
                                    </p>
                                </div>
                            </div>
                            <div class="w-full flex-1 mx-2 svelte-1l8159u">
                                <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                                    <input
                                        @blur="checkErrors( 'firstName' )"
                                        @keydown="checkInput"
                                        placeholder="Prénom"
                                        class="p-1 px-2 appearance-none outline-none w-full text-gray-800"
                                        v-model="inputFirstName"
                                        required
                                    />
                                </div>
                                <div class="h-4">
                                    <p
                                        class="text-red-400 text-sm"
                                        v-if="errors.firstName"
                                    >
                                        {{ errors.firstName }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row">
                            <div class="w-full mx-2 flex-1 svelte-1l8159u">
                                <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">Date de naissance</div>
                                <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                                    <input
                                        @blur="checkErrors( 'birthday' )"
                                        @keydown="checkInput"
                                        placeholder="Date de naissance"
                                        class="p-1 px-2 appearance-none outline-none w-full text-gray-800"
                                        v-model="inputBirthday"
                                        required
                                    />
                                </div>
                                <div class="h-4">
                                    <p
                                        class="text-red-400 text-sm"
                                        v-if="errors.birthday"
                                    >
                                        {{ errors.birthday }}
                                    </p>
                                </div>
                            </div>
                            <div class="w-full mx-2 flex-1 svelte-1l8159u">
                                <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">Profession</div>
                                <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                                    <input
                                        @blur="checkErrors( 'profession' )"
                                        @keydown="checkInput"
                                        placeholder="profession"
                                        class="p-1 px-2 appearance-none outline-none w-full text-gray-800"
                                        v-model="inputProfession"
                                        required
                                    />
                                </div>
                                <div class="h-4">
                                    <p
                                        class="text-red-400 text-sm"
                                        v-if="errors.profession"
                                    >
                                        {{ errors.profession }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div v-if="step === 1" class="h-auto sm:h-auto md:h-56 lg:h-56 xl:h-56">
                        <div class="w-full mx-2 flex-1 svelte-1l8159u">
                            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">
                                Avez vous une entreprise ?
                            </div>
                            <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                                <select
                                    @blur="checkErrors( 'company' )"
                                    @change="checkInput"
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
                            <div class="h-4">
                                    <p
                                        class="text-red-400 text-sm"
                                        v-if="errors.company"
                                    >
                                        {{ errors.company }}
                                    </p>
                                </div>
                        </div>
                    </div>
                    <div v-if="step === 2" class="h-auto sm:h-auto md:h-56 lg:h-56 xl:h-56">
                        <div class="flex flex-col md:flex-row">
                            <div class="w-full mx-2 flex-1 svelte-1l8159u">
                                <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">Nom de l'entreprise</div>
                                <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                                    <input
                                        @blur="checkErrors( 'companyName' )"
                                        @keydown="checkInput"
                                        placeholder="Nom de l'entreprise"
                                        class="p-1 px-2 appearance-none outline-none w-full text-gray-800"
                                        v-model="inputCompanyName"
                                        required
                                    />
                                </div>
                                <div class="h-4">
                                    <p
                                        class="text-red-400 text-sm"
                                        v-if="errors.companyName"
                                    >
                                        {{ errors.companyName }}
                                    </p>
                                </div>
                            </div>
                            <div class="w-full mx-2 flex-1 svelte-1l8159u">
                                <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">Numéro de TVA</div>
                                <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                                    <input
                                        @blur="checkErrors( 'tva' )"
                                        @keydown="checkInput"
                                        placeholder="Numéro de TVA"
                                        class="p-1 px-2 appearance-none outline-none w-full text-gray-800"
                                        v-model="inputTva"
                                        required
                                    />
                                </div>
                                <div class="h-4">
                                    <p
                                        class="text-red-400 text-sm"
                                        v-if="errors.tva"
                                    >
                                        {{ errors.tva }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full mx-2 flex-1 svelte-1l8159u">
                            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">
                                Logo de l'entreprise
                            </div>
                            <input
                                ref="inputLogo"
                                type="file"
                                name="file"
                                class="inputfile"
                                id=""
                                style="
                                    width: 0.1px;
                                    height: 0.1px;
                                    opacity: 0;
                                    overflow: hidden;
                                    position: absolute;
                                    z-index: -1;
                                "
                                @change="onFileChange"
                            />
                            <p
                                for="file"
                                @click.prevent="$refs.inputLogo.click()"
                                class="hover:bg-teal-400 bg-teal-600 rounded text-sm text-white px-4 py-2 mt-2 w-48 text-center"
                                style="outline: none;"
                            >
                                Choisissez un fichier
                            </p>
                            <p
                                v-if="this.inputLogo.length > 0"
                                class="text-sm text-gray-800"
                            >
                                {{ inputLogo[ 0 ].name }}
                            </p>
                        </div>
                        <div class="h-4">
                            <p
                                class="text-red-400 text-sm"
                                v-if="errors.logo"
                            >
                                {{ errors.logo }}
                            </p>
                        </div>
                    </div>
                    <div v-if="step === 3" class="h-auto sm:h-auto md:h-56 lg:h-56 xl:h-56">
                        <div class="w-full mx-2 flex-1 svelte-1l8159u">
                            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">Comment avez-vous connu MolenGeek ?</div>
                            <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                                <input
                                    @blur="checkErrors( 'molengeek' )"
                                    @keydown="checkInput"
                                    placeholder="Réponse"
                                    class="p-1 px-2 appearance-none outline-none w-full text-gray-800"
                                    v-model="inputMolengeek"
                                    type="text"
                                    required
                                />
                            </div>
                            <div class="h-4">
                                    <p
                                        class="text-red-400 text-sm"
                                        v-if="errors.molengeek"
                                    >
                                        {{ errors.molengeek }}
                                    </p>
                                </div>
                        </div>
                    </div>
                    <div class="flex p-2 mt-4">
                        <p
                            :class="step < 1 ? disabledClass : activeClass"
                            class="text-base hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer border duration-200 ease-in-out transition"
                            @click="decrementStep"
                            :disabled="step < 1"
                        >
                            Précédent
                        </p>
                        <div class="flex-auto flex flex-row-reverse">
                            <p
                                v-if="step !== 3"
                                :class="'text-base ml-2 hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer border duration-200 ease-in-out transition ' + nextStepClass"
                                :disabled="!valid"
                                @click="incrementStep()"
                            >
                                Suivant
                            </p>
                            <button
                                v-if="step === 3"
                                :class="'text-base ml-2 hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer border duration-200 ease-in-out transition ' + nextStepClass"
                                :disabled="!valid"
                                type="submit"
                            >
                                Valider
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
    </form>
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
            inputCompanyName: '',
            inputMolengeek: '',
            inputTva: '',
            inputLogo: '',
            valid: false,
            errors: {
                firstName: '',
                lastName: '',
                birthday: '',
                profession: '',
                companyName: '',
                molengeek: '',
                company: '',
                logo: '',
                tva:''
            }
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
                    this.inputCompanyName = ''
                    this.inputTva = ''
                    this.inputLogo = ''
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
                    console.log( this.inputBirthday, this.inputProfession, this.inputCompanyName, this.inputMolengeek, this.inputLastName, this.inputFirstName, this.company, this.inputTva, this.inputLogo )
                }
            },

            decrementStep( e ) {
                e.preventDefault()
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
            },

            onFileChange( e ){
                const file = e.target.files || e.dataTransfer.files
                if( !file.length )
                    return
                this.inputLogo = file
                this.checkInput()
                this.checkErrors( 'logo' )
            },

            checkInput() {
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

                if( this.step === 2 && this.inputCompanyName && this.inputTva && this.inputLogo ){
                    this.nextStepClass = 'border-teal-600 hover:bg-teal-600 bg-teal-600 text-teal-100'
                    this.valid = true
                }
                else if( this.step === 2 && ( !this.inputCompanyName || !this.inputTva ) ){
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

            checkErrors( a ){
                switch( a ){
                    case 'lastName':
                        if( !this.inputLastName ){
                            this.errors.lastName = 'Nom de famille nécessaire'
                        }
                        else {
                            this.errors.lastName = ''
                        }
                    break
                    case 'firstName':
                        if( !this.inputFirstName ){
                            this.errors.firstName = 'Prénom nécessaire'
                        }
                        else {
                            this.errors.firstName = ''
                        }
                    break
                    case 'birthday':
                        if( !this.inputBirthday ){
                            this.errors.birthday = 'Date de naissance nécessaire'
                        }
                        else {
                            this.errors.birthday = ''
                        }
                    break
                    case 'profession':
                        if( !this.inputProfession ){
                            this.errors.profession = 'Profession nécessaire'
                        }
                        else {
                            this.errors.profession = ''
                        }
                    break
                    case 'companyName':
                        if( !this.inputCompanyName ){
                            this.errors.companyName = 'Nom de l\'entreprise nécessaire'
                        }
                        else {
                            this.errors.companyName = ''
                        }
                    break
                    case 'molengeek':
                        if( !this.inputMolengeek ){
                            this.errors.molengeek = 'Réponse nécessaire'
                        }
                        else {
                            this.errors.molengeek = ''
                        }
                    break
                    case 'company':
                        if( !this.company ){
                            this.errors.company = 'Réponse nécessaire'
                        }
                        else {
                            this.errors.company = ''
                        }
                    break
                    case 'logo':
                        if( !this.inputLogo ){
                            this.errors.logo = 'Logo nécessaire'
                        }
                        else {
                            this.errors.logo = ''
                        }
                    break
                    case 'tva':
                        if( !this.inputTva ){
                            this.errors.tva = 'Numéro de TVA nécessaire'
                        }
                        else {
                            this.errors.tva = ''
                        }
                    break
                }
            },

            sendForm() {
                alert( 'send form now' )
            }
        },

        updated() {
            this.checkInput()
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
