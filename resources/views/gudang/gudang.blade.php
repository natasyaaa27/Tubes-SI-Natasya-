@extends('template')
@section('content')
    <main class="main-container">
        <div class="main-title">
            <div class="home-content">
                <h3>INVENTORY DATA</h3>

                <a href="{{ route('gudang.create') }}">
                    <button type="button" class="btn btn-tambah">
                        Add Data
                    </button>
                </a>
                <a href="{{ url('print-bhnbaku') }}">
                    <button type="button" class="btn btn-tambah">
                        Export Data
                    </button>
                </a>
                <table class="table1">
                    <thead>
                        <tr>
                            <th>ID Gudang</th>
                            <th>ID Stok Produksi</th>
                            <th>Hasil Produksi</th>
                            <th>Jumlah Stok</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gudang as $p)
                            <tr>
                                <td>{{ $p->id_gudang }}</td>
                                <td>{{ $p->id_stokPr }}</td>
                                <td>{{ $p->hasil_produksi }}</td>
                                <td>{{ $p->jumlah_stok }}</td>
                                <td>
                                    <form action="{{ route('gudang.destroy', $p->id_gudang) }}" method="POST">
                                        <a href="{{ route('gudang.edit', $p->id_gudang) }}" style="text-decoration: none">
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
