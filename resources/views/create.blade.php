<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center><h1>Tambah kelas</h1></center>


<form action="{{ route('store') }}" method="POST">
@csrf 
<label>Nama Kelas</label>
            <input type="text" name="nama_kelas" class="form-control" placeholder="Masukkan nama kelas" value="{{ old('home') }}">

            <label>Nama Murid</label>
            <input type="text" name="nama_kelas" class="form-control" placeholder="Masukkan nama murid value="{{ old('home') }}">

            <label>Nama Email</label>
            <input type="email" name="nama" class="form-control" placeholder="Masukkan email" value="{{ old('home') }}">


            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('home') }}" class="btn btn-secondary">Batal</a>          
            
            
</form> 
</body>
</html>