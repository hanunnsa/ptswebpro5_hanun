<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Siswa</title>
    <!-- Hanun Shabrina XI IPA U5 -->
    <!-- Css only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>

  <body>
    <div class="container">
      <h1>Edit Data Siswa</h1>
    <div>
        <form action="{{ route('siswa.update', $siswa->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-2">
                <input type="text" name="nama_lengkap" class="form-control" value="{{ $siswa->nama_lengkap}}" placeholder="Nama Lengkap">
            </div>
            <div class="mb-2">
                <input type="text" name="jenis_kelamin" class="form-control" value="{{ $siswa->jenis_kelamin}}" placeholder="Jenis Kelamin">
            </div>
            <div class="mb-2">
                <input type="text" name="jurusan" class="form-control" value="{{ $siswa->jurusan}}" placeholder="Jurusan">
            </div>
            <div class="mb-2">
            <input type="reset" class="btn btn-secondary"> &nbsp; <input type="submit" value="Update" class="btn btn-primary">
        </div>
        </form>
    </div>
</div>
    
    <!-- JavaScript Bundle with popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>