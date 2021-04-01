@extends('layouts.app1')
@section('content')
<section class="content">
  <div class="row justify-content-md-center">
    <div class="col-5 p-4">
      <div class="card text-center">
          <p class="pt-3 text-muted" style="font-family: Teko, sans-serif;">Bimbingan Belajar Zigma</p>
          <h2 style="font-family: Teko, sans-serif;color:#2E73B6">Tryout Masuk Perguruan Tinggi</h2>
          <p class="font-small-3 pt-2" style="font-family: Teko, sans-serif;"><strong>Versi: 2.0.2</strong></p>
          <div class="card-body" style="background-color: #2E73B6">
            <div class="card-text text-white" style="font-family: Teko, sans-serif;">
              IP Address
            </div>
              <input type="text" class="form-control form-control-sm col-2 text-center ml-auto mr-auto" value="192.168.1.1" style="font-family: Oswald, sans-serif;">
          </div>
          <div class="pt-1 pb-1">
            <button type="button" class="btn btn-outline-primary float-left ml-1" style="font-family: Oswald, sans-serif; font-weight: 600">Keluar</button>
            <a href="/cbt/beranda" type="button" class="btn btn-primary float-right mr-1" style="font-family: Oswald, sans-serif;">Masuk</a>
          </div>
      </div>
    </div>
  </div>
</section>
@endsection