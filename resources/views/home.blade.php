@extends('adminlte::page')


@section('title', 'YAYASAN PONDOK YATIM')

<link href="vendor/adminlte/dist/img/logo1.png" rel="icon">
<link href="vendor/adminlte/dist/img/logo1.png" rel="apple-touch-icon">

@section('content_header')

    Dashboard

@endsection

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @role('admin')
                            <p>Role Admin</p>
                        @endrole

                        {{ __('You are logged in!') }}
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
