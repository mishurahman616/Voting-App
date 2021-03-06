<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Voting App</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans bg-gray-100 text-gray-900 text-sm">
       <header class="flex items-center justify-between px-4 py-4">
        <a href="#">Voting App</a>
        <div class="flex items-center">
            @if (Route::has('login'))
            <div class="px-6 py-4 ">
                @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a href="{{route('logout')}}"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                </a>
                </form>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
            <a href="#">
                <img src={{asset("/images/Sample_User_Icon.png")}} alt="avatar" class="w-10 h-10 rounded-full">
            </a>
        </div>
       </header>
       <main class="container mx-auto max-w-custom flex">
            <div class="w-70 mr-5">
                Here will be Idea form. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, a perspiciatis! Fugiat nemo amet obcaecati tempora saepe in voluptates odit molestiae quis nobis voluptas commodi nostrum possimus itaque aliquid, eveniet delectus. Similique dolorum minima deserunt asperiores ducimus pariatur autem consequuntur nam, quidem, ipsam, accusamus sunt perspiciatis rerum aliquid eos dicta?
            </div>
            <div class="w-175">
                <nav class="flex items-center justify-between text-xs">
                    <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                        <li><a href="#" class="border-b-4 pb-3 border-blue-600">All Ideas(70)</a></li>
                        <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-600">Considering(7)</a></li>
                        <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-600">In Progress(15)</a></li>
                    </ul>
                    <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                        <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-600">Implemented(25)</a></li>
                        <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-600">Closed(10)</a></li>
                    </ul>
                </nav>
                <div class="mt-8">
                    {{$slot}}
                </div>
            </div>

       </main>

    </body>
</html>
