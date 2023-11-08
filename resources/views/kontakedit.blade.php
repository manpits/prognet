<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/kontak/{{ $kontak->id }}" method="post">
        @csrf
        @method('PUT')
        <div>Nama <input type="text" name="nama" id="nama" value="{{ $kontak->nama }}"></div>
        <div>Alamat <input type="text" name="alamat" id="alamat" value="{{ $kontak->alamat }}"></div>
        <div>Telepon <input type="text" name="telepon" id="telepon" value="{{ $kontak->telepon }}"></div>
        <div>
            <select name="gender" id="">
                <option value="Pria" @if($kontak->gender=='Pria') {{ "selected" }} @endif >Pria / Laki-laki</option>
                <option value="Wanita" @if($kontak->gender=='Wanita') {{ "selected" }} @endif>Wanita / Perempuan</option>
            </select>
        </div>
        <div><button type="submit">Simpan</button></div>
    </form>
</body>
</html>