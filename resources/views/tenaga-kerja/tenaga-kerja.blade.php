@extends('template')
@section('content')
    <main class="main-container">
        <div class="main-title">
            <div class="home-content">
                <h3>LABOR DATA</h3>

                <a href="{{ route('tenaga_kerja.create') }}">
                    <button type="button" class="btn btn-tambah">
                        Add Data
                    </button>
                </a>
                <a href="{{ url('print-tenagakerja') }}">
                    <button type="button" class="btn btn-tambah">
                        Export Data
                    </button>
                </a>
                <table class="table1">
                    <thead>
                        <tr>
                            <th>ID Tenaga Kerja</th>
                            <th>ID Pengguna</th>
                            <th>Nama Tenaga Kerja</th>
                            <th>Usia</th>
                            <th>Jenis Kelamin</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tenaga_kerja as $p)
                            <tr>
                                <td>{{ $p->id_tenagakerja }}</td>
                                <td>{{ $p->pengguna->id_pengguna }}</td>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->usia }}</td>
                                <td>{{ $p->jenis_kelamin }}</td>
                                <td>
                                    <form action="{{ route('tenaga_kerja.destroy', $p->id_tenagakerja) }}" method="POST">
                                        <a href="{{ route('tenaga_kerja.edit', $p->id_tenagakerja) }}" style="text-decoration: none">
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
