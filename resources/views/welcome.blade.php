@extends('layouts.app')

@section('title')
Tots
@endsection 

@section('content')

<div class="row">
  <div class="col-md-12">
    <div class="card">       
        @livewire('detail.detail-asset') 
    </div>
  </div>
</div>

@endsection