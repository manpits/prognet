<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/kontak/create" method="get">
        <button type="submit">New Kontak</button>
    </form>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Gender</th>
            <th>Keterangan</th>
        </tr>
        @foreach ($data as $kontak)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $kontak->nama }}</td>
                <td>{{ $kontak->alamat }}</td>
                <td>{{ $kontak->telepon }}</td>
                <td>{{ $kontak->gender }}</td>
                <td>
                    <form action="/kontak/{{ $kontak->id }}/edit" method="get">
                        <button type="submit">Edit</button>
                    </form>
                    <form action="/kontak/{{ $kontak->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>