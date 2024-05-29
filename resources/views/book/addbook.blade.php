<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Add book</title>
</head>
<body>
   <div class="container">
    <div class="row">
        <div class="col-4">
            <h1>Add New Book</h1>
            <form action="{{route('addbook')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter book title">
                </div>
                <div class="md-3">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" class="form-control" id="author" name="author" placeholder="Enter book author">
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Book Code</label>
                    <input type="text" class="form-control" id="title" name="code" placeholder="Enter book code">
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">availability</label>
                    <input type="text" class="form-control" id="title" name="availability" placeholder="Enter book availability">
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">category</label>
                    <input type="text" class="form-control" id="title" name="category_id" placeholder="Enter book category_id">
                </div>
                {{-- <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <select type="text" class="form-control" id="title" name="category_id" placeholder="Enter book category_id">
                </div> --}}
               <div>
                <button type="submit" class="btn btn-warning">Submit</button>
               </div>
            </form>
          
        </div>
    </div>
   </div>
</body>
</html>