@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('util.message')
            
            <div class="card">
                <div class="card-header">Crea una actividad</div>
                <div class="card-body">
                    @if($errors->any())
                        <ul id="errors">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <form method="POST" action="{{ route('activity.save') }}">
                        @csrf
                        <div class="form-group row">
                        <input class="col-sm-12" type="text" required="required" minlength="1" maxlength="50"
                               placeholder="Ingrese el título" name="title" value="{{ old('name') }}"/>
                        </div>
                        <div class="form-group row">
                        <textarea class="col-sm-12" placeholder="Ingrese la descripción" name="description" rows="3"></textarea>
                        </div>
                        <div class="form-group row">
                        <input class="col-sm-12" type="number" required="required" step="0.01" 
                               min="0" max="100" placeholder="Ingrese el porcentaje" name="percentage"/>
                        </div>
                        <div class="form-group row">
                        <input class="col-sm-12" type="number" step="0.01" min="0" max="5"
                               placeholder="Ingrese la calificación" name="score"/>
                        </div>
                        <div class="form-group row">
                        <input class="col-sm-12" type="submit" value="Crear" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
