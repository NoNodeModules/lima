<style>
  .tr{
    padding-left: 10px;
  }
</style>
@extends('layouts.app3')
@section('content')
  <div class="row">
    <div class="col-12">
      {{-- <diva class="card"> --}}
        <div class="card-body table-responsive p-4" style="max-height: 650px;">
          <table class="table table-head-fixed text-nowrap">
            <tbody>
              
                <img src="../../{{$no}}.png" class="center" width="600px">
            </tbody>
          </table>
        </div>
      {{-- </diva> --}}
    </div>
  </div>
@endsection