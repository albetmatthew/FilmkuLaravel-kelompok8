<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <script src="https://kit.fontawesome.com/e723ff44a8.js" crossorigin="anonymous"></script>
        <title>Table Admin</title>
        <style>
            thead{
                background-color: #950101;
                color: #eee8e8;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="align-items-center mt-5">
                        <h1 class="h3 mb-1 text-gray-800 text-center">FILM</h1>
                        <hr class="col-2 mx-auto">
                        <p class="fw-normal fs-4 text-center">Silahkan tambahkan film terbaru</p>
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <div class="ml-auto p-4">
                        <button href="#" class="btn btn-secondary me-md-4" type="button"><i class="fas fa-plus"></i>
                            <span class="fw-bold">Tambahkan Film</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- DataTales -->
        <div class="container-fluid mx-auto">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold" style="color: #3D0000;">Tabel Daftar Film</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable">
                            <thead class="">
                                <tr align="center">
                                    <th width="3%" scope="col" class="">No</th>
                                    <th width="10%" scope="col">Judul Film</th>
                                    <th width="8%" scope="col">Genre</th>
                                    <th width="8%" scope="col">Studio</th>
                                    <th width="8%" scope="col">Penulis</th>
                                    <th width="8%" scope="col">Tahun Rilis</th>
                                    <th width="8%" scope="col">Durasi</th>
                                    <th width="8%" scope="col">Negara</th>
                                    <th width="10%" scope="col">Gambar</th>
                                    <th width="20%" scope="col">Sinopsis</th>
                                    <th width="10%" scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Little Mom</td>
                                    <td>Series</td>
                                    <td>Hitmaker Studios</td>
                                    <td>Riheam Junianti</td>
                                    <td>2021</td>
                                    <td>55–56 menit</td>
                                    <td>Indonesia</td>
                                    <td>
                                        <img src="https://hanamaria23.000webhostapp.com/littlemom.jpg" alt class="img-fluid">
                                    </td>
                                    <td>
                                        Little Mom bercerita tentang Naura (Natasha Wilona), gadis 16 tahun yang cantik,
                                        berprestasi, dan jadi kebanggaan orang tua yang bercita-cita menjadi seorang dokter
                                        kandungan. Sayangnya, impiannya jadi berantakan karena hamil dengan Yuda (Teuku
                                        Rassya),
                                        cowok keren dan populer di sekolah.
                                    </td>
                                    <td>
                                        <div class="d-grid">
                                            <!-- you can use this as button delete logic -->
                                            <a href="{{ route('admin.user.delete', [$user->id]) }}"
                                                class="btn btn-danger btn-sm my-2"
                                                onclick="return confirm('Apakah Anda yakin?')">
                                                <i
                                                    class="fas fa-trash">
                                                </i>
                                                <span>Hapus</span></a>
                                                <button href="#" class="btn btn-secondary btn-sm my-2" title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                <span>Edit</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Little Mom</td>
                                    <td>Series</td>
                                    <td>Hitmaker Studios</td>
                                    <td>Riheam Junianti</td>
                                    <td>2021</td>
                                    <td>55–56 menit</td>
                                    <td>Indonesia</td>
                                    <td>
                                        <img src="https://hanamaria23.000webhostapp.com/littlemom.jpg" alt class="img-fluid">
                                    </td>
                                    <td>
                                        Little Mom bercerita tentang Naura (Natasha Wilona), gadis 16 tahun yang cantik,
                                        berprestasi, dan jadi kebanggaan orang tua yang bercita-cita menjadi seorang dokter
                                        kandungan. Sayangnya, impiannya jadi berantakan karena hamil dengan Yuda (Teuku
                                        Rassya),
                                        cowok keren dan populer di sekolah.
                                    </td>
                                    <td>
                                        <div class="d-grid">
                                            <!-- you can use this as button delete logic -->
                                            <a href="{{ route('admin.user.delete', [$user->id]) }}"
                                                class="btn btn-danger btn-sm my-2"
                                                onclick="return confirm('Apakah Anda yakin?')">
                                                <i
                                                    class="fas fa-trash">
                                                </i>
                                                <span>Hapus</span></a>
                                                <button href="#" class="btn btn-secondary btn-sm my-2" title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                <span>Edit</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Little Mom</td>
                                    <td>Series</td>
                                    <td>Hitmaker Studios</td>
                                    <td>Riheam Junianti</td>
                                    <td>2021</td>
                                    <td>55–56 menit</td>
                                    <td>Indonesia</td>
                                    <td>
                                        <img src="https://hanamaria23.000webhostapp.com/littlemom.jpg" alt class="img-fluid">
                                    </td>
                                    <td>
                                        Little Mom bercerita tentang Naura (Natasha Wilona), gadis 16 tahun yang cantik,
                                        berprestasi, dan jadi kebanggaan orang tua yang bercita-cita menjadi seorang dokter
                                        kandungan. Sayangnya, impiannya jadi berantakan karena hamil dengan Yuda (Teuku
                                        Rassya),
                                        cowok keren dan populer di sekolah.
                                    </td>
                                    <td>
                                        <div class="d-grid">
                                            <!-- you can use this as button delete logic -->
                                            <a href="{{ route('admin.user.delete', [$user->id]) }}"
                                                class="btn btn-danger btn-sm my-2"
                                                onclick="return confirm('Apakah Anda yakin?')">
                                                <i
                                                    class="fas fa-trash">
                                                </i>
                                                <span>Hapus</span></a>
                                                <button href="#" class="btn btn-secondary btn-sm my-2" title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                <span>Edit</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Little Mom</td>
                                    <td>Series</td>
                                    <td>Hitmaker Studios</td>
                                    <td>Riheam Junianti</td>
                                    <td>2021</td>
                                    <td>55–56 menit</td>
                                    <td>Indonesia</td>
                                    <td>
                                        <img src="https://hanamaria23.000webhostapp.com/littlemom.jpg" alt class="img-fluid">
                                    </td>
                                    <td>
                                        Little Mom bercerita tentang Naura (Natasha Wilona), gadis 16 tahun yang cantik,
                                        berprestasi, dan jadi kebanggaan orang tua yang bercita-cita menjadi seorang dokter
                                        kandungan. Sayangnya, impiannya jadi berantakan karena hamil dengan Yuda (Teuku
                                        Rassya),
                                        cowok keren dan populer di sekolah.
                                    </td>
                                    <td>
                                        <div class="d-grid">
                                            <!-- you can use this as button delete logic -->
                                            <a href="{{ route('admin.user.delete', [$user->id]) }}"
                                                class="btn btn-danger btn-sm my-2"
                                                onclick="return confirm('Apakah Anda yakin?')">
                                                <i
                                                    class="fas fa-trash">
                                                </i>
                                                <span>Hapus</span></a>
                                                <button href="#" class="btn btn-secondary btn-sm my-2" title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                <span>Edit</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>