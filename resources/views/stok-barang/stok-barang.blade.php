@extends('template')
@section('content')
    <main class="main-container">
        <div class="main-title">
            <div class="home-content">
                <h3>PRODUCT STOCK DATA</h3>

                <a href="{{ route('stok_barang.create') }}">
                    <button type="button" class="btn btn-tambah">
                        Add Data
                    </button>
                </a>
                <a href="{{ url('print-stokbarang') }}">
                    <button type="button" class="btn btn-tambah">
                        Export Data
                    </button>
                </a>
                <table class="table1">
                    <thead>
                        <tr>
                            <th>ID Stok Barang</th>
                            <th>Nama Barang</th>
                            <th>Stok Produksi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($stok_barang as $p)
                            <tr>
                                <td>{{ $p->id_stokBr }}</td>
                                <td>{{ $p->barang->nama_barang }}</td>
                                <td>{{ $p->stok_produksi }}</td>
                                <td>
                                    <form action="{{ route('stok_barang.destroy', $p->id_stokBr) }}" method="POST">
                                        <a href="{{ route('stok_barang.edit', $p->id_stokBr) }}"
                                            style="text-decoration: none">
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
