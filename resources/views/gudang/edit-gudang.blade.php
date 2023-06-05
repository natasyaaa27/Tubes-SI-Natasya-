@extends('template')
@section('content')
    <main class="main-container">
        <div class="main-title">
            <div class="home-content">
                <h3>ADD INVENTORY DATA</h3>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_content">
                                <br />
                                <form id="demo-form2" action="{{ route('gudang.update', $gudang->id_gudang) }}"
                                    data-parsley-validate class="form-horizontal form-label-left" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">ID
                                            Stok Produksi</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <select class="form-control" name="id_stokPr" id="id_stokPr" required>
                                                <option value="" selected>Pilih</option>
                                                @foreach ($stok_produksi as $k)
                                                    <option {{ $k->id_stokPr == $gudang->id_stokPr ? 'selected' : '' }}
                                                        value="{{ $k->id_stokPr }}">
                                                        {{ $k->id_stokPr }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Hasil
                                            Produksi</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="middle-name" name="hasil_produksi" value="{{ $gudang->hasil_produksi }}" class="form-control"
                                                type="text" name="middle-name">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Jumlah
                                            Stok</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="middle-name" name="jumlah_stok" value="{{ $gudang->jumlah_stok }}" class="form-control" type="number"
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
