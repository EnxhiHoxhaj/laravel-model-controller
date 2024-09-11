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

    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>

  </tbody>
</table>
</div>

@endsection