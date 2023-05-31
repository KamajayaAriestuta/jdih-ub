@extends('admin.layouts.base')
@section('title', 'Status Pemohon')
@section ('content')


    <h5>Pemohon Register</h5>
    @if(session('messages'))
    <div class="alert alert-success">
        {{ session('messages') }}
    </div>
    @endif
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Email</th>
            <th scope="col">Unit Kerja</th>
            <th scope="col">Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($data_pemohon as $pemohon)
        <tr>
            <td>{{ $pemohon->name }}</td>
            <td> {{ $pemohon->email }} </td>
            <td> {{ $pemohon->unit_kerja->name }}</td>
            <td> @if($pemohon->status === 2)Pending @elseif($pemohon->status === 1) Active @else Inactive @endif </td>
            <td>
                <a href="{{ route('status', ['id'=>$pemohon->id]) }}">
                    @if($pemohon->status === 0)Active 
                    @elseif($pemohon->status === 1)Inactive
                    @else Active @endif
                </a>
            </td>
        </tr> 
        @endforeach
        </tbody>
  </table>

@endsection

@section('js')

<script>
    function hideButton(x){
        x.style.display = 'none';
    }

</script>

@endsection