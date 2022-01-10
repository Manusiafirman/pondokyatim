@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Kebutuhan</div>
                    <div class="card-body">
                        <form action="{{ route('kebutuhan.update', $kebutuhan->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for=""> Kebutuhan Harian</label>
                                <input type="text" name="kebutuhan_harian" value="{{ $kebutuhan->kebutuhan_harian }}"
                                    class="form-control @error('kebutuhan_harian') is-invalid @enderror" disabled>
                                @error('kebutuhan_harian')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                           <div class="form-group">
                                <label for=""> Kebutuhan Obat-Obatan </label>
                                <input type="text" name="kebutuhan_obat" value="{{ $kebutuhan->umur }}"
                                    class="form-control @error('kebutuhan_obat') is-invalid @enderror" disabled>
                                @error('kebutuhan_obat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">

                                <a href="{{ route('kebutuhan.index') }}" class="btn btn-block btn-primary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
