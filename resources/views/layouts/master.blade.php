<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>NRBG Career</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">

{{--    <link rel="canonical" href="https://laravel.com/docs/8.x/installation">--}}

<!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="/img/favicon/safari-pinned-tab.svg" color="#ff2d20">
    <link rel="shortcut icon" href="/img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#ff2d20">
    <meta name="msapplication-config" content="/img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="{!! asset('assets/css/style.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/app.css') !!}">

</head>
<body
    x-data="{
        navIsOpen: false,
        searchIsOpen: false,
        search: '',
    }"
    class="language-php h-full w-full font-sans text-gray-900 antialiased"
>

<div class="relative overflow-auto" id="docsScreen">
    <div class="relative lg:flex lg:items-start">
        <aside
            x-init="init()"
            x-data="{
                    navIsOpen: false,
                    init() {
                        this.$watch('navIsOpen', (val) => {
                            if (val) {
                                document.body.classList.add('overflow-hidden');
                            } else {
                                document.body.classList.remove('overflow-hidden');
                            }
                        });
                    }
                }"
            class="fixed top-0 bottom-0 left-0 z-20 h-full w-16 flex flex-col bg-gradient-to-b from-gray-100 to-white transition-all duration-300 overflow-hidden lg:sticky lg:w-80 lg:flex-shrink-0 lg:flex lg:justify-end lg:items-end 2xl:max-w-lg 2xl:w-full"
            :class="{ 'w-64': navIsOpen }"
            @click.away="navIsOpen = false"
            @keydown.window.escape="navIsOpen = false"
        >
            <div class="relative min-h-0 flex-1 flex flex-col xl:w-80">
                <a href="/home" class="flex items-center py-8 px-4 lg:px-8 xl:px-16">
                    {{--                    <img--}}
                    {{--                        class="w-8 h-8 flex-shrink-0 transition-all duration-300 lg:w-12 lg:h-12"--}}
                    {{--                        :class="{ 'w-12 h-12': navIsOpen }"--}}
                    {{--                        src="/img/logomark.min.svg"--}}
                    {{--                        alt="Laravel"--}}
                    {{--                    >--}}

                    <img
                        src="{!! asset('assets/images/logo_NRB_Global_Bank.jpg') !!}"
                        alt="NRBG"
                        class="hidden ml-4 lg:block"
                    >
                </a>
                <div class="overflow-y-auto overflow-x-hidden px-4 lg:overflow-hidden lg:px-8 xl:px-16">

                    <nav id="indexed-nav" class="hidden lg:block lg:mt-4">
                        <div class="docs_sidebar">
                            <ul>
                                <li>
                                    <h2>Security</h2>
                                    <ul>
                                        <li><a href="/docs/8.x/releases">Add User</a></li>
                                        <li><a href="/docs/8.x/upgrade">Change Password</a></li>
                                        <li><a href="/docs/8.x/contributions">Reset Password</a></li>
                                        <li><a href="/docs/8.x/contributions">Manage Permission</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <h2>Bangladesh Demography</h2>
                                    <ul>
                                        <li><a href="/docs/8.x/installation">Division</a></li>
                                        <li><a href="/docs/8.x/configuration">District</a></li>
                                        <li><a href="/docs/8.x/structure">Police Station</a></li>
                                        <li><a href="/docs/8.x/starter-kits">Post Office</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <h2>Education</h2>
                                    <ul>
                                        <li><a href="/docs/8.x/lifecycle">University</a></li>
                                        <li><a href="/docs/8.x/container">Subject</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <h2>Job Circular</h2>
                                    <ul>
                                        <li><a href="/docs/8.x/routing">Add Edit Jobs</a></li>
                                        <li><a href="/docs/8.x/middleware">Jobs Criteria</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <h2>Candidate Profile</h2>
                                    <ul>
                                        <li><a href="{!! url('profile/viewProfileIndex') !!}">View Profile</a></li>
{{--                                        <li><a href="/docs/8.x/routing">View CV</a></li>--}}
                                        <li><a href="/docs/8.x/middleware">Sorting CV</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <h2>Examination</h2>
                                    <ul>
                                        <li><a href="/docs/8.x/artisan">Artisan Console</a></li>
                                        <li><a href="/docs/8.x/broadcasting">Broadcasting</a></li>
                                        <li><a href="/docs/8.x/cache">Cache</a></li>
                                        <li><a href="/docs/8.x/collections">Collections</a></li>
                                        <li><a href="/docs/8.x/mix">Compiling Assets</a></li>
                                        <li><a href="/docs/8.x/contracts">Contracts</a></li>
                                        <li><a href="/docs/8.x/events">Events</a></li>
                                        <li><a href="/docs/8.x/filesystem">File Storage</a></li>
                                        <li><a href="/docs/8.x/helpers">Helpers</a></li>
                                        <li><a href="/docs/8.x/http-client">HTTP Client</a></li>
                                        <li><a href="/docs/8.x/localization">Localization</a></li>
                                        <li><a href="/docs/8.x/mail">Mail</a></li>
                                        <li><a href="/docs/8.x/notifications">Notifications</a></li>
                                        <li><a href="/docs/8.x/packages">Package Development</a></li>
                                        <li><a href="/docs/8.x/queues">Queues</a></li>
                                        <li><a href="/docs/8.x/scheduling">Task Scheduling</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <h2>Result Processing</h2>
                                    <ul>
                                        <li><a href="/docs/8.x/authentication">Authentication</a></li>
                                        <li><a href="/docs/8.x/authorization">Authorization</a></li>
                                        <li><a href="/docs/8.x/verification">Email Verification</a></li>
                                        <li><a href="/docs/8.x/encryption">Encryption</a></li>
                                        <li><a href="/docs/8.x/hashing">Hashing</a></li>
                                        <li><a href="/docs/8.x/passwords">Password Reset</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </nav>

                </div>
                {{--                <div class="sticky bottom-0 flex-1 flex flex-col justify-end lg:hidden">--}}
                {{--                    <div class="py-4 px-4 bg-white">--}}
                {{--                        <button class="relative ml-1 w-6 h-6 text-red-600 lg:hidden focus:outline-none focus:shadow-outline" aria-label="Menu" @click.prevent="navIsOpen = !navIsOpen">--}}
                {{--                            <svg x-show.transition.opacity="! navIsOpen" class="absolute inset-0 w-6 h-6" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>--}}
                {{--                            <svg x-show.transition.opacity="navIsOpen" x-cloak class="absolute inset-0 w-6 h-6" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>--}}
                {{--                        </button>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>
        </aside>

        <section class="flex-1 pl-20 lg:pl-0">
            <div class="max-w-screen-lg px-4 sm:px-16 lg:px-24">
                <header class="flex flex-col items-end lg:mt-8 lg:flex-row-reverse">
                    <div class="mt-8 w-full lg:mt-0 lg:w-64 lg:pl-12">
                        <div>
                            {{--                            <label class="text-gray-600 text-xs tracking-widest uppercase" for="version-switch">Version</label>--}}
                            <div x-data class="relative w-full bg-white border-b border-gray-600 border-opacity-50 transition-all duration-500 focus-within:border-gray-600">

                            </div>
                        </div>
                    </div>
                    <div x-data="searchComponent()" x-init="init()" class="relative mt-8 flex justify-end w-full lg:mt-0">
                        {{--                        FOR SPACE BETWEER SIDE BAR AND MAIN PAGE--}}
                        <div
                            class="relative w-full border-b border-gray-600 border-opacity-50 overflow-hidden transition-all duration-500 focus-within:border-gray-600"
                            @click="searchIsOpen = true"
                            @click.away="clear"
                            @keydown.window.escape="clear"
                            @keydown.window="handleSlashKey"
                        >
                            {{--                            --}}

                            <svg class="absolute inset-y-0 left-0 z-10 mt-1 w-5 h-5 text-gray-900 pointer-events-none" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>

                        </div>
                        <div x-show="hits.length" x-cloak class="absolute w-full mt-8 pt-px divide-y divide-gray-200 shadow-sm z-30">


                        </div>

                        <div x-show="search && ! hits.length" x-cloak class="absolute w-full mt-8 pt-px divide-y divide-gray-200 shadow-sm z-30">

                        </div>
                    </div>
                </header>

                <section class="mt-8 md:mt-16">
                    <section class="docs_main max-w-prose">

                        @yield('content')


                        {{--                        Main Section--}}

                    </section>
                </section>
            </div>
        </section>
    </div>
</div>

<footer>


</footer>

<script src="{!! asset('assets/js/app.js') !!}"></script>

@stack('scripts')
</body>
</html>
