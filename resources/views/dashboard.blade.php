@extends('layouts.master')

@section('title')
    Dashboard
@endsection
@section('header')
    <h1>
        Dashboard
    </h1>
@endsection
@section('content')
    <main>
        <h2>Data</h2>
        <div class="row">
            @livewire('attribute-gallery')
        </div>
    </main>
@endsection