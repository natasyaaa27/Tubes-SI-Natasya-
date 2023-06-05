@extends('template')
@section('content')
    <main class="main-container">
        <div class="main-title">
            <div class="home-content">
                <h3>OUTLET DATA</h3>

                <a href="{{ route('outlet.create') }}">
                    <button type="button" class="btn btn-tambah">
                        Add Data
                    </button>
                </a>
                <a href="{{ url('print-outlet') }}">
                    <button type="button" class="btn btn-tambah">
                        Export Data
                    </button>
                </a>
                <table class="table1">
                    <thead>
                        <tr>
                            <th>ID Outlet</th>
                            <th>ID Stok Barang</th>
                            <th>Kategori Barang</th>
                            <th>Nama Outlet</th>
                            <th>Alamat Outlet</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($outlet as $p)
                            <tr>
                                <td>{{ $p->id_outlet }}</td>
                                <td>{{ $p->id_stokBr }}</td>
                                <td>{{ $p->kategori_barang->kategori_barang }}</td>
                                <td>{{ $p->nama_outlet }}</td>
                                <td>{{ $p->alamat_outlet }}</td>
                                <td>
                                    <form action="{{ route('outlet.destroy', $p->id_outlet) }}" method="POST">
                                        <a href="{{ route('outlet.edit', $p->id_outlet) }}"
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
