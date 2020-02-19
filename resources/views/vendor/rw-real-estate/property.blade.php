@extends('vendor.rw-real-estate.layouts.base')

@section('content')
    <div class="title m-b-md">
        <h1 class="c-title c-title--h1">Property</h1>    
        <div class="list">
            <div class="list__item"><b>Name</b>:<span>{{ $property->name }}</span> </div>
            <div class="list__item"><b>Description</b>:<span>{{ $property->description }}</span> </div>
            <div class="list__item"><b>Agente</b>:<span>{{ $property->agent->name }}</span> </div>
            <div class="list__item"><b>Type</b>:<span>{{ $property->type->type }}</span> </div>
        </div>
    </div>
@endsection

@push('css')
    <style>
      
    </style>
@endpush

@push('js')
    <script>

    </script>
@endpush
