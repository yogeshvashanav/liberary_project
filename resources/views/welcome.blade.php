<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
       

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-color: burlywood;


                
            }
            /* .nav{
                background-color: aqua;
            } */
        </style>
    </head>
    <body>
        {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
         --}}
         
         <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                <div class="container">
                    <a class="navbar-brand" href="#">
                      <img src="{{asset('image/Logo.png')}}" height="60" width="80" alt="Bootstrap" width="30" height="24">
                    </a>
                  </div>
              <a class="navbar-brand" style="  font-style: italic; text-decoration: underline;
              color: #004499;" href="#">Y V Liberary</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="{{ route('login') }}">Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="{{ route('register') }}">Register</a>
                  </li>
                  
                </ul>
              </div>
            </div>
          </nav>
          
          <div class="container" style=" margin:10%; "  >
              <h2 style="color: black;"> Welcome to</h2>
              <h1 style="font-size: 6em; color: rgb(15, 18, 169);">Smart</h1>
              <h2 style="color: black;"> Liberary Management System</h2>
              
            </div>
            <div style="position: absolute; top: 50%; left:60%;  transform: translate(-50%, -50%); background-color: none; padding: 10px;">
            <img src="{{asset('image/Logo.png')}}" class="img-fluid" alt="background" style=" ">
            </div>
    </body>
</html>
