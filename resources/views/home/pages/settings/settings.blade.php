@extends('home.master')

@section('header')
    @include('home.global.header.header')
@endsection

@section('preloader')
    @include('home.global.preloader.preloader')
@endsection

@section('content')
    @include('home.components.settings.settings')
@endsection

@section('footer')
    @include('home.global.footer.footer')
@endsection
