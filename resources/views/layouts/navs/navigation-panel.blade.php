    @php
        $links = [
            [
                'title' => 'Articles',
                'url' => route('dashboard'),
                'icon' => 'fa-solid fa-gauge-high',
                'active' => request()->routeIs('dashboard')
            ],
    ];
    @endphp

    @include('layouts.navs.sidebar-panel')

    <div class="w-full min-h-screen bg-gray-100 dark:bg-gray-900">
        <div class="flex-1">
            <nav  class="sticky top-0 z-50 bg-white border-b border-gray-100 dark:bg-gray-800 dark:border-gray-700">
                <!-- Primary Navigation Menu -->
                <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">

                        <div class="flex">

                            <div class="items-center hidden mr-2 md:flex">
                                <button @click="openSidebar = ! openSidebar" class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400">
                                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                        <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                    </svg>
                                </button>
                            </div>

                            <!-- Logo -->
                            <div class="flex items-center shrink-0">
                                <a href="{{ route('dashboard') }}">
                                    <x-application-mark class="block w-auto h-9" />
                                </a>
                            </div>

                            <!-- Navigation Links -->
                            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                @foreach ( $links as $link )
                                    <x-nav-link href="{{ $link['url']  }}" :active="$link['active']" >
                                        {{ $link['title'] }}
                                    </x-nav-link>
                                @endforeach
                            </div>
                        </div>

                        <div class="hidden sm:flex sm:items-center sm:ml-6">

                            <!-- Settings Dropdown -->
                            @auth
                                <div class="relative ml-3">
                                    <x-dropdown align="right" width="48">
                                        <x-slot name="trigger">
                                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                                <button class="flex text-sm transition border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300">
                                                    <img class="object-cover w-8 h-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                                </button>
                                            @else
                                                <span class="inline-flex rounded-md">
                                                    <button type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out bg-white border border-transparent rounded-md dark:text-gray-400 dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none focus:bg-gray-50 dark:focus:bg-gray-700 active:bg-gray-50 dark:active:bg-gray-700">
                                                        {{ Auth::user()->name }}

                                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                        </svg>
                                                    </button>
                                                </span>
                                            @endif
                                        </x-slot>

                                        <x-slot name="content">
                                            <!-- Account Management -->
                                            <div class="block px-4 py-2 text-xs text-gray-400">
                                                {{ __('Manage Account') }}
                                            </div>

                                            <x-dropdown-link href="{{ route('profile.show') }}">
                                                {{ __('Profile') }}
                                            </x-dropdown-link>

                                            <x-dropdown-link href="{{ route('admin.posts.index') }}">
                                                {{ __('Panel Posts') }}
                                            </x-dropdown-link>


                                            <div class="border-t border-gray-200 dark:border-gray-600"></div>

                                            <!-- Authentication -->
                                            <form method="POST" action="{{ route('logout') }}" x-data>
                                                @csrf

                                                <x-dropdown-link href="{{ route('logout') }}"
                                                        @click.prevent="$root.submit();">
                                                    {{ __('Log Out') }}
                                                </x-dropdown-link>
                                            </form>
                                        </x-slot>
                                    </x-dropdown>
                                </div>
                            @else
                                @if (Route::has('login'))
                                <div class="z-10 p-6 text-right sm:fixed sm:top-0 sm:right-0">
                                    @auth
                                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                    @else
                                        <a href="{{ route('login') }}" class="font-semibold text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                        @endif
                                    @endauth
                                </div>
                                @endif
                            @endauth
                        </div>

                        <!-- Hamburger -->
                        <div class="flex items-center -mr-2 sm:hidden">
                            <button @click="open = ! open" class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400">
                                <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                    <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Responsive Navigation Menu -->
                <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
                    <div class="pt-2 pb-3 space-y-1">
                        @foreach ( $links as $link )
                            <x-responsive-nav-link href="{{ $link['url'] }}" :active="$link['active']">
                                {{ $link['title'] }}
                            </x-responsive-nav-link>
                        @endforeach
                        @guest
                            <x-responsive-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')">
                                {{ __('Login') }}
                            </x-responsive-nav-link>
                        @endguest
                    </div>

                    <!-- Responsive Settings Options -->
                    @auth
                        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
                            <div class="flex items-center px-4">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <div class="mr-3 shrink-0">
                                        <img class="object-cover w-10 h-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                    </div>
                                @endif

                                <div>
                                    <div class="text-base font-medium text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                                    <div class="text-sm font-medium text-gray-500">{{ Auth::user()->email }}</div>
                                </div>
                            </div>

                            <div class="mt-3 space-y-1">
                                <!-- Account Management -->
                                <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                                    {{ __('Profile') }}
                                </x-responsive-nav-link>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf
                                    <x-responsive-nav-link href="{{ route('logout') }}"
                                                @click.prevent="$root.submit();">
                                        {{ __('Log Out') }}
                                    </x-responsive-nav-link>
                                </form>

                                <!-- Team Management -->
                                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                                    <div class="border-t border-gray-200 dark:border-gray-600"></div>

                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Team') }}
                                    </div>

                                    <!-- Team Settings -->
                                    <x-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                                        {{ __('Team Settings') }}
                                    </x-responsive-nav-link>

                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                        <x-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                                            {{ __('Create New Team') }}
                                        </x-responsive-nav-link>
                                    @endcan

                                    <!-- Team Switcher -->
                                    @if (Auth::user()->allTeams()->count() > 1)
                                        <div class="border-t border-gray-200 dark:border-gray-600"></div>

                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Switch Teams') }}
                                        </div>

                                        @foreach (Auth::user()->allTeams() as $team)
                                            <x-switchable-team :team="$team" component="responsive-nav-link" />
                                        @endforeach
                                    @endif
                                @endif
                            </div>
                        </div>
                    @endauth
                </div>
            </nav>

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow dark:bg-gray-800">
                    <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <div class="px-4 py-6 mx-auto text-gray-800 max-w-7xl sm:px-6 lg:px-8 dark:text-gray-400">

                {{-- Page Content --}}
                {{ $slot }}

            </div>
        </div>
        </div>
