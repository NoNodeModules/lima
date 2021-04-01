@extends('layouts.app2')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-12">
                <h1 class="m-0">Login</h1>
            </div>
        </div>
    </div>
</div>
<section class="content">
    <div class="row justify-content-md-center">
        <div class="card col-12 col-lg-6 col-md-12 col-sm-12">
            <form method="POST" action="/cbt/login">
                @csrf
                @method('patch')
                <div class="card-body mb-0">
                    <div class="form-group">
                        <br>
                        <p>Nomor Peserta</p>
                        <input type="text" id="id" class="form-control @error('id') is-invalid @enderror text-center" name="id" autofocus>
                        {{-- <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> --}}
                        @error('id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 mt-0 row justify-content-md-center">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection