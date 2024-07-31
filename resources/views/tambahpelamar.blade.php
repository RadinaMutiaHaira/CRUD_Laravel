<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOWONGAN PEKERJAAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">TAMBAH PELAMAR PEKERJAAN DI PT. EKA AKARJATI</h1>
    <div class="container">
        <div class="row">
            <form action="/inputdata" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama_pelamar" class="form-label">Nama</label>
                    <input type="text" name="nama_pelamar" class="form-control" id="nama_pelamar">
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                        <option selected>Pilih Jenis Kelamin</option>
                        <option value="Cowok">Cowok</option>
                        <option value="Cewek">Cewek</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="no_telepon" class="form-label">No Handphone</label>
                    <input type="number" name="no_telepon" class="form-control" id="no_telepon">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>