<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background: rgb(2, 0, 36);
            background: -moz-radial-gradient(circle, rgba(2, 0, 36, 1) 30%, rgba(25, 73, 106, 1) 75%, rgba(49, 150, 145, 1) 94%);
            background: -webkit-radial-gradient(circle, rgba(2, 0, 36, 1) 30%, rgba(25, 73, 106, 1) 75%, rgba(49, 150, 145, 1) 94%);
            background: radial-gradient(circle, rgba(2, 0, 36, 1) 30%, rgba(25, 73, 106, 1) 75%, rgba(49, 150, 145, 1) 94%);
            filter: progid: DXImageTransform.Microsoft.gradient(startColorstr="#020024", endColorstr="#319691", GradientType=1);
        }
    </style>
</head>

<body>

    <nav>
        <div class="text-light text-capitalize">
            <div class="container">
                <div class="row justify-content-between mt-3">
                    <div class="col-2">
                        <h1 class="fs-2 font-weight-bold text-uppercase">logo</h1>
                    </div>
                    <div class="col-6 d-flex fs-4">
                        <div class="col-4">pendidikan</div>
                        <div class="col-4">tentang</div>
                        <div class="col-4">skill</div>

                    </div>
                </div>
            </div>
            <div>
    </nav>


    <aside class="ml-4 container mt-5">
        <h3 class="text-light text-capitaliz "> riwayat pendidikan</h3>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    tambah data
  </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">tambah data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="/insert-data" method="post">
                        @csrf
                        <!-- Laravel CSRF Token -->

                        <label for="nama">Nama:</label>
                        <input type="text" name="nama" required>
                        <br>

                        <label for="tahun_masuk">Tahun Masuk:</label>
                        <input type="number" name="tahun_masuk" required>
                        <br>

                        <label for="tahun_keluar">Tahun Lulus:</label>
                        <input type="number" name="tahun_keluar" required>
                        <br>

                        <button type="submit">Simpan Data</button>
                    </form>

                </div>
            </div>
        </div>



        <table class="table mt-5">
            <thead class="table-danger ">
                <tr>
                    <td>nama </td>
                    <td>tahun masuk</td>
                    <td>tahun lulus</td>
                    <td>aksi</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $dt)
                <tr>

                    <td>{{$dt->nama_sekolah}}</td>
                    <td>{{$dt->tahun_masuk}}</td>
                    <td>{{$dt->tahun_keluar}}</td>
                    <td class="d-flex">
                        <form action="/delete-data/<?php echo $dt->id; ?>" method="post" onsubmit="return confirm('Are you sure you want to delete?')">
                            @csrf @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>


                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal">
                                edit data
                            </button>

                    </td>
                </tr>
                <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">update data</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="/update-data/<?php echo $dt->id; ?>" method="post">
                                @csrf @method("PUT")
                                <!-- Laravel CSRF Token -->

                                <label for="nama">Nama:</label>
                                <input type="text" name="nama" value="{{$dt->nama_sekolah}}" required>
                                <br>

                                <label for="tahun_masuk">Tahun Masuk:</label>
                                <input type="number" name="tahun_masuk" value="{{$dt->tahun_masuk}}" required>
                                <br>

                                <label for="tahun_keluar">Tahun Lulus:</label>
                                <input type="number" name="tahun_keluar" value="{{$dt->tahun_keluar}}" required>
                                <br>

                                <button type="submit">Simpan Data</button>
                            </form>

                        </div>
                    </div>
                </div>
                @endforeach
            </tbody>
        </table>
    </aside>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js " integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL " crossorigin="anonymous "></script>
</body>

</html>