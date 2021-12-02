<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Admin Dashboard</title>
    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
      rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous">
    </script>
    <link href="/css/filmlist.css" rel="stylesheet" />
    </head>
    <body>
        <div class="page">
            <div class="sidebar">
                <div class="sidebar-header">
                    <div class="sidebar-logo-container">
                        <div class="logo-container">
                        
                        </div>
                        <div class="brand-name-container">
                            <p class="brand-name py-2">
                                {{ auth()->user()->name }}<br />
                                
                            </p>
                        </div>
                    </div>
                </div>
                <div class="sidebar-body">
                    <ul class="navigation-list">
                        <li class="navigation-list-item active">
                            <a class="navigation-link" href="/dashboard/films/">
                                <div class="row">
                                    <div class="col-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16">
                                                <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z"/>
                                            </svg>
                                    </div>
                                    <div class="col-9">
                                       Dashboard
                                    </div>
                                </div>
                            </a>
                        </li>
                        {{-- <li class="navigation-list-item active">
                            <a class="navigation-link" href="#">
                                <div class="row">
                                    <div class="col-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16">
                                                <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z"/>
                                            </svg>
                                    </div>
                                    <div class="col-9">
                                        Film Saya
                                    </div>
                                </div>
                            </a>
                        </li> --}}

                    </ul>
                </div>
            </div>
            <div class="content">
                <div class="navigationBar">
                    <button id="sidebarToggle" class="btn sidebarToggle">
                        <i class="fas fa-bars"></i>
                    </button> &nbsp; &nbsp; &nbsp;
                    <h3>MIFILM</h3>
                </div>
                
                <div class="container-fluid mx-auto">
                  <div class="row">
                    <h4>Tambah Film</h4>
                  </div>
                  <div class="row justify-content-center">
                    <div class="col-lg-10">
                      {{-- <form method="post" action="simpan">
                     
                
                        <div class="form-outline mb-4">
                          <label class="form-label" for="form7Example1">Judul Film :</label>
                          <input type="text" id="form7Example1" class="form-control" />
                        </div>
                      
                        <div class="row mb-4">
                          <div class="col">
                            <div class="form-outline">
                              <label class="form-label" for="form6Example1">Genre :</label>
                              <input type="text" id="form6Example1" class="form-control" />
                            </div>
                          </div>
                      
                          <div class="col">
                            <div class="form-outline">
                              <label class="form-label" for="form6Example2">Studio :</label>
                              <input type="text" id="form6Example2" class="form-control" />
                            </div>
                          </div>
                        </div>
                      
                        <div class="row mb-4">
                          <div class="col">
                            <div class="form-outline mb-4">
                              <label class="form-label" for="form6Example3">Penulis : </label>
                              <input type="text" id="form6Example3" class="form-control" />
                            </div>
                          </div>
                      
                          <div class="col">
                            <div class="form-outline mb-4">
                              <label class="form-label" for="form6Example4">Tahun :</label>
                              <input type="text" id="form6Example4" class="form-control" />
                            </div>
                          </div>
                        </div>
                      
                        <div class="row mb-4">
                          <div class="col">
                        <div class="form-outline mb-4">
                          <label class="form-label" for="form6Example5">Durasi :</label>
                          <input type="time" id="form6Example5" class="form-control" />
                        </div>
                      </div>
                      
                        <div class="col">
                        <div class="form-outline mb-4">
                          <label class="form-label" for="form6Example6">Negara :</label>
                          <input type="text" id="form6Example6" class="form-control" />
                        </div>
                      </div>
                      </div>
                      
                        <div class="row mb-4">
                          <div class="col">
                            <div class="form-outline mb-4">
                              <label class="form-label" for="form6Example7">Gambar : </label>
                              <input type="file" id="form6Example7" class="form-control" />
                            </div>
                          </div>
                      
                        <div class="col">
                        <div class="form-outline mb-4">
                          <label class="form-label" for="form6Example8">Sinopsis :</label>
                          <textarea class="form-control" id="form6Example8" rows="6"></textarea>
                        </div>
                        </div>
                      
                        <button type="submit" class="btn btn-primary mb-4">Tambahkan</button>
                        <button type="submit" class="btn btn-warning mb-4">Batal</button>
                      </form> --}}

                      <form method="posts" action="/dashboard/posts">
                        @csrf
                        <div class="mb-3">
                          <label for="title" class="form-label">Title</label>
                          <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control" id="slug" name="slug">
                        </div>
                      
                        <button type="submit" class="btn btn-primary">Create Post</button>
                      </form>
                     
                    </div>  
                  </div>
                  
                </div>
            </div>
        </div>
    <script>
        let sidebarToggle = document.querySelector(".sidebarToggle");
        sidebarToggle.addEventListener("click", function(){
            document.querySelector("body").classList.toggle("active");
            document.getElementById("sidebarToggle").classList.toggle("active");
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    </body>
</html>