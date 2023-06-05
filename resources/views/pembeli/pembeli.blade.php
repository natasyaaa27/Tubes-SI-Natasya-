@extends('template')
@section('content')
    <main class="main-container">
        <div class="main-title">
            <div class="home-content">
                <h3>CLIENT DATA</h3>

                <a href="{{ route('pembeli.create') }}">
                    <button type="button" class="btn btn-tambah">
                        Add Data
                    </button>
                </a>
                <a href="{{ url('print-pembeli') }}">
                    <button type="button" class="btn btn-tambah">
                        Export Data
                    </button>
                </a>
                <table class="table1">
                    <thead>
                        <tr>
                            <th>ID Pembeli</th>
                            <th>ID Pengguna</th>
                            <th>Nama Pembeli</th>
                            <th>Usia</th>
                            <th>Jenis Kelamin</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pembeli as $p)
                            <tr>
                                <td>{{ $p->id_pembeli }}</td>
                                <td>{{ $p->pengguna->id_pengguna }}</td>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->usia }}</td>
                                <td>{{ $p->jenis_kelamin }}</td>
                                <td>
                                    <form action="{{ route('pembeli.destroy', $p->id_pembeli) }}" method="POST">
                                        <a href="{{ route('pembeli.edit', $p->id_pembeli) }}"
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
