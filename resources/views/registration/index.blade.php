<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="p2/css/mdb.min.css">
    <link rel="stylesheet" href="css/style2.css">
    <title>Registrasi</title>
</head>
<body>
    <div class="card card-registrasi">
        <div class="card-title">
            <h2>REGISTRASI</h2>
        </div>
        <div class="card-body">
            <form action="/register" method="post">
                <div class="row mb-4">
                    <div class="col">
                        <label class="form-label" for="name">Nama Lengkap</label>
                        <div class="form-outline">
                            <input type="text" id="name" name="name" class="form-control" />
                        </div>
                    </div>
                    <div class="col">
                        <label class="form-label" for="username">Username</label>
                        <div class="form-outline">
                            <input type="text" id="username" name="username" class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <label class="form-label" for="email">Email</label>
                        <div class="form-outline">
                            <input type="email" id="email"  name="email" class="form-control" />
                        </div>
                    </div>
                    <div class="col">
                        <label class="form-label" for="password">Kata Sandi</label>
                        <div class="form-outline">
                            <input type="password" id="password" name="password" class="form-control" />
                        </div>
                    </div>
                </div>
            
                <!-- 2 column grid layout for inline styling -->
             
                <!-- Submit button -->
                <div class="row d-flex justify-content-between m-auto ms-md-auto mt-4 mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-block">REGISTER</button>
                    </div>
                    
                </div>
                <div class="row">
                    <p class="text-center">Sudah punya akun? Ayo <a href="/login">login</a></p>
                </div>
<!--         
                </div> -->
            
            </form>
        </div>
    </div>

    <!-- script js -->
    <script src="p2/js/mdb.min.js"></script>
</body>
</html>