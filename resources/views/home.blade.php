@extends('layouts.main')
@section('content')

<div id="main">
    @foreach ($data as $item)
        <article class="thumb">
            <a href="{{ $item->image }}" style="object-fit: cover; image-rendering: pixelated; " class="image"><img src="{{ $item->image }}" alt="" style="object-fit: cover; image-rendering: pixelated;" /></a>
            <h2>{{ $item->title }}</h2>
            <p>{{ $item->description }}</p>
        </article>
    @endforeach
</div>
@endsection