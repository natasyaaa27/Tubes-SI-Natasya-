<!DOCTYPE html>
<html>

<head>
    <title>Laporan Biaya Produksi</title>
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
        <h5 class="mb-2">Laporan Biaya Produksi</h5>
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>NO</th>
                <th>ID Produksi</th>
                <th>Biaya Bahan Baku</th>
                <th>Biaya Total</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach ($biaya_produksi as $p)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $p->id_produksi }}</td>
                    <td>{{ $p->biaya_bahanbaku }}</td>
                    <td>{{ $p->biaya_total }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
