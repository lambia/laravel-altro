@extends('layouts.app')

@section('content')
    <h1>Studenti:</h1>
    @foreach ($studenti as $singoloStudente)
        <p>{{ $singoloStudente->name }} {{ $singoloStudente->surname }}</p>
    @endforeach
@endsection