@extends('template')
@section('content')
    <main class="main-container">
        <div class="main-title">
            <div class="home-content">
                <h3>ADD RAW MATERIAL DATA</h3>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_content">
                                <br />
                                <form id="demo-form2" action="{{ route('bahan_baku.update', $bahan_baku->id_bahanBk) }}"
                                    data-parsley-validate class="form-horizontal form-label-left" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">ID
                                            Tenaga Kerja</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <select class="form-control" name="id_tenagakerja" id="id_tenagakerja" required>
                                                <option value="" selected>Pilih</option>
                                                @foreach ($tenaga_kerja as $k)
                                                    <option
                                                        {{ $k->id_tenagakerja == $bahan_baku->id_tenagakerja ? 'selected' : '' }}
                                                        value="{{ $k->id_tenagakerja }}">
                                                        {{ $k->nama }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nama
                                            Bahan Baku</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="middle-name" name="nama_bahanbaku" value="{{ $bahan_baku->nama_bahanbaku }}" class="form-control"
                                                type="text" name="middle-name">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Harga
                                            Bahan Baku</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="middle-name" name="harga_bahanbaku" value="{{ $bahan_baku->harga_bahanbaku }}" class="form-control"
                                                type="number" name="middle-name">
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
