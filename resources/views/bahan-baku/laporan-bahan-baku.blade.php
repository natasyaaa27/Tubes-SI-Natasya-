<!DOCTYPE html>
<html>

<head>
    <title>Laporan Bahan Baku</title>
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
        <h5 class="mb-2">Laporan Bahan Baku</h5>
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama Tenaga Kerja</th>
                <th>Nama Bahan Baku</th>
                <th>Harga Bahan Baku</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach ($bahan_baku as $p)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $p->tenaga_kerja->nama }}</td>
                    <td>{{ $p->nama_bahanbaku }}</td>
                    <td>{{ $p->harga_bahanbaku }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
