<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1"
        />
        <meta
            name="theme-color"
            content="#000000"
        />
        <link
            rel="shortcut icon"
            href="./assets/img/favicon.ico"
        />
        <link
            rel="apple-touch-icon"
            sizes="76x76"
            href="./assets/img/apple-icon.png"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"
            />
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css"
        />
        <title>
            @lang( 'Tableau de bord' )
        </title>
    </head>

    <body class="text-gray-800 antialiased">
        <noscript>
            @lang( 'Vous devez activer Javascript pour utiliser cette application.' )
        </noscript>

        <div id="root">
            <nav class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-no-wrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
                <div class="md:flex-col md:items-stretch md:min-h-full md:flex-no-wrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
                    <img
                        src="{{ asset( 'img/molengeek_logo.png' ) }}"
                        class="h-24 object-cover"
                        alt="logo MolenGeek"
                    >
                    <button
                        class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                        type="button"
                        onclick="toggleNavbar( 'example-collapse-sidebar' )"
                    >
                        <i class="fas fa-bars"></i>
                    </button>
                    <a
                        class="md:block text-left md:pb-2 text-gray-700 mr-0 inline-block whitespace-no-wrap text-sm uppercase font-bold p-4 px-0"
                        href="/dashboard"
                    >
                        @lang( 'MolenGeek Partenariat' )
                    </a>

                    <ul class="md:hidden items-center flex flex-wrap list-none">
                        <li class="inline-block relative">
                            <a
                                class="text-gray-600 block py-1 px-3"
                                href="#"
                                onclick="openDropdown( event,'notification-dropdown' )"
                            >
                                <i class="fas fa-bell"></i>
                            </a>
                            <div
                                class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1"
                                style="min-width: 12rem;"
                                id="notification-dropdown"
                            >
                            <div class="block px-4 py-2 text-xs text-gray-500">
                                {{ __( 'Gerer mon compte' ) }}
                            </div>
                                <a
                                    href="{{ route( 'profile.show' ) }}"
                                    class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                                >
                                    @lang( 'Profil' )
                                </a>
                                <form method="POST" action="{{ route( 'logout' ) }}">
                                    @csrf
                                    <a
                                        href="{{ route( 'logout' ) }}"
                                        onclick="event.preventDefault(); this.closest( 'form' ).submit();"
                                        class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                                    >
                                        @lang( 'Déconnexion' )
                                    </a>
                                </form>
                            </div>
                        </li>

                        <li class="inline-block relative">
                            <a
                                class="text-gray-600 block"
                                href="#"
                                onclick="openDropdown( event,'user-responsive-dropdown' )"
                            >
                                <div class="items-center flex">
                                    @if( Auth::user()->profile_photo_path === null )
                                        <img
                                            src="{{ asset( 'img/bg.png' ) }}"
                                            alt="{{ Auth::user()->first_name }}"
                                            class="rounded-full h-20 w-20 object-cover"
                                        />
                                    @else
                                        <img
                                            class="h-8 w-8 rounded-full object-cover"
                                            src="{{ 'storage/' . Auth::user()->profile_photo_path }}"
                                            alt="{{ Auth::user()->first_name }}"
                                        />
                                    @endif
                                </div>
                            </a>
                            <div
                                class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1"
                                style="min-width: 12rem;"
                                id="user-responsive-dropdown"
                            >
                                <div class="block px-4 py-2 text-xs text-gray-500">
                                    {{ __( 'Gerer mon compte' ) }}
                                </div>
                                <a
                                    href="{{ route( 'profile.show' ) }}"
                                    class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                                >
                                    @lang( 'Profil' )
                                </a>
                                <form method="POST" action="{{ route( 'logout' ) }}">
                                    @csrf
                                    <a
                                        href="{{ route( 'logout' ) }}"
                                        onclick="event.preventDefault(); this.closest( 'form' ).submit();"
                                        class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                                    >
                                        @lang( 'Déconnexion' )
                                    </a>
                                </form>
                            </div>
                        </li>
                    </ul>

                    <div
                        class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden"
                        id="example-collapse-sidebar"
                    >
                        <div class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-gray-300">
                            <div class="flex flex-wrap">
                                <div class="w-6/12">
                                    <a
                                        class="md:block text-left md:pb-2 text-gray-700 mr-0 inline-block whitespace-no-wrap text-sm uppercase font-bold p-4 px-0"
                                        href="/dashboard"
                                    >
                                        @lang( 'MolenGeek Partenariat' )
                                    </a>
                                </div>
                                <div class="w-6/12 flex justify-end">
                                    <button
                                        type="button"
                                        class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                                        onclick="toggleNavbar( 'example-collapse-sidebar' )"
                                    >
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <form class="mt-6 mb-4 md:hidden">
                            <div class="mb-3 pt-0">
                                <input
                                    type="text"
                                    placeholder="Search"
                                    class="px-3 py-2 h-12 border border-solid border-gray-600 placeholder-gray-400 text-gray-700 bg-white rounded text-base leading-snug shadow-none outline-none focus:outline-none w-full font-normal"
                                />
                            </div>
                        </form>

                        <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                            <li class="items-center">
                                <a
                                    class="{{ Request::path() === 'dashboard' ? 'text-pink-500 hover:text-pink-600 text-xs uppercase py-3 font-bold block' : 'text-gray-800 hover:text-gray-600 text-xs uppercase py-3 font-bold block' }}"
                                    href="/dashboard"
                                >
                                    <i class="fas fa-tv opacity-75 mr-2 text-sm"></i>
                                    @lang('Tableau de bord')
                                </a>
                            </li>
                            <li class="items-center">
                                <a
                                    class="{{ Request::path() === 'dashboard/form' ? 'text-pink-500 hover:text-pink-600 text-xs uppercase py-3 font-bold block' : 'text-gray-800 hover:text-gray-600 text-xs uppercase py-3 font-bold block' }}"
                                    href="/dashboard/form"
                                >
                                    <i class="fas fa-newspaper text-gray-500 mr-2 text-sm"></i>
                                    @lang('Envoyer une requête')
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="relative md:ml-64">
                <nav
                    class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-no-wrap md:justify-start flex items-center p-4">
                    <div class="w-full mx-autp items-center flex justify-between md:flex-no-wrap flex-wrap md:px-10 px-4">
                        <a
                            class="text-white text-sm uppercase hidden lg:inline-block font-semibold"
                            href="/dashboard"
                        >
                        </a>
                        <ul class="flex-col md:flex-row list-none items-center hidden md:flex">
                            <a
                                class="text-gray-600 block"
                                href="#"
                                onclick="openDropdown( event,'user-dropdown' )"
                            >
                                <div class="items-center flex">
                                    @if( Auth::user()->profile_photo_path === null )
                                        <img
                                            src="{{ asset( 'img/bg.png' ) }}"
                                            alt="{{ Auth::user()->first_name }}"
                                            class="rounded-full h-12 w-12 object-cover"
                                        />
                                    @else
                                        <img
                                            class="h-12 w-12 rounded-full object-cover"
                                            src="{{ 'storage/' . Auth::user()->profile_photo_path }}"
                                            alt="{{ Auth::user()->first_name }}"
                                        />
                                    @endif
                                    </span>
                                </div>
                            </a>
                            <div
                                class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1"
                                style="min-width: 12rem;"
                                id="user-dropdown"
                            >
                                <div class="block px-4 py-2 text-xs text-gray-500">
                                    {{ __( 'Gerer mon compte' ) }}
                                </div>
                                <a
                                    href="{{ route( 'profile.show' ) }}"
                                    class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                                >
                                    @lang( 'Profil' )
                                </a>
                                <form method="POST" action="{{ route( 'logout' ) }}">
                                    @csrf
                                    <a
                                        href="{{ route( 'logout' ) }}"
                                        onclick="event.preventDefault(); this.closest( 'form' ).submit();"
                                        class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                                    >
                                        @lang( 'Déconnexion' )
                                    </a>
                                </form>
                            </div>
                        </ul>
                    </div>
                </nav>
                @yield('dashboard-content')
                @yield('form')
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" charset="utf-8"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" charset="utf-8"></script>
        <script type="text/javascript">
            /* Sidebar - Side navigation menu on mobile/responsive mode */
            function toggleNavbar(collapseID) {
                document.getElementById(collapseID).classList.toggle("hidden");
                document.getElementById(collapseID).classList.toggle("bg-white");
                document.getElementById(collapseID).classList.toggle("m-2");
                document.getElementById(collapseID).classList.toggle("py-3");
                document.getElementById(collapseID).classList.toggle("px-6");
            }
            /* Function for dropdowns */
            function openDropdown(event, dropdownID) {
                let element = event.target;
                while (element.nodeName !== "A") {
                    element = element.parentNode;
                }
                var popper = new Popper(element, document.getElementById(dropdownID), {
                    placement: "bottom-end"
                });
                document.getElementById(dropdownID).classList.toggle("hidden");
                document.getElementById(dropdownID).classList.toggle("block");
            }


            (function() {
                /* Add current date to the footer */
                // document.getElementById("javascript-date").innerHTML = new Date().getFullYear();
                /* Chart initialisations */
                /* Line Chart */
                var config = {
                    type: "line",
                    data: {
                        labels: [
                            "January",
                            "February",
                            "March",
                            "April",
                            "May",
                            "June",
                            "July"
                        ],
                        datasets: [
                            {
                                label: new Date().getFullYear(),
                                backgroundColor: "#4c51bf",
                                borderColor: "#4c51bf",
                                data: [65, 78, 66, 44, 56, 67, 75],
                                fill: false
                            },
                            {
                                label: new Date().getFullYear() - 1,
                                fill: false,
                                backgroundColor: "#ed64a6",
                                borderColor: "#ed64a6",
                                data: [40, 68, 86, 74, 56, 60, 87]
                            }
                        ]
                    },
                    options: {
                    maintainAspectRatio: false,
                    responsive: true,
                    title: {
                    display: false,
                    text: "Sales Charts",
                    fontColor: "white"
                    },
                    legend: {
                    labels: {
                        fontColor: "white"
                    },
                    align: "end",
                    position: "bottom"
                    },
                    tooltips: {
                    mode: "index",
                    intersect: false
                    },
                    hover: {
                    mode: "nearest",
                    intersect: true
                    },
                    scales: {
                    xAxes: [
                        {
                        ticks: {
                            fontColor: "rgba(255,255,255,.7)"
                        },
                        display: true,
                        scaleLabel: {
                            display: false,
                            labelString: "Month",
                            fontColor: "white"
                        },
                        gridLines: {
                            display: false,
                            borderDash: [2],
                            borderDashOffset: [2],
                            color: "rgba(33, 37, 41, 0.3)",
                            zeroLineColor: "rgba(0, 0, 0, 0)",
                            zeroLineBorderDash: [2],
                            zeroLineBorderDashOffset: [2]
                        }
                        }
                    ],
                    yAxes: [
                        {
                        ticks: {
                            fontColor: "rgba(255,255,255,.7)"
                        },
                        display: true,
                        scaleLabel: {
                            display: false,
                            labelString: "Value",
                            fontColor: "white"
                        },
                        gridLines: {
                            borderDash: [3],
                            borderDashOffset: [3],
                            drawBorder: false,
                            color: "rgba(255, 255, 255, 0.15)",
                            zeroLineColor: "rgba(33, 37, 41, 0)",
                            zeroLineBorderDash: [2],
                            zeroLineBorderDashOffset: [2]
                        }
                        }
                    ]
                    }
                }
                };
                var ctx = document.getElementById("line-chart").getContext("2d");
                window.myLine = new Chart(ctx, config);

                /* Bar Chart */
                config = {
                type: "bar",
                data: {
                    labels: [
                    "January",
                    "February",
                    "March",
                    "April",
                    "May",
                    "June",
                    "July"
                    ],
                    datasets: [
                    {
                        label: new Date().getFullYear(),
                        backgroundColor: "#ed64a6",
                        borderColor: "#ed64a6",
                        data: [30, 78, 56, 34, 100, 45, 13],
                        fill: false,
                        barThickness: 8
                    },
                    {
                        label: new Date().getFullYear() - 1,
                        fill: false,
                        backgroundColor: "#4c51bf",
                        borderColor: "#4c51bf",
                        data: [27, 68, 86, 74, 10, 4, 87],
                        barThickness: 8
                    }
                    ]
                },
                options: {
                    maintainAspectRatio: false,
                    responsive: true,
                    title: {
                    display: false,
                    text: "Orders Chart"
                    },
                    tooltips: {
                    mode: "index",
                    intersect: false
                    },
                    hover: {
                    mode: "nearest",
                    intersect: true
                    },
                    legend: {
                    labels: {
                        fontColor: "rgba(0,0,0,.4)"
                    },
                    align: "end",
                    position: "bottom"
                    },
                    scales: {
                    xAxes: [
                        {
                        display: false,
                        scaleLabel: {
                            display: true,
                            labelString: "Month"
                        },
                        gridLines: {
                            borderDash: [2],
                            borderDashOffset: [2],
                            color: "rgba(33, 37, 41, 0.3)",
                            zeroLineColor: "rgba(33, 37, 41, 0.3)",
                            zeroLineBorderDash: [2],
                            zeroLineBorderDashOffset: [2]
                        }
                        }
                    ],
                    yAxes: [
                        {
                        display: true,
                        scaleLabel: {
                            display: false,
                            labelString: "Value"
                        },
                        gridLines: {
                            borderDash: [2],
                            drawBorder: false,
                            borderDashOffset: [2],
                            color: "rgba(33, 37, 41, 0.2)",
                            zeroLineColor: "rgba(33, 37, 41, 0.15)",
                            zeroLineBorderDash: [2],
                            zeroLineBorderDashOffset: [2]
                        }
                        }
                    ]
                    }
                }
                };
                ctx = document.getElementById("bar-chart").getContext("2d");
                window.myBar = new Chart(ctx, config);
            })();
        </script>
    </body>
</html>

{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
</h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        </div>
    </div>
</div>
</x-app-layout> --}}
