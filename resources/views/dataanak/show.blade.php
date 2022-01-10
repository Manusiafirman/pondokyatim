@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Anak</div>
                    <div class="card-body">
                        <form action="{{ route('dataanak.update', $dataanak->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for=""> Nama Anak</label>
                                <input type="text" name="nama" value="{{ $dataanak->nama }}"
                                    class="form-control @error('nama') is-invalid @enderror" disabled>
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                           <div class="form-group">
                                <label for=""> Umur </label>
                                <input type="text" name="umur" value="{{ $dataanak->umur }}"
                                    class="form-control @error('umur') is-invalid @enderror" disabled>
                                @error('umur')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for=""> Tempat, tanggal lahir</label>
                                <input type="text" name="ttl" value="{{ $dataanak->ttl }}"
                                    class="form-control @error('ttl') is-invalid @enderror" disabled>
                                @error('ttl')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for=""> Pendidikan</label>
                                <input type="text" name="pendidikan" value="{{ $dataanak->pendidikan }}"
                                    class="form-control @error('pendidikan') is-invalid @enderror" disabled>
                                @error('pendidikan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for=""> Nama Wali</label>
                                <input type="text" name="wali" value="{{ $dataanak->wali }}"
                                    class="form-control @error('wali') is-invalid @enderror" disabled>
                                @error('wali')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">

                                <a href="{{ route('dataanak.index') }}" class="btn btn-block btn-primary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
