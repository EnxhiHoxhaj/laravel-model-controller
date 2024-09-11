@extends('layouts.main')

@section('content')
<div class='lista'>
  <h1>VIDEOTECA</h1>
  <div class="cont-card d-flex">
    @foreach ($movie as $film)
      <div class="card dimention">
        <div class="card-body">
          <h5 class="card-title">Title: {{$film->title}}</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">Original title: {{$film->original_title}}</h6>
          <h6 class="card-subtitle mb-2 text-body-secondary">Nationality: {{$film->nationality}}</h6>
          <h6 class="card-subtitle mb-2 text-body-secondary">Release date: {{$film->date}}</h6>
          <h6 class="card-subtitle mb-2 text-body-secondary">Vote: {{$film->vote}}</h6>
        </div>
      </div>
    @endforeach
  </div>
</div>



@endsection