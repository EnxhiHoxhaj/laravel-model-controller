@extends('layouts.main')

@section('content')

<div class="container">
    <h1>Videoteca</h1>
    <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Titolo originale</th>
        <th scope="col">Nazionalità</th>
        <th scope="col">Data d'uscita</th>
        <th scope="col">Voto</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($movie as $film)
      <tr>
        <th scope="row">{{$film->id}}</th>
        <td>{{$film->title}}</td>
        <td>{{$film->original_title}}</td>
        <td>{{$film->nationality}}</td>
        <td>{{$film->date}}</td>
        <td>{{$film->vote}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection