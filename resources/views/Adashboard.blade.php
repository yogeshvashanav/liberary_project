<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome TO the smart liberary') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in as Admin!") }}
                    <h1> All Available books  </h1>
                    <table class="table table-bordered table-striped">
                        <tr>
                        <th>Book ID</th>
                        <th>Tittle</th>
                        <th>Author</th>
                        <th>Book Code</th>
                        <th>Available</th>
                        <th>Category_ID</th>
                        <th>Remove</th>
                        </tr>
                         @foreach ($data as $id => $book)
                        <tr>
                            <td>{{ $book->id }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->code }}</td>  
                            <td>{{ $book->availability }}</td>
                            <td>{{ $book->category_id }}</td>
                            <td><a href="{{ route('delete', $book->id) }}" class="btn btn-primary btn-sm">Delete</a></td>
                        </tr>
                        @endforeach  
                    </table>
    
                </div>
            </div>
        </div>
    </div> 
 </x-app-layout> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    
         

</body>
</html>


 {{-- @foreach ($data as $book)
    <h3>
        {{ $book->id }} |
        {{ $book->title }} |
        {{ $book->author }} |
        {{ $book->code }} |
        {{ $book->availability }} |
        {{ $book->category_id }} |
        {{-- {{ $book->cate }} | --}}
    {{-- </h3> 
         @endforeach  --}} 


         {{-- <nav class="navbar navbar-expand-lg ">
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
                {{-- <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#">Home</a>
                </li> --}}
                {{-- <li class="nav-item active">
                  <form method="POST" action="{{ route('logout') }}">
                      @csrf --}}
                  {{-- <a href="route('logout')"
                          class="nav-link active" --}}
                          {{-- onclick="event.preventDefault();
                          this.closest('form').submit();">
                         Logout
                      </a>
                </li>
            </ul>
          </div>
        </div>
      </nav> --}} --}} --}}
      {{-- insilize system code --}}

    
        
   
    {{-- <div class="container">
        <div class="row">   
            <div class="col-8">
