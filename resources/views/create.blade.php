<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container col-md-6" style="padding-top: 20px">
        <div class="card shadow"> 
        <div class="card-header text-center"><b>{{.__('Registrasi Karyawan').}}</b> </div>
            <div class="card-body">
              <form action="{{ route('createBook') }}" method="POST" enctype="multipart">
                @csrf
                <div class="mb-3"> 
                    <label for="nama" class="form-label">Nama Karyawan</label>
                    <input name="nama" type="text" class="form-control" id="formGroup">
                    @error('nama')
                    <div class="text-danger">
                        {( $messege )}
                    </div>
                    @enderror
                </div>
                <div class="mb-3"> 
                        <label for="umur" class="form-label">Umur</label>
                        <input name="umur" type="numeric" class="form-control" id="formGroup">
                    @error('umur')
                    <div class="text-danger">
                        {( $messege )}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                        <input name="alamat" type="text" class="form-control" id="formGroup">
                    @error('alamat')
                    <div class="text-danger">
                        {( $messege )}
</body>
</html>