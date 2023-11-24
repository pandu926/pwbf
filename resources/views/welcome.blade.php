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
        <table class="table mt-5">
            <thead class="table-danger ">
                <tr>
                    <td>nama </td>
                    <td>tahun masuk</td>
                    <td>tahun lulus</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $dt)
                <tr>

                    <td>{{$dt->nama_sekolah}}</td>
                    <td>{{$dt->tahun_masuk}}</td>
                    <td>{{$dt->tahun_keluar}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </aside>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>