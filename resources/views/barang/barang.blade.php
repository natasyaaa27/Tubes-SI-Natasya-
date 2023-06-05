@extends('template')
@section('content')
    <main class="main-container">
        <div class="main-title">
            <div class="home-content">
                <h3>BARANG DATA</h3>

                <a href="{{ route('barang.create') }}">
                    <button type="button" class="btn btn-tambah">
                        Add Data
                    </button>
                </a>
                <a href="{{ url('print-barang') }}">
                    <button type="button" class="btn btn-tambah">
                        Export Data
                    </button>
                </a>
                <table class="table1">
                    <thead>
                        <tr>
                            <th>ID Barang</th>
                            <th>Nama Pembeli</th>
                            <th>Nama Pegawai</th>
                            <th>ID Gudang</th>
                            <th>Nama Barang</th>
                            <th>Stok</th>
                            <th>Kategori</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barang as $p)
                            <tr>
                                <td>{{ $p->id_barang }}</td>
                                <td>{{ $p->pembeli->nama }}</td>
                                <td>{{ $p->pegawai->nama }}</td>
                                <td>{{ $p->gudang->id_gudang }}</td>
                                <td>{{ $p->nama_barang }}</td>
                                <td>{{ $p->stok_barang }}</td>
                                <td>{{ $p->kategori_barang }}</td>
                                <td>
                                    <form action="{{ route('barang.destroy', $p->id_barang) }}" method="POST">
                                        <a href="{{ route('barang.edit', $p->id_barang) }}" style="text-decoration: none">
                                            <button class="btn btn-tambah" type="button">
                                                Edit
                                            </button>
                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-tambah" type="submit">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </main>
@endsection
