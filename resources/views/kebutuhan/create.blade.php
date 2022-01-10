@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Kebutuhan</div>
                    <div class="card-body">
                        <form action="{{ route('kebutuhan.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Masukan Kebutuhan Harian</label>
                                <input type="text" name="kebutuhan_harian"
                                    class="form-control @error('kebutuhan_harian') is-invalid @enderror">
                                @error('kebutuhan_harian')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                           <div class="form-group">
                                <label for="">Masukan Kebutuhan Obat-obatan</label>
                                <input type="text" name="kebutuhan_obat"
                                    class="form-control @error('kebutuhan_obat') is-invalid @enderror">
                                @error('kebutuhan_obat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="reset" class="btn btn-outline-warning">Reset</button>
                                <button type="submit" class="btn btn-outline-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')

@endsection

@section('js')

@endsection

