@extends('template')
@section('content')
    <main class="main-container">
        <div class="main-title">
            <div class="home-content">
                <h3>PRODUCT CATEGORY DATA</h3>

                <a href="{{ route('kategori_barang.create') }}">
                    <button type="button" class="btn btn-tambah">
                        Add Data
                    </button>
                </a>
                <a href="{{ url('print-kategoribarang') }}">
                    <button type="button" class="btn btn-tambah">
                        Export Data
                    </button>
                </a>
                <table class="table1">
                    <thead>
                        <tr>
                            <th>ID Kategori Barang</th>
                            <th>Nama Barang</th>
                            <th>Kategori Barang</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kategori_barang as $p)
                            <tr>
                                <td>{{ $p->id_kategoriBr }}</td>
                                <td>{{ $p->barang->nama_barang }}</td>
                                <td>{{ $p->kategori_barang }}</td>
                                <td>
                                    <form action="{{ route('kategori_barang.destroy', $p->id_kategoriBr) }}"
                                        method="POST">
                                        <a href="{{ route('kategori_barang.edit', $p->id_kategoriBr) }}"
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
