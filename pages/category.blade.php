@extends('layouts.master')

@section('title', $category->name)

@section('content')

<h2>{{ $category->name }}</h2>

<div class="grid">

@foreach($products as $product)

<div class="card">

<a href="{{ $product->url }}">

<img src="{{ $product->image }}">

<h3>{{ $product->name }}</h3>

<p>{{ $product->price }}</p>

</a>

</div>

@endforeach

</div>

@endsection
