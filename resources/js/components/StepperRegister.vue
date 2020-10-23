<template>
    <form method="POST" enctype="multipart/form-data" @submit.prevent="sendForm">
        <div class="container mx-auto">
            <div class="p-10 bg-gray-100 rounded relative my-16">
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
                                {{ __('Informations personelles') }}
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
                                {{ __( 'Entreprise' ) }}
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
                                {{ __( 'Informations de l\'entreprise' ) }}
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
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true"
                                    focusable="false"
                                    width="100%"
                                    height="100%"
                                    style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet"
                                    viewBox="0 0 1024 1024"
                                >
                                    <path
                                        d="M824.2 699.9a301.55 301.55 0 0 0-86.4-60.4C783.1 602.8 812 546.8 812 484c0-110.8-92.4-201.7-203.2-200c-109.1 1.7-197 90.6-197 200c0 62.8 29 118.8 74.2 155.5a300.95 300.95 0 0 0-86.4 60.4C345 754.6 314 826.8 312 903.8a8 8 0 0 0 8 8.2h56c4.3 0 7.9-3.4 8-7.7c1.9-58 25.4-112.3 66.7-153.5A226.62 226.62 0 0 1 612 684c60.9 0 118.2 23.7 161.3 66.8C814.5 792 838 846.3 840 904.3c.1 4.3 3.7 7.7 8 7.7h56a8 8 0 0 0 8-8.2c-2-77-33-149.2-87.8-203.9zM612 612c-34.2 0-66.4-13.3-90.5-37.5a126.86 126.86 0 0 1-37.5-91.8c.3-32.8 13.4-64.5 36.3-88c24-24.6 56.1-38.3 90.4-38.7c33.9-.3 66.8 12.9 91 36.6c24.8 24.3 38.4 56.8 38.4 91.4c0 34.2-13.3 66.3-37.5 90.5A127.3 127.3 0 0 1 612 612zM361.5 510.4c-.9-8.7-1.4-17.5-1.4-26.4c0-15.9 1.5-31.4 4.3-46.5c.7-3.6-1.2-7.3-4.5-8.8c-13.6-6.1-26.1-14.5-36.9-25.1a127.54 127.54 0 0 1-38.7-95.4c.9-32.1 13.8-62.6 36.3-85.6c24.7-25.3 57.9-39.1 93.2-38.7c31.9.3 62.7 12.6 86 34.4c7.9 7.4 14.7 15.6 20.4 24.4c2 3.1 5.9 4.4 9.3 3.2c17.6-6.1 36.2-10.4 55.3-12.4c5.6-.6 8.8-6.6 6.3-11.6c-32.5-64.3-98.9-108.7-175.7-109.9c-110.9-1.7-203.3 89.2-203.3 199.9c0 62.8 28.9 118.8 74.2 155.5c-31.8 14.7-61.1 35-86.5 60.4c-54.8 54.7-85.8 126.9-87.8 204a8 8 0 0 0 8 8.2h56.1c4.3 0 7.9-3.4 8-7.7c1.9-58 25.4-112.3 66.7-153.5c29.4-29.4 65.4-49.8 104.7-59.7c3.9-1 6.5-4.7 6-8.7z"
                                        fill="currentColor"
                                    />
                                </svg>
                            </div>
                            <div
                                class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 bg-teal-600 border-teal-600"
                                v-if="step === 3"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true"
                                    focusable="false"
                                    width="100%"
                                    height="100%"
                                    style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet"
                                    viewBox="0 0 1024 1024"
                                >
                                    <path
                                        d="M824.2 699.9a301.55 301.55 0 0 0-86.4-60.4C783.1 602.8 812 546.8 812 484c0-110.8-92.4-201.7-203.2-200c-109.1 1.7-197 90.6-197 200c0 62.8 29 118.8 74.2 155.5a300.95 300.95 0 0 0-86.4 60.4C345 754.6 314 826.8 312 903.8a8 8 0 0 0 8 8.2h56c4.3 0 7.9-3.4 8-7.7c1.9-58 25.4-112.3 66.7-153.5A226.62 226.62 0 0 1 612 684c60.9 0 118.2 23.7 161.3 66.8C814.5 792 838 846.3 840 904.3c.1 4.3 3.7 7.7 8 7.7h56a8 8 0 0 0 8-8.2c-2-77-33-149.2-87.8-203.9zM612 612c-34.2 0-66.4-13.3-90.5-37.5a126.86 126.86 0 0 1-37.5-91.8c.3-32.8 13.4-64.5 36.3-88c24-24.6 56.1-38.3 90.4-38.7c33.9-.3 66.8 12.9 91 36.6c24.8 24.3 38.4 56.8 38.4 91.4c0 34.2-13.3 66.3-37.5 90.5A127.3 127.3 0 0 1 612 612zM361.5 510.4c-.9-8.7-1.4-17.5-1.4-26.4c0-15.9 1.5-31.4 4.3-46.5c.7-3.6-1.2-7.3-4.5-8.8c-13.6-6.1-26.1-14.5-36.9-25.1a127.54 127.54 0 0 1-38.7-95.4c.9-32.1 13.8-62.6 36.3-85.6c24.7-25.3 57.9-39.1 93.2-38.7c31.9.3 62.7 12.6 86 34.4c7.9 7.4 14.7 15.6 20.4 24.4c2 3.1 5.9 4.4 9.3 3.2c17.6-6.1 36.2-10.4 55.3-12.4c5.6-.6 8.8-6.6 6.3-11.6c-32.5-64.3-98.9-108.7-175.7-109.9c-110.9-1.7-203.3 89.2-203.3 199.9c0 62.8 28.9 118.8 74.2 155.5c-31.8 14.7-61.1 35-86.5 60.4c-54.8 54.7-85.8 126.9-87.8 204a8 8 0 0 0 8 8.2h56.1c4.3 0 7.9-3.4 8-7.7c1.9-58 25.4-112.3 66.7-153.5c29.4-29.4 65.4-49.8 104.7-59.7c3.9-1 6.5-4.7 6-8.7z"
                                        fill="currentColor"
                                    />
                                </svg>
                            </div>
                            <div
                                class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium text-gray-500"
                                :class="step ===  3 ? 'text-teal-600' : 'text-gray-600'"
                            >
                                {{ __( 'MolenGeek et vous' ) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8 p-4">
                    <div v-if="step === 0" class="h-auto">
                        <div class="h-8 pl-4"></div>
                        <div class="font-bold text-gray-600 text-xs leading-8 uppercase h-6 mx-2 mt-3">
                            {{ __( 'Nom complet' ) }}
                        </div>
                        <div class="flex flex-col md:flex-row">
                            <div class="w-full flex-1 mx-2 svelte-1l8159u">
                                <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                                    <input
                                        @blur="checkErrors( 'firstName' )"
                                        @keydown="checkInput"
                                        placeholder="John"
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
                            <div class="w-full flex-1 mx-2 svelte-1l8159u">
                                <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                                    <input
                                        @blur="checkErrors( 'lastName' )"
                                        @keydown="checkInput"
                                        placeholder="Doe"
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
                        </div>
                        <div class="flex flex-col md:flex-row">
                            <div class="w-full mx-2 flex-1 svelte-1l8159u">
                                <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">
                                    {{ __( 'Date de naissance' ) }}
                                </div>
                                <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                                    <input
                                        @blur="checkErrors( 'birthday' )"
                                        @keydown="checkInput"
                                        :placeholder="__( '01/01/2000' )"
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
                                <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">
                                    {{ __( 'Profession' ) }}
                                </div>
                                <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                                    <input
                                        @blur="checkErrors( 'profession' )"
                                        @keydown="checkInput"
                                        placeholder="Project Manager"
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
                        <div class="flex flex-col md:flex-row">
                            <div class="w-full mx-2 flex-1 svelte-1l8159u">
                                <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">
                                    {{ __( 'Mot de passe' ) }}
                                </div>
                                <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                                    <input
                                        @blur="checkErrors( 'password' )"
                                        @keydown="checkInput"
                                        placeholder="******"
                                        class="p-1 px-2 appearance-none outline-none w-full text-gray-800"
                                        v-model="inputPassword"
                                        type="password"
                                        required
                                    />
                                </div>
                                <div class="h-4">
                                    <p
                                        class="text-red-400 text-sm"
                                        v-if="errors.password"
                                    >
                                        {{ errors.password }}
                                    </p>
                                </div>
                            </div>
                            <div class="w-full mx-2 flex-1 svelte-1l8159u">
                                <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">
                                    {{ __( 'Confirmer mot de passe' ) }}
                                </div>
                                <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                                    <input
                                        @blur="checkErrors( 'confirm_password' )"
                                        @keydown="checkInput"
                                        placeholder="******"
                                        class="p-1 px-2 appearance-none outline-none w-full text-gray-800"
                                        v-model="inputConfirmPassword"
                                        type="password"
                                        required
                                    />
                                </div>
                                <div class="h-4">
                                    <p
                                        class="text-red-400 text-sm"
                                        v-if="errors.confirm_password"
                                    >
                                        {{ errors.confirm_password }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row">
                            <div class="w-full mx-2 flex-1 svelte-1l8159u">
                                <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">
                                    {{ __( 'Adresse email' ) }}
                                </div>
                                <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                                    <input
                                        @blur="checkErrors( 'email' )"
                                        @keydown="checkInput"
                                        placeholder="john.doe@mail.com"
                                        class="p-1 px-2 appearance-none outline-none w-full text-gray-800"
                                        v-model="inputEmail"
                                        type="email"
                                        required
                                    />
                                </div>
                                <div class="h-4">
                                    <p
                                        class="text-red-400 text-sm"
                                        v-if="errors.email"
                                    >
                                        {{ errors.email }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div v-if="step === 1" class="h-auto">
                        <div class="h-8 pl-4"></div>
                        <div class="w-full mx-2 flex-1 svelte-1l8159u">
                            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">
                                {{ __( 'Avez vous une entreprise ?' ) }}
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
                                        {{ __( 'Veuillez faire un choix' ) }}
                                    </option>
                                    <option value="true">{{ __( 'Oui' ) }}</option>
                                    <option value="false">{{ __( 'Non' ) }}</option>
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
                    <div v-if="step === 2" class="h-auto">
                        <div class="h-8 pl-4"></div>
                        <div class="flex flex-col md:flex-row">
                            <div class="w-full mx-2 flex-1 svelte-1l8159u">
                                <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">
                                    {{ __( 'Nom de l\'entreprise' ) }}
                                </div>
                                <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                                    <input
                                        @blur="checkErrors( 'companyName' )"
                                        @keydown="checkInput"
                                        placeholder="MolenGeek"
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
                                <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">
                                    {{ __( 'Numéro de TVA' ) }}
                                </div>
                                <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                                    <input
                                        @blur="checkErrors( 'tva' )"
                                        @keydown="checkInput"
                                        placeholder="BE0123456789"
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
                                {{ __( 'Logo de l\'entreprise' ) }}
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
                                accept="image/*"
                            />
                            <p
                                for="file"
                                @click.prevent="$refs.inputLogo.click()"
                                class="hover:bg-teal-400 bg-teal-600 rounded text-sm text-white px-4 py-2 mt-2 w-48 text-center"
                                style="outline: none;"
                            >
                                {{ __( 'Choisissez un fichier' ) }}
                            </p>
                            <p
                                v-if="this.inputLogo.length > 0"
                                class="text-sm text-gray-800"
                            >
                                {{ inputLogo[0].name }}
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
                    <div v-if="step === 3" class="h-auto">
                        <div class="h-8 pl-4">
                            <div v-if="serverErrors">
                                <ul>
                                    <li
                                        class="text-sm text-red-400"
                                        v-for="( serverError, index ) in serverErrorsTab"
                                        :key="index"
                                    >
                                        {{ serverError.join( '' ) }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="w-full mx-2 flex-1 svelte-1l8159u">
                            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">
                                {{ __( 'Comment avez-vous connu MolenGeek ?' ) }}
                            </div>
                            <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                                <input
                                    @blur="checkErrors( 'molengeek' )"
                                    @keydown="checkInput"
                                    placeholder="Réponse ..."
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
                            {{ __( 'Précédent' ) }}
                        </p>
                        <div class="flex-auto flex flex-row-reverse">
                            <p
                                v-if="step !== 3"
                                :class="'text-base ml-2 hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer border duration-200 ease-in-out transition ' + nextStepClass"
                                :disabled="!valid"
                                @click="incrementStep()"
                            >
                                {{ __( 'Suivant' ) }}
                            </p>
                            <button
                                v-if="step === 3"
                                :class="'text-base ml-2 hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer border duration-200 ease-in-out transition ' + nextStepClass"
                                :disabled="!valid"
                                type="submit"
                            >
                                {{ __( 'Valider' ) }}
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <a
                            class="underline text-sm text-gray-600 hover:text-gray-900"
                            href="/login"
                        >
                            {{ __('Déjà inscrit ?') }}
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
            inputPassword: '',
            inputConfirmPassword: '',
            inputTva: '',
            inputLogo: '',
            inputEmail: '',
            valid: false,
            serverErrors: false,
            serverErrorsTab: '',
            errors: {
                firstName: '',
                lastName: '',
                birthday: '',
                profession: '',
                companyName: '',
                molengeek: '',
                company: '',
                logo: '',
                tva: '',
                password: '',
                confirm_password: '',
                email: ''
            }
        }),

        methods: {
            incrementStep() {
                if( this.step === 0
                    && this.inputLastName
                    && this.inputFirstName
                    && ( /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/.test( this.inputBirthday ) )
                    && this.inputProfession
                    && ( /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test( this.inputEmail ) )
                    && /^.{8,}$/.test( this.inputPassword )
                    && this.inputConfirmPassword
                    && ( this.inputPassword === this.inputConfirmPassword )
                ){
                    this.stepOneClass = 'text-white'
                    this.stepTwoClass = 'text-gray-600'
                    this.stepThreeClass = 'text-gray-600'
                    this.nextStepClass = 'bg-gray-300 text-gray-400 border-gray-400 pointer-events-none'
                    this.valid = false
                    this.step = 1
                }
                else if( this.step === 1 && this.company === 'true' ) {
                    this.step = 2
                    this.stepOneClass = 'text-teal-600'
                    this.stepTwoClass = 'text-white'
                    this.stepThreeClass = 'text-gray-600'
                    this.nextStepClass = 'bg-gray-300 text-gray-400 border-gray-400 pointer-events-none'
                    this.valid = false
                }
                else if( this.step === 1 && this.company === 'false' ) {
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
            },

            decrementStep( e ) {
                this.checkInput()
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
                else if( this.step === 3 && this.company === 'true' ){
                    this.stepOneClass = 'text-teal-600'
                    this.stepTwoClass = 'text-white'
                    this.stepThreeClass = 'text-gray-600'
                    this.step = 2
                }
                else if( this.step === 3 && this.company === 'false' ){
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

                if( file[ 0 ].size > 5000000 ){
                    this.inputLogo = ''
                    this.errors.logo = 'Votre fichier est trop grand'
                    this.valid = false
                    this.nextStepClass = 'bg-gray-300 text-gray-400 border-gray-400 pointer-events-none'
                }
                else {
                    this.inputLogo = file
                    this.errors.logo = ''
                    this.checkInput()
                    this.checkErrors( 'logo' )
                }
            },

            checkInput() {
                if( this.step === 0
                    && this.inputLastName
                    && this.inputFirstName
                    && ( /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/.test( this.inputBirthday ) )
                    && this.inputProfession
                    && /^.{8,}$/.test( this.inputPassword )
                    && this.inputConfirmPassword
                    && (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test( this.inputEmail ))
                    && ( this.inputPassword === this.inputConfirmPassword )
                ){
                    this.nextStepClass = 'border-teal-600 hover:bg-teal-600 bg-teal-600 text-teal-100'
                    this.valid = true
                }
                else if( this.step === 0 && !this.inputLastName
                    || !this.inputFirstName
                    || ( !/^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/.test( this.inputBirthday ) )
                    || !this.inputProfession
                    || !/^.{8,}$/.test( this.inputPassword )
                    || !this.inputConfirmPassword
                    || !this.inputEmail
                    || ( this.inputPassword !== this.inputConfirmPassword )
                ){
                    this.valid = false
                    this.nextStepClass = 'bg-gray-300 text-gray-400 border-gray-400 pointer-events-none'
                }

                if( this.step === 1 ) {
                    if( this.company && ( this.company === 'true' || this.company === 'false' ) ){
                        this.nextStepClass = 'border-teal-600 hover:bg-teal-600 bg-teal-600 text-teal-100'
                        this.valid = true
                    }
                    else{
                        this.valid = false
                        this.nextStepClass = 'bg-gray-300 text-gray-400 border-gray-400 pointer-events-none'
                    }
                }

                if( this.step === 2
                    && this.inputCompanyName
                    && /^(ATU[0-9]{8}|BE[01][0-9]{9}|BG[0-9]{9,10}|HR[0-9]{11}|CY[A-Z0-9]{9}|CZ[0-9]{8,10}|DK[0-9]{8}|EE[0-9]{9}|FI[0-9]{8}|FR[0-9A-Z]{2}[0-9]{9}|DE[0-9]{9}|EL[0-9]{9}|HU[0-9]{8}|IE([0-9]{7}[A-Z]{1,2}|[0-9][A-Z][0-9]{5}[A-Z])|IT[0-9]{11}|LV[0-9]{11}|LT([0-9]{9}|[0-9]{12})|LU[0-9]{8}|MT[0-9]{8}|NL[0-9]{9}B[0-9]{2}|PL[0-9]{10}|PT[0-9]{9}|RO[0-9]{2,10}|SK[0-9]{10}|SI[0-9]{8}|ES[A-Z]([0-9]{8}|[0-9]{7}[A-Z])|SE[0-9]{12}|GB([0-9]{9}|[0-9]{12}|GD[0-4][0-9]{2}|HA[5-9][0-9]{2}))$/.test( this.inputTva )
                    && this.inputLogo
                ){
                    this.nextStepClass = 'border-teal-600 hover:bg-teal-600 bg-teal-600 text-teal-100'
                    this.valid = true
                }
                else if( this.step === 2 && ( !this.inputCompanyName || !/^(ATU[0-9]{8}|BE[01][0-9]{9}|BG[0-9]{9,10}|HR[0-9]{11}|CY[A-Z0-9]{9}|CZ[0-9]{8,10}|DK[0-9]{8}|EE[0-9]{9}|FI[0-9]{8}|FR[0-9A-Z]{2}[0-9]{9}|DE[0-9]{9}|EL[0-9]{9}|HU[0-9]{8}|IE([0-9]{7}[A-Z]{1,2}|[0-9][A-Z][0-9]{5}[A-Z])|IT[0-9]{11}|LV[0-9]{11}|LT([0-9]{9}|[0-9]{12})|LU[0-9]{8}|MT[0-9]{8}|NL[0-9]{9}B[0-9]{2}|PL[0-9]{10}|PT[0-9]{9}|RO[0-9]{2,10}|SK[0-9]{10}|SI[0-9]{8}|ES[A-Z]([0-9]{8}|[0-9]{7}[A-Z])|SE[0-9]{12}|GB([0-9]{9}|[0-9]{12}|GD[0-4][0-9]{2}|HA[5-9][0-9]{2}))$/.test( this.inputTva ) ) ){
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
                        if( !this.inputLastName ) {
                            this.errors.lastName = 'Nom de famille nécessaire'
                        }
                        else {
                            this.errors.lastName = ''
                        }
                    break
                    case 'firstName':
                        if( !this.inputFirstName ) {
                            this.errors.firstName = 'Prénom nécessaire'
                        }
                        else {
                            this.errors.firstName = ''
                        }
                    break
                    case 'birthday':
                        if( !this.inputBirthday ) {
                            this.errors.birthday = 'Date de naissance nécessaire'
                        }
                        else if( ( !/^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/.test( this.inputBirthday ) ) ) {
                            this.errors.birthday = 'Veuillez entrer une date valide au format jj/mm/aaaa'
                        }
                        else {
                            this.errors.birthday = ''
                        }
                    break
                    case 'profession':
                        if( !this.inputProfession ) {
                            this.errors.profession = 'Profession nécessaire'
                        }
                        else {
                            this.errors.profession = ''
                        }
                    break
                    case 'companyName':
                        if( !this.inputCompanyName ) {
                            this.errors.companyName = 'Nom de l\'entreprise nécessaire'
                        }
                        else {
                            this.errors.companyName = ''
                        }
                    break
                    case 'molengeek':
                        if( !this.inputMolengeek ) {
                            this.errors.molengeek = 'Réponse nécessaire'
                        }
                        else {
                            this.errors.molengeek = ''
                        }
                    break
                    case 'company':
                        if( !this.company ) {
                            this.errors.company = 'Réponse nécessaire'
                        }
                        else if( this.company !== 'true' && this.company !== 'false' ){
                            this.errors.company = 'Erreur, Veuillez recharger la page et réessayer'
                        }
                        else {
                            this.errors.company = ''
                        }
                    break
                    case 'logo':
                        if( !this.inputLogo ) {
                            this.errors.logo = 'Logo nécessaire'
                        }
                        else {
                            this.errors.logo = ''
                        }
                    break
                    case 'tva':
                        if( !this.inputTva ) {
                            this.errors.tva = 'Numéro de TVA nécessaire'
                        }
                        else if( !/^(ATU[0-9]{8}|BE[01][0-9]{9}|BG[0-9]{9,10}|HR[0-9]{11}|CY[A-Z0-9]{9}|CZ[0-9]{8,10}|DK[0-9]{8}|EE[0-9]{9}|FI[0-9]{8}|FR[0-9A-Z]{2}[0-9]{9}|DE[0-9]{9}|EL[0-9]{9}|HU[0-9]{8}|IE([0-9]{7}[A-Z]{1,2}|[0-9][A-Z][0-9]{5}[A-Z])|IT[0-9]{11}|LV[0-9]{11}|LT([0-9]{9}|[0-9]{12})|LU[0-9]{8}|MT[0-9]{8}|NL[0-9]{9}B[0-9]{2}|PL[0-9]{10}|PT[0-9]{9}|RO[0-9]{2,10}|SK[0-9]{10}|SI[0-9]{8}|ES[A-Z]([0-9]{8}|[0-9]{7}[A-Z])|SE[0-9]{12}|GB([0-9]{9}|[0-9]{12}|GD[0-4][0-9]{2}|HA[5-9][0-9]{2}))$/.test( this.inputTva ) ){
                            this.errors.tva = 'Veuillez entrer un numéro de TVA valide, exemple: BE0123456789'
                        }
                        else {
                            this.errors.tva = ''
                        }
                    break
                    case 'email':
                        if( !this.inputEmail ) {
                            this.errors.email = 'Email nécessaire'
                        }
                        else if(!/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test( this.inputEmail )){
                            this.errors.email = 'Veuillez entrer une adresse email valide'
                        }
                        else {
                            this.errors.email = ''
                        }
                    break
                    case 'password':
                        if( !this.inputPassword ) {
                            this.errors.password = 'Mot de passe nécessaire'
                        }
                        else if( !/^.{8,}$/.test( this.inputPassword ) ){
                            this.errors.password = 'Votre mot de passe doit au moins contenir 8 caractères.'
                        }
                        else {
                            this.errors.password = ''
                        }

                        if( this.inputConfirmPassword && ( this.inputPassword !== this.inputConfirmPassword ) ) {
                            this.errors.confirm_password = 'Vos mots de passe ne sont pas identiques'
                        }
                        else if( this.inputConfirmPassword && ( this.inputPassword === this.inputConfirmPassword ) ){
                            this.errors.confirm_password = ''
                        }
                    break
                    case 'confirm_password':
                        if( !this.inputConfirmPassword ){
                            this.errors.confirm_password = 'Confirmation du mot de passe nécessaire'
                        }
                        else if( this.inputConfirmPassword && this.inputPassword && this.inputConfirmPassword !== this.inputPassword ){
                            this.errors.confirm_password = 'Vos mots de passe ne sont pas identiques'
                        }
                        else {
                            this.errors.confirm_password = ''
                        }
                }
            },

            sendForm() {
                let app = this
                if( app.company === 'true' ){
                    app.company = 1
                }
                else {
                    app.company = 0
                }
                axios.post( '/register', {
                    first_name: this.inputFirstName,
                    last_name: this.inputLastName,
                    birthday: this.inputBirthday,
                    profession: this.inputProfession,
                    email: this.inputEmail,
                    password: this.inputPassword,
                    password_confirmation: this.inputConfirmPassword,
                    company: this.company,
                    input_molengeek: this.inputMolengeek,
                    name: this.inputCompanyName,
                    tva: this.inputTva,
                    logo: this.inputLogo
                } )
                .then( function( response ){
                    window.location.href = '/login'
                })
                .catch(function( error ) {
                    app.serverErrors = true
                    app.serverErrorsTab = error.response.data.errors
                })
            }
        },

        updated() {
            this.checkInput()
        },
    }
    // Test
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
