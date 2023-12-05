@extends('layouts.yupekyoly-template')

@section('title')
    {{ __('Dashboard') }}
@endsection

@section('slider')
    @include('layouts.slider')
@endsection

@section('provide-section')
    @include('layouts.provide-section')
@endsection

@section('product-area-2')
    @include('layouts.product-area-2')
@endsection

@section('our-blog-area-2')
    @include('layouts.our-blog-area-2')
@endsection