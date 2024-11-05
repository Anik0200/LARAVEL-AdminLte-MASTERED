@extends('layouts.backend')
@section('title', 'Dashboard')
@section('breadcrumb', 'Dashboard')


@section('content')
    <div class="row">
        <h1 class="text-center"> Wellcome <span class="text-primary">{{ Auth::user()->name }}</span></h1>
    </div>
@endsection
