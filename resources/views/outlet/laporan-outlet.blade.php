<!DOCTYPE html>
<html>

<head>
    <title>Laporan Outlet</title>
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
        <h5 class="mb-2">Laporan Outlet</h5>
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>NO</th>
                <th>ID Stok Barang</th>
                <th>Kategori Barang</th>
                <th>Nama Outlet</th>
                <th>Alamat Outlet</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach ($outlet as $p)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $p->id_stokBr }}</td>
                    <td>{{ $p->kategori_barang->kategori_barang }}</td>
                    <td>{{ $p->nama_outlet }}</td>
                    <td>{{ $p->alamat_outlet }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
