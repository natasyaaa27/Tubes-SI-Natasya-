@extends('template')
@section('content')
    <main class="main-container">
        <div class="main-title">
            <div class="home-content">
                <h3>PRODUCTION DATA</h3>

                <a href="{{ route('produksi.create') }}">
                    <button type="button" class="btn btn-tambah">
                        Add Data
                    </button>
                </a>
                <a href="{{ url('print-produksi') }}">
                    <button type="button" class="btn btn-tambah">
                        Export Data
                    </button>
                </a>
                <table class="table1">
                    <thead>
                        <tr>
                            <th>ID Produksi</th>
                            <th>Nama Tenaga Kerja</th>
                            <th>Biaya Produksi</th>
                            <th>Stok Produksi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produksi as $p)
                            <tr>
                                <td>{{ $p->id_produksi }}</td>
                                <td>{{ $p->tenaga_kerja->nama }}</td>
                                <td>{{ $p->biaya_produksi }}</td>
                                <td>{{ $p->stok_produksi }}</td>
                                <td>
                                    <form action="{{ route('produksi.destroy', $p->id_produksi) }}" method="POST">
                                        <a href="{{ route('produksi.edit', $p->id_produksi) }}"
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
