@extends('template')
@section('content')
    <main class="main-container">
        <div class="main-title">
            <div class="home-content">
                <h3>ADD PRODUCT DATA</h3>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_content">
                                <br />
                                <form id="demo-form2" action="{{ route('barang.store') }}" data-parsley-validate
                                    class="form-horizontal form-label-left" method="post">
                                    @csrf
                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nama Pembeli</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <select class="form-control" name="id_pembeli" id="id_pembeli" required>
                                                @foreach ($pembeli as $hot)
                                                    <option value="{{ $hot->id_pembeli }}">
                                                        {{ $hot->nama }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nama Pegawai</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <select class="form-control" name="id_pegawai" id="id_pegawai" required>
                                                @foreach ($pegawai as $hot)
                                                    <option value="{{ $hot->id_pegawai }}">
                                                        {{ $hot->nama }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nama Gudang</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <select class="form-control" name="id_gudang" id="id_gudang" required>
                                                @foreach ($gudang as $hot)
                                                    <option value="{{ $hot->id_gudang }}">
                                                        {{ $hot->id_gudang }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nama Barang</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="middle-name" name="nama_barang" class="form-control" type="text"
                                                name="middle-name">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Stok Barang</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="middle-name" name="stok_barang" class="form-control" type="text"
                                                name="middle-name">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Kategori Barang</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="middle-name" name="kategori_barang" class="form-control" type="text"
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
