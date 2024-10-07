
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center><h1>Tambah kelas</h1></center>
<form action="/update/{{$data->id}}" method="post">
    @csrf
    @method('put')
    
    <input type="hidden" name="id" value="{{ $data->id }}">
    
    <label>Nama Kelas</label>
    <input type="text" name="nama_kelas" class="form-control" placeholder="Masukkan nama kelas" value="{{ $data->nama_kelas }}">

    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('home') }}" class="btn btn-secondary">Batal</a>          

</form>

</body>
</html>