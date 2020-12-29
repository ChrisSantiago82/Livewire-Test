@extends('layouts.master')


@section('css')

    <link href="/css/app.min.css" rel="stylesheet">


    <style>

    </style>

    @livewireStyles

@endsection


@section('content')

    @livewire('navigation')


@endsection

@section('plugins')


@endsection


@section('scripts')

    @livewireScripts

    <script>



    </script>

@endsection
