@extends('layouts.master')

@section('title', $product->name)

@section('content')

<div class="product-page">

<img src="{{ $product->image }}">

<h1>{{ $product->name }}</h1>

<p class="price">{{ $product->price }}</p>

<div class="desc">
    {!! $product->description !!}
</div>

<button class="btn">أضف للسلة</button>

</div>

@endsection
