@extends('template')
@section('content')
    <main class="main-container">
        <div class="main-title">
            <div class="home-content">
                <h3>PRODUCTION STOCK DATA</h3>

                <a href="{{ route('stok_produksi.create') }}">
                    <button type="button" class="btn btn-tambah">
                        Add Data
                    </button>
                </a>
                <a href="{{ url('print-stokproduksi') }}">
                    <button type="button" class="btn btn-tambah">
                        Export Data
                    </button>
                </a>
                <table class="table1">
                    <thead>
                        <tr>
                            <th>ID Stok Produksi</th>
                            <th>ID Produksi</th>
                            <th>Stok Produksi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($stok_produksi as $p)
                            <tr>
                                <td>{{ $p->id_stokPr }}</td>
                                <td>{{ $p->produksi->id_produksi }}</td>
                                <td>{{ $p->stok_produksi }}</td>
                                <td>
                                    <form action="{{ route('stok_produksi.destroy', $p->id_stokPr) }}" method="POST">
                                        <a href="{{ route('stok_produksi.edit', $p->id_stokPr) }}"
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
