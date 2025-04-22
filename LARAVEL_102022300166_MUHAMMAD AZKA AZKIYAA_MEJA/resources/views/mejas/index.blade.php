<!DOCTYPE html>
<html>
<head>
    <title>Daftar Meja</title>
</head>
<body>
    <h1>Daftar Meja</h1>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Kode Meja</th>
                <th>Jumlah Kursi</th>
                <th>Bahan</th>
                <th>Dibuat Pada</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mejas as $meja)
            <tr>
                <td>{{ $meja->id }}</td>
                <td>{{ $meja->kode_meja }}</td>
                <td>{{ $meja->jumlah_kursi }}</td>
                <td>{{ $meja->bahan }}</td>
                <td>{{ $meja->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
