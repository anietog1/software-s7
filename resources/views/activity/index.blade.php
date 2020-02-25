@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="row p-5">
            <div class="col-md-12">
                <table>

                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Ver</th>
                </tr>

                @foreach($data["activities"] as $activity)
                    <tr>
                        <td>
                            @if($loop->index < 2)
                                <b>{{ $activity->id }}</b>
                            @else
                                {{ $activity->id }}
                            @endif
                        </td>
                        <td>{{ $activity->title }}</td>
                        <td><a href="{{ route('activity.show', ['id' => $activity->id]) }}"
                               class="btn btn-secondary btn-lg active" role="button"
                               aria-pressed="true"></a></td>
                    </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
