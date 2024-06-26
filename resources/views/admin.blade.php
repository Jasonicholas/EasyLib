<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('home')}}">EasyLib</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="create-book">Add Book</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="create-category">Add category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="view-reader">Reader List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="view-book">Book List</a>
          </li>
        </ul> 
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
    
  <div class="m-5">
    
    <div class="flex-nowrap">
      <h1>Book List</h1>
      @foreach ($books as $book)
      <div class="col gx-4">
        <div class="card" style="width: 18rem;">
            <img src="{{asset('/storage/image/'.$book->Image)}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title">{{$book->Author}}</h4>
              <h2 class="card-title">{{$book->Title}}</h2>
              <p class="card-text">{{$book->PublicationDate}}</p>
              <p class="card-text">{{$book->Publisher}}</p>
              <p class="card-text">ISBN: {{$book->ISBN}}</p>
              <p class="card-text">Print length: {{$book->PrintLength}}</p>
              <p class="card-text">Category: {{$book->category->CategoryName}}</p>
              {{-- <a href="#" class="btn btn-primary">edit</a> --}}
              <a href="{{route('edit', $book->id)}}" class="btn btn-primary">Edit</a>
              <form action="{{route('delete', $book->id)}}" method="POST">
                @csrf
                @method('delete')
                <button class="btn btn-danger">Delete</button>
              </form>
            </div>
          </div>
        
      </div>
      @endforeach 
    </div>
    </div>
  
    
</body>
</html>
