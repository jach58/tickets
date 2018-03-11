@extends('master')
@section('title','Ver todos los tickets')
@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2> Tickets </h2>
            </div>
            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            @if($tickets->isEmpty())
                <p> No hay tickets. </p>
            @else
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Titulo</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tickets as $ticket)
                        <tr>
                            <td>{!! $ticket->id !!}</td>
                            <td>
                                <a href="{!! action('TicketsController@show', $ticket->slug) !!}">
                                    {!! $ticket->title !!}
                                </a>
                            </td>
                            <td>{!! $ticket->status ? 'Pendiente': 'Respondido' !!}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection