<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/kontak" method="post">
        @csrf
        <div>Nama <input type="text" name="nama" id="nama"></div>
        <div>Alamat <input type="text" name="alamat" id="alamat"></div>
        <div>Telepon <input type="text" name="telepon" id="telepon"></div>
        <div>
            <select name="gender" id="">
                <option value="Pria">Pria / Laki-laki</option>
                <option value="Wanita">Wanita / Perempuan</option>
            </select>
        </div>
        <div><button type="submit">Simpan</button></div>
    </form>
</body>
</html>