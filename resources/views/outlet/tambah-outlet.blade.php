@extends('template')
@section('content')
    <main class="main-container">
        <div class="main-title">
            <div class="home-content">
                <h3>ADD EMPLOYEE DATA</h3>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_content">
                                <br />
                                <form id="demo-form2" action="{{ route('outlet.store') }}" data-parsley-validate
                                    class="form-horizontal form-label-left" method="post">
                                    @csrf
                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">ID
                                            Stok Barang</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <select class="form-control" name="id_stokBr" id="id_stokBr" required>
                                                @foreach ($stok_barang as $hot)
                                                    <option value="{{ $hot->id_stokBr }}">
                                                        {{ $hot->id_stokBr }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="middle-name"
                                            class="col-form-label col-md-3 col-sm-3 label-align">Kategori Barang</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <select class="form-control" name="id_kategoriBr" id="id_kategoriBr" required>
                                                @foreach ($kategori_barang as $hot)
                                                    <option value="{{ $hot->id_kategoriBr }}">
                                                        {{ $hot->kategori_barang }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nama
                                            Outlet</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="middle-name" name="nama_outlet" class="form-control" type="text"
                                                name="middle-name">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Alamat
                                            Outlet</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="middle-name" name="alamat_outlet" class="form-control" type="text"
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
