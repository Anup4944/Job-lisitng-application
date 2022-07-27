<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job finder</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="//unpkg.com/alpinejs" defer></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#ef3b2d",
                        },
                    },
                },
            };
        </script>
        
    </head>
    <body class="mb-48">
        <nav class="flex justify-between items-center mb-4">
            <a href="/">
                 <img class="w-35 h-20 rounded bg-no-repeat bg-center p-2" src="https://images.unsplash.com/photo-1487528278747-ba99ed528ebc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"  alt="" class="logo"
            /></a>
            <ul class="flex space-x-6 mr-6 text-lg">
                @auth

                <li>
                   <span class="font-bold uppercase">Welcome</span> <span class="font-bold"> {{auth()->user()->name}}</span>
                </li>
                <li>
                    <a href="/listings/manage" class="hover:text-laravel"
                        ><i class="fa-solid fa-gear"></i>
                        Manage</a
                    >
                </li>
                <li>
                    <form class="inline" action="/logout" method="Post">
                        @csrf

                        <button type="submit">
                           <i class="fa-solid fa-door-closed"></i>
                           Logout
                        </button>

                    
                    </form>
                </li>
                @else


                <li>
                    <a href="/register" class="hover:text-laravel"
                        ><i class="fa-solid fa-user-plus"></i> Register</a
                    >
                </li>
                <li>
                    <a href="/login" class="hover:text-laravel"
                        ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login</a
                    >
                </li>
                @endauth
            </ul>
        </nav>
        <main>
            {{$slot}}

    {{-- @yield('content') --}}

        </main>
        <footer
        class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold  h-24 mt-24 opacity-90 md:justify-center"
    >
        <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>

        <a
            href="/listings/create"
            class="absolute top-1/3 right-10 bg-black text-white py-2 px-5"
            >Post an opening in your company</a
        >
    </footer>

    <x-flash-msg />
</body>
</html>
