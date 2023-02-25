@extends('admin.layouts.base')

@section('title'. 'Data-Create')

@section ('content')



<div class="row">
  <div class="col-md-12">

    {{-- Alert Here --}}
    @if($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
              <li> {{$error}} </li>
          @endforeach
        </ul>
      </div>
    @endif

    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Create Data</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form enctype="multipart/form-data" method="post" action="{{ route('admin.data.store')}}">
        @csrf
        
        <div class="card-body">
          <div class="form-group">
            <label for="title">Perihal</label>
            <input type="text" class="form-control" id="perihal" name="perihal" value="{{ old('perihal') }}" placeholder="OTK Universitas Brawijaya">
          </div>
          <div class="form-group">
            <label>Kategori</label>
            <select class="custom-select" name="kategori_id">
              <option value=""> - pilih -</option>
              @foreach ($kategori as $item)
                  <option value="{{ $item->id }}" {{ old('kategori_id') == $item->id ? 'selected' : null }}> {{ $item->nama_kategori }} </option>
              @endforeach
            </select> 
          </div>
          <div class="form-group">
            <label for="duration">Nomor</label>
            <input type="text" class="form-control" id="nomor" name="nomor" placeholder="82" value="{{ old('nomor') }}">
          </div>
          <div class="form-group">
            <label for="duration">Nomor Perundangan</label>
            <input type="text" class="form-control" id="nomor_perundangan" name="nomor_perundangan" placeholder="82" value="{{ old('nomor_perundangan') }}">
          </div>
         <div class="form-group">
            <label for="duration">Tahun</label>
            <input type="text" class="form-control" id="tahun" name="tahun" placeholder="2022" value="{{ old('tahun') }}">
          </div>
          <div class="form-group">
            <label>Tanggal Ditetapkan</label>
            <div class="input-group date" id="tanggal_ditetapkan" data-target-input="nearest">
              <input type="text" name="tanggal_ditetapkan" class="form-control datetimepicker-input" data-target="#tanggal_ditetapkan" value="{{ old('tanggal_ditetapkan') }}"/>
              <div class="input-group-append" data-target="#tanggal_ditetapkan" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>Tanggal Diundangkan</label>
            <div class="input-group date" id="tanggal_diundangkan" data-target-input="nearest">
              <input type="text" name="tanggal_diundangkan" class="form-control datetimepicker-input" data-target="#tanggal_diundangkan" value="{{ old('tanggal_diundangkan') }}" />
              <div class="input-group-append" data-target="#tanggal_diundangkan" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="duration">Kaitan</label>
            <input type="text" class="form-control" id="kaitan" name="kaitan" placeholder="kaitan data" value="{{ old('kaitan') }}">
          </div>
          
          <div class="form-group">
            <label for="small-thumbnail">File Data</label>
            <input type="file" class="form-control" id="file_upload" name="file_upload">
          </div>
          <div class="form-group">
            <label>Status</label>
            <select class="custom-select" name="status_id">
              <option value=""> - pilih - </option>
              @foreach ($status as $itemstatus)
                  <option value="{{ $itemstatus->id }}" {{ old('status_id') == $itemstatus->id ? 'selected' : null }}> {{$itemstatus->nama_status}} </option>
              @endforeach
            </select> 
          </div>
          <div class="form-group">
            <label>Rekomendasi</label>
            <select class="custom-select" name="rekomendasi">
              <option value="0" {{ old('rekomendasi') === '0'? "selected" : "" }}>Rekomendasi</option>
              <option value="1" {{ old('rekomendasi') === '1'? "selected" : "" }}>Tidak Rekomendasi</option>
            </select>
          </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection

@section ('js')
  <script>
    $('#tanggal_ditetapkan').datetimepicker({
      format: 'YYYY-MM-DD'
    });

     $('#tanggal_diundangkan').datetimepicker({
      format: 'YYYY-MM-DD'
    });
  </script>
@endsection




   

              {{-- $con = mysqli_connect("127.0.0.1", "root", "dekam", "jdih_ub_db") or die (mysqli_connect_error());

                  $sql_kategori = mysqli_query($con, "SELECT * FROM kategori") or die (mysqli_error($con));
                  while($data_kategori = mysqli_fetch_array($sql_kategori)){
                    echo '<option value=" '.$data_kategori['id'].'">'.$data_kategori['nama_kategori'].'
                      
                      </option>';
                  }
               --}}