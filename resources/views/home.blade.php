@extends('welcome')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Dashboard
        </div>
        <div class="card-body">
            @livewire('data-diri-index')
        </div>
    </div>
</div>
@endsection
