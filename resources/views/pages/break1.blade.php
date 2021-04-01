@extends('layouts.app4')
<script>
  function startTimer(duration, display) {
  var timer = duration, minutes, seconds;
  setInterval(function () {
      
      minutes = parseInt(timer / 60, 10);
      seconds = parseInt(timer % 60, 10);

      jam = "00";
      minutes = minutes < 10 ? "0" + minutes : minutes;
      seconds = seconds < 10 ? "0" + seconds : seconds;

      display.textContent = seconds;

      if (--timer < 0) {
          // timer = duration;
          window.location.href = "http://www.w3schools.com";
      }
  }, 1000);
}

window.onload = function () {
  var fiveMinutes = 30 * 1,
      display = document.querySelector('#time');
  startTimer(fiveMinutes, display);
};
</script>
@section('content')
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-12">
              <h1 class="m-0"></h1>
            </div>
          </div>
        </div>
      </div>
    <section class="content">
      <div class="row justify-content-md-center">
      <div class="card col-12 col-lg-6 col-md-12 col-sm-12">
          <div class="mb-3 mt-4 row justify-content-md-center">
            <a href="#" class="btn btn-primary">Soal Selanjutnya</a>
          </div>
          <div class="mb-3 mt-4 row justify-content-md-center">
            {{-- <div id="time" style="font-size:20px;"></div> --}}
          </div>
          
      </div>
      </div>
    </section>
@endsection