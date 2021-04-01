<div class="row">
  <div class="col-6">
    <div class="row">
      <div class="col-8">
        <form method="POST" action="">
          @csrf
          @method('patch')
            @php
              $sudah_terjawab = DB::table('answers2')->where('id',$id)->first();
            @endphp
              @php
                $nomor_urut = 'n'.$no;
              @endphp
            @if($sudah_terjawab->$nomor_urut == 'A')
              <a href="/cbt/{{$id}}/{{$no}}/A" type="button" class="btn btn-primary btn-ja">A</a>
              <a href="/cbt/{{$id}}/{{$no}}/B" type="button" class="btn btn-default btn-ja">B</a>
              <a href="/cbt/{{$id}}/{{$no}}/C" type="button" class="btn btn-default btn-ja">C</a>
              <a href="/cbt/{{$id}}/{{$no}}/D" type="button" class="btn btn-default btn-ja">D</a>
              <a href="/cbt/{{$id}}/{{$no}}/E" type="button" class="btn btn-default btn-ja">E</a>
            @elseif($sudah_terjawab->$nomor_urut == 'B')
              <a href="/cbt/{{$id}}/{{$no}}/A" type="button" class="btn btn-default btn-ja">A</a>
              <a href="/cbt/{{$id}}/{{$no}}/B" type="button" class="btn btn-primary btn-ja">B</a>
              <a href="/cbt/{{$id}}/{{$no}}/C" type="button" class="btn btn-default btn-ja">C</a>
              <a href="/cbt/{{$id}}/{{$no}}/D" type="button" class="btn btn-default btn-ja">D</a>
              <a href="/cbt/{{$id}}/{{$no}}/E" type="button" class="btn btn-default btn-ja">E</a>
            @elseif($sudah_terjawab->$nomor_urut == 'C')
              <a href="/cbt/{{$id}}/{{$no}}/A" type="button" class="btn btn-default btn-ja">A</a>
              <a href="/cbt/{{$id}}/{{$no}}/B" type="button" class="btn btn-default btn-ja">B</a>
              <a href="/cbt/{{$id}}/{{$no}}/C" type="button" class="btn btn-primary btn-ja">C</a>
              <a href="/cbt/{{$id}}/{{$no}}/D" type="button" class="btn btn-default btn-ja">D</a>
              <a href="/cbt/{{$id}}/{{$no}}/E" type="button" class="btn btn-default btn-ja">E</a>
            @elseif($sudah_terjawab->$nomor_urut == 'D')
              <a href="/cbt/{{$id}}/{{$no}}/A" type="button" class="btn btn-default btn-ja">A</a>
              <a href="/cbt/{{$id}}/{{$no}}/B" type="button" class="btn btn-default btn-ja">B</a>
              <a href="/cbt/{{$id}}/{{$no}}/C" type="button" class="btn btn-default btn-ja">C</a>
              <a href="/cbt/{{$id}}/{{$no}}/D" type="button" class="btn btn-primary btn-ja">D</a>
              <a href="/cbt/{{$id}}/{{$no}}/E" type="button" class="btn btn-default btn-ja">E</a>
            @elseif($sudah_terjawab->$nomor_urut == 'E')
              <a href="/cbt/{{$id}}/{{$no}}/A" type="button" class="btn btn-default btn-ja">A</a>
              <a href="/cbt/{{$id}}/{{$no}}/B" type="button" class="btn btn-default btn-ja">B</a>
              <a href="/cbt/{{$id}}/{{$no}}/C" type="button" class="btn btn-default btn-ja">C</a>
              <a href="/cbt/{{$id}}/{{$no}}/D" type="button" class="btn btn-default btn-ja">D</a>
              <a href="/cbt/{{$id}}/{{$no}}/E" type="button" class="btn btn-primary btn-ja">E</a>              
            @else
              <a href="/cbt/{{$id}}/{{$no}}/A" type="button" class="btn btn-default btn-ja">A</a>
              <a href="/cbt/{{$id}}/{{$no}}/B" type="button" class="btn btn-default btn-ja">B</a>
              <a href="/cbt/{{$id}}/{{$no}}/C" type="button" class="btn btn-default btn-ja">C</a>
              <a href="/cbt/{{$id}}/{{$no}}/D" type="button" class="btn btn-default btn-ja">D</a>
              <a href="/cbt/{{$id}}/{{$no}}/E" type="button" class="btn btn-default btn-ja">E</a>              
            @endif
              
        </form>
      </div>
    </div>
  </div>
  <div class="col-6">
    <div class="float-right d-none d-sm-inline-block">
      -
    </div>
  </div>
</div>
<hr>
<div class="row">
  <div class="col-6">
    <div class="row">
      <div class="col-3">
        <button type="button" class="btn btn-block btn-primary btn-sm">Sebelumnya</button>
      </div>
      <div class="col-3">
        <button type="button" class="btn btn-block btn-primary btn-sm">Selanjutnya</button>
      </div>
    </div>
  </div>
  <div class="col-6">
    <div class="float-right d-none d-sm-inline-block">
      {{-- <input type="button" class="btn btn-block btn-outline-danger btn-sm" name="btn" id='btn' value="Selesai" onclick="to_start()";> --}}
      <a href="/cbt/break1/" type="button" class="btn btn-block btn-outline-danger btn-sm">Selesai</a>
    </div>
  </div>
</div>