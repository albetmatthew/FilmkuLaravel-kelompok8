<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>{{ $title }}</title>
  </head>
  <body class="bg-dark ">
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
        <div class="container">
          <a class="navbar-brand" href="#">MIFILM</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
            </ul>
            <ul class="navbar-nav">
              <li class="nav-item dropdown ">
                @auth
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ auth()->user()->name }}
                </a>
                
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="/daftarfilm">Dashboard</a></li>
                    <li><a class="dropdown-item" href="/logout">Keluar</a></li>
                  </ul>
                @else
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav d-flex display-inline-block">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/login">Masuk</a>
                            
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/registration">Daftar</a>
                          </li>
                      </ul>
                </div>
                  
                @endauth
                
              </li>
            </ul>
          </div>
        </div>
      </nav>
    
      <div class="container">
        <div class="row">
            @foreach($films as $film)
            <div class="col-md-3 mb-4">
                <div class="card">
                    <div class="position-absolute px-3 py-2 " style="background-color: rgba(0, 0, 0, 0.5)"
                    >
                    <a href="/categories/{{ $film->category->slug }}" class="text-white text-decoration-none">{{ $film->category->name}}</a>
                    </div>
                    <img src="https://source.unsplash.com/500x400?{{ $film->category->name }}" class="card-img-top" alt="{{ $film->category->name }}">
                    <div class="card-body">
                      <h5 class="card-title" >{{ $film->title }}</h5>
                      
                <small class="text-muted">
                     <p>By. <a  href="/author/{{ $film->publisher->username }}" class="text-decoration-none">{{ $film->publisher->name }}</a> {{ $film->created_at->diffForHumans() }}</p>
                </small>
                    {{-- Deskripsi singkat film --}}
                      {{-- <p class="card-text">{{ $film->excerpt }}</p> --}}
                      <a href="/films/{{ $film->slug}}" class="btn bg-dark text-white w-100">Detail Film</a>
                    </div>
                  </div>
                  
            </div>
            @endforeach
        </div>
    </div>



  
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>