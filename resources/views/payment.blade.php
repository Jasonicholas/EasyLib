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
        <h1>{{$book->Title}}</h1>
        <div class="container-md">
          <div class="row flex-wrap">
            <div class="col">
              <div class="card" style="width: 18rem;">
                <img src="{{asset('/storage/image/'.$book->Image)}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h2 class="card-title">{{$book->Title}}</h2>
                  <h4 class="card-title">{{$book->Author}}</h4>
                  <p class="card-text">{{$book->PublicationDate}}</p>
                  <p class="card-text">{{$book->Publisher}}</p>
                  <p class="card-text">ISBN: {{$book->ISBN}}</p>
                  <p class="card-text">Print length: {{$book->PrintLength}}</p>
                  <p class="card-text">Category: {{$book->category->CategoryName}}</p>
                  {{-- <a href="#" class="btn btn-primary">edit</a> --}}
                  {{-- <a href="{{route('edit', $book->id)}}" class="btn btn-primary">Order</a> --}}
                </div>
              </div>
            </div>  
            <div class="col">
               <form action="">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="please use your full name">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Select shipping</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                          regular (1-2days)
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                          Instant (1-2hours)
                        </label>
                      </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Payment method</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                          Transfer virtual account
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            E-wallet
                        </label>
                      </div>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
               </form>
            </div>
        </div>
          
    </div>
</body>
</html>
