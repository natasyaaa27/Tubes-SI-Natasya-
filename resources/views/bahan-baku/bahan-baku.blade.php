@extends('template')
@section('content')
    <main class="main-container">
        <div class="main-title">
            <div class="home-content">
                <h3>PRODUCTION DATA</h3>

                <a href="{{ route('bahan_baku.create') }}">
                    <button type="button" class="btn btn-tambah">
                        Add Data
                    </button>
                </a>
                <a href="{{ url('print-bahanbaku') }}">
                    <button type="button" class="btn btn-tambah">
                        Export Data
                    </button>
                </a>
                <table class="table1">
                    <thead>
                        <tr>
                            <th>ID Bahan Baku</th>
                            <th>Nama Tenaga Kerja</th>
                            <th>Nama Bahan Baku</th>
                            <th>Harga Bahan Baku</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bahan_baku as $p)
                            <tr>
                                <td>{{ $p->id_bahanBk }}</td>
                                <td>{{ $p->tenaga_kerja->nama }}</td>
                                <td>{{ $p->nama_bahanbaku }}</td>
                                <td>{{ $p->harga_bahanbaku }}</td>
                                <td>
                                    <form action="{{ route('bahan_baku.destroy', $p->id_bahanBk) }}" method="POST">
                                        <a href="{{ route('bahan_baku.edit', $p->id_bahanBk) }}"
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
