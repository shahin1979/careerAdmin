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
                <a href="/" class="flex items-center py-8 px-4 lg:px-8 xl:px-16">
                    <img
                        class="w-8 h-8 flex-shrink-0 transition-all duration-300 lg:w-12 lg:h-12"
                        :class="{ 'w-12 h-12': navIsOpen }"
                        src="/img/logomark.min.svg"
                        alt="Laravel"
                    >
                    <img
                        x-show="navIsOpen"
                        x-cloak
                        class="ml-4 transition-all duration-300 lg:hidden"
                        x-transition:enter="duration-250 ease-out"
                        x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100"
                        x-transition:leave="duration-250 ease-in"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        src="/img/logotype.min.svg"
                        alt="Laravel"
                    >
                    <img
                        src="/img/logotype.min.svg"
                        alt="Laravel"
                        class="hidden ml-4 lg:block"
                    >
                </a>
                <div class="overflow-y-auto overflow-x-hidden px-4 lg:overflow-hidden lg:px-8 xl:px-16">
                    <nav x-show="navIsOpen" x-cloak class="mt-4 lg:hidden">
                        <div class="docs_sidebar">
                            <ul>
                                <li>
                                    <h2>Prologue</h2>
                                    <ul>
                                        <li><a href="/docs/8.x/releases">Release Notes</a></li>
                                        <li><a href="/docs/8.x/upgrade">Upgrade Guide</a></li>
                                        <li><a href="/docs/8.x/contributions">Contribution Guide</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <h2>Getting Started</h2>
                                    <ul>
                                        <li><a href="/docs/8.x/installation">Installation</a></li>
                                        <li><a href="/docs/8.x/configuration">Configuration</a></li>
                                        <li><a href="/docs/8.x/structure">Directory Structure</a></li>
                                        <li><a href="/docs/8.x/starter-kits">Starter Kits</a></li>
                                        <li><a href="/docs/8.x/deployment">Deployment</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <h2>Architecture Concepts</h2>
                                    <ul>
                                        <li><a href="/docs/8.x/lifecycle">Request Lifecycle</a></li>
                                        <li><a href="/docs/8.x/container">Service Container</a></li>
                                        <li><a href="/docs/8.x/providers">Service Providers</a></li>
                                        <li><a href="/docs/8.x/facades">Facades</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <h2>The Basics</h2>
                                    <ul>
                                        <li><a href="/docs/8.x/routing">Routing</a></li>
                                        <li><a href="/docs/8.x/middleware">Middleware</a></li>
                                        <li><a href="/docs/8.x/csrf">CSRF Protection</a></li>
                                        <li><a href="/docs/8.x/controllers">Controllers</a></li>
                                        <li><a href="/docs/8.x/requests">Requests</a></li>
                                        <li><a href="/docs/8.x/responses">Responses</a></li>
                                        <li><a href="/docs/8.x/views">Views</a></li>
                                        <li><a href="/docs/8.x/blade">Blade Templates</a></li>
                                        <li><a href="/docs/8.x/urls">URL Generation</a></li>
                                        <li><a href="/docs/8.x/session">Session</a></li>
                                        <li><a href="/docs/8.x/validation">Validation</a></li>
                                        <li><a href="/docs/8.x/errors">Error Handling</a></li>
                                        <li><a href="/docs/8.x/logging">Logging</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <h2>Digging Deeper</h2>
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
                                    <h2>Security</h2>
                                    <ul>
                                        <li><a href="/docs/8.x/authentication">Authentication</a></li>
                                        <li><a href="/docs/8.x/authorization">Authorization</a></li>
                                        <li><a href="/docs/8.x/verification">Email Verification</a></li>
                                        <li><a href="/docs/8.x/encryption">Encryption</a></li>
                                        <li><a href="/docs/8.x/hashing">Hashing</a></li>
                                        <li><a href="/docs/8.x/passwords">Password Reset</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <h2>Database</h2>
                                    <ul>
                                        <li><a href="/docs/8.x/database">Getting Started</a></li>
                                        <li><a href="/docs/8.x/queries">Query Builder</a></li>
                                        <li><a href="/docs/8.x/pagination">Pagination</a></li>
                                        <li><a href="/docs/8.x/migrations">Migrations</a></li>
                                        <li><a href="/docs/8.x/seeding">Seeding</a></li>
                                        <li><a href="/docs/8.x/redis">Redis</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <h2>Eloquent ORM</h2>
                                    <ul>
                                        <li><a href="/docs/8.x/eloquent">Getting Started</a></li>
                                        <li><a href="/docs/8.x/eloquent-relationships">Relationships</a></li>
                                        <li><a href="/docs/8.x/eloquent-collections">Collections</a></li>
                                        <li><a href="/docs/8.x/eloquent-mutators">Mutators / Casts</a></li>
                                        <li><a href="/docs/8.x/eloquent-resources">API Resources</a></li>
                                        <li><a href="/docs/8.x/eloquent-serialization">Serialization</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <h2>Testing</h2>
                                    <ul>
                                        <li><a href="/docs/8.x/testing">Getting Started</a></li>
                                        <li><a href="/docs/8.x/http-tests">HTTP Tests</a></li>
                                        <li><a href="/docs/8.x/console-tests">Console Tests</a></li>
                                        <li><a href="/docs/8.x/dusk">Browser Tests</a></li>
                                        <li><a href="/docs/8.x/database-testing">Database</a></li>
                                        <li><a href="/docs/8.x/mocking">Mocking</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <h2>Packages</h2>
                                    <ul>
                                        <li><a href="/docs/8.x/billing">Cashier (Stripe)</a></li>
                                        <li><a href="/docs/8.x/cashier-paddle">Cashier (Paddle)</a></li>
                                        <li><a href="/docs/8.x/dusk">Dusk</a></li>
                                        <li><a href="/docs/8.x/envoy">Envoy</a></li>
                                        <li><a href="/docs/8.x/fortify">Fortify</a></li>
                                        <li><a href="/docs/8.x/homestead">Homestead</a></li>
                                        <li><a href="/docs/8.x/horizon">Horizon</a></li>
                                        <li><a href="https://jetstream.laravel.com">Jetstream</a></li>
                                        <li><a href="/docs/8.x/passport">Passport</a></li>
                                        <li><a href="/docs/8.x/sail">Sail</a></li>
                                        <li><a href="/docs/8.x/sanctum">Sanctum</a></li>
                                        <li><a href="/docs/8.x/scout">Scout</a></li>
                                        <li><a href="/docs/8.x/socialite">Socialite</a></li>
                                        <li><a href="/docs/8.x/telescope">Telescope</a></li>
                                        <li><a href="/docs/8.x/valet">Valet</a></li>
                                    </ul>
                                </li>
                                <li><a href="/api/8.x">API Documentation</a></li>
                            </ul>
                        </div>
                    </nav>
                    <nav id="indexed-nav" class="hidden lg:block lg:mt-4">
                        <div class="docs_sidebar">
                            <ul>
                                <li>
                                    <h2>Prologue</h2>
                                    <ul>
                                        <li><a href="/docs/8.x/releases">Release Notes</a></li>
                                        <li><a href="/docs/8.x/upgrade">Upgrade Guide</a></li>
                                        <li><a href="/docs/8.x/contributions">Contribution Guide</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <h2>Getting Started</h2>
                                    <ul>
                                        <li><a href="/docs/8.x/installation">Installation</a></li>
                                        <li><a href="/docs/8.x/configuration">Configuration</a></li>
                                        <li><a href="/docs/8.x/structure">Directory Structure</a></li>
                                        <li><a href="/docs/8.x/starter-kits">Starter Kits</a></li>
                                        <li><a href="/docs/8.x/deployment">Deployment</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <h2>Architecture Concepts</h2>
                                    <ul>
                                        <li><a href="/docs/8.x/lifecycle">Request Lifecycle</a></li>
                                        <li><a href="/docs/8.x/container">Service Container</a></li>
                                        <li><a href="/docs/8.x/providers">Service Providers</a></li>
                                        <li><a href="/docs/8.x/facades">Facades</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <h2>The Basics</h2>
                                    <ul>
                                        <li><a href="/docs/8.x/routing">Routing</a></li>
                                        <li><a href="/docs/8.x/middleware">Middleware</a></li>
                                        <li><a href="/docs/8.x/csrf">CSRF Protection</a></li>
                                        <li><a href="/docs/8.x/controllers">Controllers</a></li>
                                        <li><a href="/docs/8.x/requests">Requests</a></li>
                                        <li><a href="/docs/8.x/responses">Responses</a></li>
                                        <li><a href="/docs/8.x/views">Views</a></li>
                                        <li><a href="/docs/8.x/blade">Blade Templates</a></li>
                                        <li><a href="/docs/8.x/urls">URL Generation</a></li>
                                        <li><a href="/docs/8.x/session">Session</a></li>
                                        <li><a href="/docs/8.x/validation">Validation</a></li>
                                        <li><a href="/docs/8.x/errors">Error Handling</a></li>
                                        <li><a href="/docs/8.x/logging">Logging</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <h2>Digging Deeper</h2>
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
                                    <h2>Security</h2>
                                    <ul>
                                        <li><a href="/docs/8.x/authentication">Authentication</a></li>
                                        <li><a href="/docs/8.x/authorization">Authorization</a></li>
                                        <li><a href="/docs/8.x/verification">Email Verification</a></li>
                                        <li><a href="/docs/8.x/encryption">Encryption</a></li>
                                        <li><a href="/docs/8.x/hashing">Hashing</a></li>
                                        <li><a href="/docs/8.x/passwords">Password Reset</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <h2>Database</h2>
                                    <ul>
                                        <li><a href="/docs/8.x/database">Getting Started</a></li>
                                        <li><a href="/docs/8.x/queries">Query Builder</a></li>
                                        <li><a href="/docs/8.x/pagination">Pagination</a></li>
                                        <li><a href="/docs/8.x/migrations">Migrations</a></li>
                                        <li><a href="/docs/8.x/seeding">Seeding</a></li>
                                        <li><a href="/docs/8.x/redis">Redis</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <h2>Eloquent ORM</h2>
                                    <ul>
                                        <li><a href="/docs/8.x/eloquent">Getting Started</a></li>
                                        <li><a href="/docs/8.x/eloquent-relationships">Relationships</a></li>
                                        <li><a href="/docs/8.x/eloquent-collections">Collections</a></li>
                                        <li><a href="/docs/8.x/eloquent-mutators">Mutators / Casts</a></li>
                                        <li><a href="/docs/8.x/eloquent-resources">API Resources</a></li>
                                        <li><a href="/docs/8.x/eloquent-serialization">Serialization</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <h2>Testing</h2>
                                    <ul>
                                        <li><a href="/docs/8.x/testing">Getting Started</a></li>
                                        <li><a href="/docs/8.x/http-tests">HTTP Tests</a></li>
                                        <li><a href="/docs/8.x/console-tests">Console Tests</a></li>
                                        <li><a href="/docs/8.x/dusk">Browser Tests</a></li>
                                        <li><a href="/docs/8.x/database-testing">Database</a></li>
                                        <li><a href="/docs/8.x/mocking">Mocking</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <h2>Packages</h2>
                                    <ul>
                                        <li><a href="/docs/8.x/billing">Cashier (Stripe)</a></li>
                                        <li><a href="/docs/8.x/cashier-paddle">Cashier (Paddle)</a></li>
                                        <li><a href="/docs/8.x/dusk">Dusk</a></li>
                                        <li><a href="/docs/8.x/envoy">Envoy</a></li>
                                        <li><a href="/docs/8.x/fortify">Fortify</a></li>
                                        <li><a href="/docs/8.x/homestead">Homestead</a></li>
                                        <li><a href="/docs/8.x/horizon">Horizon</a></li>
                                        <li><a href="https://jetstream.laravel.com">Jetstream</a></li>
                                        <li><a href="/docs/8.x/passport">Passport</a></li>
                                        <li><a href="/docs/8.x/sail">Sail</a></li>
                                        <li><a href="/docs/8.x/sanctum">Sanctum</a></li>
                                        <li><a href="/docs/8.x/scout">Scout</a></li>
                                        <li><a href="/docs/8.x/socialite">Socialite</a></li>
                                        <li><a href="/docs/8.x/telescope">Telescope</a></li>
                                        <li><a href="/docs/8.x/valet">Valet</a></li>
                                    </ul>
                                </li>
                                <li><a href="/api/8.x">API Documentation</a></li>
                            </ul>
                        </div>
                    </nav>
                    <div :class="{ 'hidden': !navIsOpen }" x-cloak class="lg:block">
                        <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CKYILK3E&placement=laravelcom" id="_carbonads_js"></script>
                    </div>
                </div>
                <div class="sticky bottom-0 flex-1 flex flex-col justify-end lg:hidden">
                    <div class="py-4 px-4 bg-white">
                        <button class="relative ml-1 w-6 h-6 text-red-600 lg:hidden focus:outline-none focus:shadow-outline" aria-label="Menu" @click.prevent="navIsOpen = !navIsOpen">
                            <svg x-show.transition.opacity="! navIsOpen" class="absolute inset-0 w-6 h-6" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                            <svg x-show.transition.opacity="navIsOpen" x-cloak class="absolute inset-0 w-6 h-6" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                        </button>
                    </div>
                </div>
            </div>
        </aside>
    </div>
</div>

<footer>


</footer>

<script src="{!! asset('assets/js/app.js') !!}"></script>

@stack('scripts')
</body>
</html>
