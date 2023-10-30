<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="icon" href="images/guitar-logo.jpg" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="app.css">
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
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

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.scss">

    <title>Bozz-Innovations | find your dream guitar</title>
</head>

<body class="mb-48 bg-dark text-white">
    <nav class="flex justify-between items-center mb-3 bg-dark">
        <a href="/php-example/public"><img class="h-22 w-24" src="{{ asset('images/guitar-logo.jpg') }}" alt=""
                class="logo" /></a>
        <ul class="flex space-x-6 mr-6 text-lg">

            @auth

                <li>
                    <span class="text-warning font-bold text-uppercase">
                        Welcome {{ auth()->user()->name }}
                    </span>
                </li>
                <li>
                    <a href="/php-example/public/listings/manage" class="text-warning hover:text-laravel"><i class="fa-solid fa-gear"></i>
                        Manage Listings</a>
                </li>
                <li>
                    <form class="inline" method="POST" action="/php-example/public/logout">
                        @csrf
                        <button type="submit" class="text-warning hover:text-laravel">
                            <i class="text-warning hover:text-laravel fa-solid fa-door-closed"></i> Logout
                        </button>
                    </form>
                </li>

            @else

                {{-- <li>
                    <a href="/php-example/public/register" class="text-success hover:text-warning"><i class="fa-solid fa-user-plus"></i>
                        Register</a>
                </li> --}}
                <li>
                    <a href="/php-example/public/register" class=" text-warning "><i class="fa-solid fa-user-plus"></i>
                        Register</a>
                </li>
                <li>
                    <a href="/php-example/public/login" class=" text-warning hover:text-laravel"><i
                            class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login</a>
                </li>

            @endauth

        </ul>
    </nav>

    <main>
        {{ $slot }}
    </main>

    <footer
        class="absolute bottom-50 left-0 w-full flex items-center justify-start font-bold text-warning bg-dark h-24 mt-24 opacity-90 md:justify-center">
        <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>

        {{-- <a href="/php-example/public/listings/create" class="absolute top-1/3 right-10 bg-success text-dark 
        hover:text-white py-2 px-5">Post Job</a> --}}
    </footer>

    <x-flash-message></x-flash-message>
</body>

</html>
