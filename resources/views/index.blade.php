@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <a class="btn btn-primary" href="{{ route('activity.create') }}" role="button">ACTIVIDAD 2</a>
        <img src="https://tctechcrunch2011.files.wordpress.com/2015/08/safe_image.gif">
        <a class="btn btn-primary" href="{{ route('activity.index') }}" role="button">ACTIVIDAD 4 (+ 7)</a>
    </div>
</div>

@endsection
