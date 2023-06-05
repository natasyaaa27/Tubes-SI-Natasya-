@extends('template')
@section('content')
    <main class="main-container">
        <div class="main-title">
            <div class="home-content">
                <h3>ADD CLIENT DATA</h3>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_content">
                                <br />
                                <form id="demo-form2" action="{{ route('pembeli.store') }}" data-parsley-validate
                                    class="form-horizontal form-label-left" method="post">
                                    @csrf
                                    <div class="item form-group">
                                        <label for="middle-name"
                                            class="col-form-label col-md-3 col-sm-3 label-align">ID Pengguna</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <select class="form-control" name="id_pengguna" id="id_pengguna" required>
                                                <option value="" selected>Pilih</option>
                                                @foreach ($pengguna as $k)
                                                    <option value="{{ $k->id_pengguna }}">
                                                        {{ $k->username }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="middle-name"
                                            class="col-form-label col-md-3 col-sm-3 label-align">Nama</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="middle-name" name="nama" class="form-control" type="text"
                                                name="middle-name">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="middle-name"
                                            class="col-form-label col-md-3 col-sm-3 label-align">Usia</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="middle-name" name="usia" class="form-control" type="text"
                                                name="middle-name">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Jenis
                                            Kelamin</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="middle-name" name="jenis_kelamin" class="form-control" type="text"
                                                name="middle-name">
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                            {{-- <button class="btn btn-primary" type="button">Cancel</button> --}}
                                            {{-- <button class="btn btn-primary" type="reset">Reset</button> --}}
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
