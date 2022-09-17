<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Siswa View Index</title>
    <!-- by Hanun Shabrina XI IPA U5 -->
    <!-- Css only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>

  <body>
    <div class="container">
    <h1>Index View Siswa</h1>
    <a href="siswa/create" class="btn btn-primary">Tambah Siswa</a>
    <table class="table table bordered table-striped">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama lengkap</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Edit | Hapus</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswa as $no => $item)
            <tr>
                <td>{{ ++$no }}</td>
                <td>{{ $item->nama_lengkap }}</td>
                <td>{{ $item->jenis_kelamin }}</td> 
                <td>{{ $item->jurusan}}</td> 
                <td>
                  <form action="{{ route('siswa.destroy', $item->id)}}" onsubmit="return confirm('Apakah Anda Yakin?')" method="POST">
                    <a class="btn btn-primary" href="{{ route('siswa.edit', $item->id) }}">Edit</a>
                    @csrf 
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    
    <!-- JavaScript Bundle with popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>