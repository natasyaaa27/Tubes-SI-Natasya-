<!DOCTYPE html>
<html>

<head>
    <title>Laporan Tenaga Kerja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <center>
        <h5 class="mb-2">Laporan Tenaga Kerja</h5>
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>NO</th>
                <th>ID Pengguna</th>
                <th>Nama Tenaga Kerja</th>
                <th>Usia</th>
                <th>Jenis Kelamin</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach ($tenaga_kerja as $p)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $p->pengguna->id_pengguna }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->usia }}</td>
                    <td>{{ $p->jenis_kelamin }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
