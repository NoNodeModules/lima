<!-- Sidebar Menu -->
<nav class="mt-2">
    <div class="card-body box-profile">
        <div class="text-center">
            <img class="profile-user-img" src="../../blank-profile.jpeg">
        </div>
        <h3 class="profile-username text-white">{{ $id }}</h3>
        <p class="text-muted text-center text-white">{{ $nama }}</p>
    </div>

    <div class="row">
        <!-- /.col -->
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h6 class="card-title text-center">Daftar Soal</h6>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                      @php
                          $sudah_terjawab = DB::table('answers2')->where('id',$id)->first();
                      @endphp
                      {{-- {{$sudah_terjawab->n1}} --}}
                      @for ($i = 81; $i < 91; $i++)
                      @php
                          $nomor_urut = 'n'.$i;
                      @endphp
                        @if ($sudah_terjawab->$nomor_urut)
                          <a href="/cbt/{{$id}}/{{$i}}" type="button" class="btn btn-primary btn-so text-white">{{$i}}</a>  
                        @else
                          <a href="/cbt/{{$id}}/{{$i}}" type="button" class="btn btn-default btn-so">{{$i}}</a>  
                        @endif
                      @endfor
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>

</nav>
<!-- /.sidebar-menu -->