{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('hero')
    <div>HERO HOME</div>
@endsection

@section('content')
<div class="container my-5">
    <h1>HOME</h1>
    <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum incidunt provident nesciunt tempore, soluta dolorem dolores sunt magni, dolor quidem blanditiis quia ullam veritatis earum qui similique enim? Cum, quo.
    </p>
</div>

@endsection


@section('titlePage')
    home
@endsection
