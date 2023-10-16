@extends('layouts/mainlayout')

@section('title', 'Explore')

@section('content')
    @component('components.navbar')
        
    @endcomponent
    <main class="m-4">
        <div class="flex-auto">
            <h1 class="text-xl font-semibold">Explore</h1>
            @component('components.menu')
            @endcomponent
        </div>
    </main>
@endsection