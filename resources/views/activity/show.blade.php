@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Actividad: {{ $data['activity']->title }}</div>
                <div class="card-body">
                    <div class="form-group row">
                        Descripción: {{ $data['activity']->description }}
                    </div>
                    <div class="form-group row">
                        Porcentaje: {{ $data['activity']->percentage }}%
                    </div>
                    <div class="form-group row">
                        Calificación: {{ $data['activity']->score }}
                    </div>
                    <div class="form-group row">
                        <form action="{{ route('activity.delete', ['id' => $data['activity']->id]) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
