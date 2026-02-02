@extends('layouts.master')

@section('title','الرئيسية')

@section('content')

<section class="hero">
    <img src="{{ asset('assets/images/banner.jpg') }}">
</section>

<section class="products">

    <h2>منتجات مميزة</h2>

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

</section>

@endsection
