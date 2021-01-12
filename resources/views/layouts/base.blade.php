@extends('layouts.app')

@section('content')

<main>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                {{ $slot }}         
            </div>
            <div class="col"></div>
        </div>
    </div>
</main>

@endsection
