<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Provinsi</h1>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Provinsi</th>
            <th>Kode Provinsi</th>
            <th>Action</th>
        </tr>
        @foreach ($provinsi as $key => $data)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $data->nama_provinsi }}</td>
            <td>{{ $data->kode_provinsi }}</td>
            <td>Action</td>
        </tr>
        @endforeach
    </table>
</body>
</html>