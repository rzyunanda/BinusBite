@extends('layouts/mainlayout')

@section('title', 'Explore')

@section('content')
    @component('components.navbar')
        
    @endcomponent
    <section id="explore" class="pt-36 pb-32">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-10">
                    <h1 class="text-xl font-semibold mb-4">Explore</h1>
                    <div class="">
                        @component('components.menu')
                        @endcomponent
                        @component('components.menu')
                        @endcomponent
                        @component('components.menu')
                        @endcomponent
                        @component('components.menu')
                        @endcomponent
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection