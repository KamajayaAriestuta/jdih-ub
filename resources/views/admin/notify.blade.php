@extends('admin.layouts.base')
@section('title', 'Notify')
@section ('content')

<div class="container">
    <div class="col-lg-12 col-12">
        <h3 class="text-orange text-center mb-2">Notification</h3>
        @foreach(auth()->user()->notifications as $notifications)
        <div class="bg-blue p-4 mb-2">
            <b>{{ $notifications->data['name'] }}</b>
        </div>
        @endforeach
      </div>
</div>


@endsection