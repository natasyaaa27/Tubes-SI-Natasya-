@extends('template')
@section('content')
    <main class="main-container">
        <div class="main-title">
            <div class="home-content">
                <h3>PRODUCTION COST DATA</h3>

                <a href="{{ route('biaya_produksi.create') }}">
                    <button type="button" class="btn btn-tambah">
                        Add Data
                    </button>
                </a>
                <a href="{{ url('print-biayaproduksi') }}">
                    <button type="button" class="btn btn-tambah">
                        Export Data
                    </button>
                </a>
                <table class="table1">
                    <thead>
                        <tr>
                            <th>ID Biaya Produksi</th>
                            <th>ID Produksi</th>
                            <th>Biaya Bahan Baku</th>
                            <th>Biaya Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($biaya_produksi as $p)
                            <tr>
                                <td>{{ $p->id_biayaPr }}</td>
                                <td>{{ $p->id_produksi }}</td>
                                <td>{{ $p->biaya_bahanbaku }}</td>
                                <td>{{ $p->biaya_total }}</td>
                                <td>
                                    <form action="{{ route('biaya_produksi.destroy', $p->id_biayaPr) }}"
                                        method="POST">
                                        <a href="{{ route('biaya_produksi.edit', $p->id_biayaPr) }}"
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
