<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Praktikum PWL</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
   <h1>Daftar Mahasiswa</h1>
    <ul>
        <li>
            Nama : Diva Anggreini Harahap <br>
            Nim : 221402094 <br>
            Gender : Perempuan <br>
            <form action="/detail_mahasiswa" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary">Detail Mahasiswa [POST]</button>
            </form>

        </li>

        <li>
            Nama : Lee Haechan <br>
            Nim : 221402009 <br>
            Gender : Laki-laki <br>
        </li>
    </ul>
</body>
</html>