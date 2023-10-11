@extends('layouts.mainlayout')

@section('title', 'Menu')

@section('content')
    <h1>Menu</h1>

    @foreach ($menus as $menu)
        <div>
            <h2><a href="/menus/{{ $menu["id"] }}">{{ $post["title"] }}</a></h2>
        </div>
    @endforeach
@endsection