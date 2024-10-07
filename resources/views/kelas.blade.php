<!--  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<center>
<a href="{{ route('create') }}" class="btn btn-primary mb-3">Tambah Kelas</a>  


<table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Nama Kelas</th>
                <th>Nama Murid</th>
                <th>Email</th>
                <th>action</th>
            </tr>
            @foreach($kelas as $kls)
            <tr>
                <td>{{ $kls->id }}</td>
                <td>{{ $kls->nama_kelas }}</td>
                <td>{{ $kls->nama}}</td>
                <td>{{ $kls->email}}</td>
                <td><a class="btn btn-danger" href="/delete/{{ $kls->id }}">Delete</a></td>
                <td><a href="/edit/{{$kls->id}}">Edit</a></td>
            </tr>
            @endforeach
        </table>


         

</center>
</body>
</html>