<!DOCTYPE html>
<html>

<head>
    <title>Laporan Barang</title>
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
        <h5 class="mb-2">Laporan Barang</h5>
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama Pembeli</th>
                <th>Nama Pegawai</th>
                <th>ID Gudang</th>
                <th>Nama Barang</th>
                <th>Stok</th>
                <th>Kategori</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach ($barang as $p)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $p->pembeli->nama }}</td>
                    <td>{{ $p->pegawai->nama }}</td>
                    <td>{{ $p->gudang->id_gudang }}</td>
                    <td>{{ $p->nama_barang }}</td>
                    <td>{{ $p->stok_barang }}</td>
                    <td>{{ $p->kategori_barang }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
