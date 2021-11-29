<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>Update</title>
  </head>
  <body>
    <div class="container-fluid py-5 bg-dark text-white">
      <div class="container">
       
        
        <div class="offset-lg-2 col-lg-8">
        <form method="post" action="simpan">
          {{ csrf_field() }}

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

      <button type="submit" class="btn btn-primary mb-4">Update</button>
    </form>
  </div>
  </div>  
</div>
  </body>
</html>
