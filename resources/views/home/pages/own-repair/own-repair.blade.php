@extends('home.master')

@section('header')
    @include('home.global.header.header')
@endsection

@section('preloader')
    @include('home.global.preloader.preloader')
@endsection

@section('content')
    @include('home.components.own-repair.own-repair')
@endsection

@section('footer')
    @include('home.global.footer.footer')
@endsection
