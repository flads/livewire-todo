@extends('layouts.app')

@section('content')

<main>
    <div class="container">
        <div class="row">
            <div class="col-xl-3 order-xl-1 order-sm-1 col-md-12 order-md-2">
                @livewire('index-tasks')
            </div>
            <div class="order-xl-2 order-sm-2 col-xl-6 col-md-12 order-md-1">
                {{ $slot }}         

                @livewire('edit-task')
            </div>
            <div class="col-xl-3 order-xl-3 order-sm-3 col-md-12 order-md-3">
                @livewire('completed-tasks')
            </div>
        </div>
    </div>
</main>

@endsection
