<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-1000  leading-tight">
            {{ __('welcome to the smart liberary') }}
        </h1>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   
            <h1> All Available books  </h1>

                    <table class="table table-bordered table-striped">
                        <tr>
                        <th>Book ID</th>
                        <th>Tittle</th>
                        <th>Author</th>
                        <th>Book Code</th>
                        <th>Available</th>
                        <th>Category_ID</th>
                        <th>Request</th>
                        </tr>
                         @foreach ($data as  $id=> $book)
                        <tr>
                            <td>{{ $book->id }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->code }}</td>  
                            <td>{{ $book->availability }}</td>
                            <td>{{ $book->category_id }}</td>
                            <td><a href="#" class="btn btn-primary btn-sn" >Reuqest</a></td>
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
    <div class="container">
        <div class="row">   
            <div class="col-8">
                
               
</body>
</html>