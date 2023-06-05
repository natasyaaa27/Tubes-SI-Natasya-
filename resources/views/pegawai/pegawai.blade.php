@extends('template')
@section('content')
    <main class="main-container">
        <div class="main-title">
            <div class="home-content">
                <h3>EMPLOYEE DATA</h3>

                <a href="{{ route('pegawai.create') }}">
                    <button type="button" class="btn btn-tambah">
                        Add Data
                    </button>
                </a>
                <a href="{{ url('print-pegawai') }}">
                    <button type="button" class="btn btn-tambah">
                        Export Data
                    </button>
                </a>
                <table class="table1">
                    <thead>
                        <tr>
                            <th>ID Pegawai</th>
                            <th>ID Pengguna</th>
                            <th>Nama Pegawai</th>
                            <th>Usia</th>
                            <th>Jenis Kelamin</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pegawai as $p)
                            <tr>
                                <td>{{ $p->id_pegawai }}</td>
                                <td>{{ $p->pengguna->id_pengguna }}</td>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->usia }}</td>
                                <td>{{ $p->jenis_kelamin }}</td>
                                <td>
                                    <form action="{{ route('pegawai.destroy', $p->id_pegawai) }}" method="POST">
                                        <a href="{{ route('pegawai.edit', $p->id_pegawai) }}" style="text-decoration: none">
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
