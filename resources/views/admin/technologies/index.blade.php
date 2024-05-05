@extends('layouts.admin')

@section('content')

<div class="container py-5">

    <h1>Tutte le tecnologie</h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @foreach($technologies as $technology)
            <tr>
                <th scope="row">{{$loop->index + 1}}</th>
                <td>{{$technology->title}}</td>
                <td><a href="{{route('admin.technologies.show', $technology->id)}}" class="btn btn-info">Mostra</a></td>
                <td><a href="{{route('admin.technologies.edit', $technology->id)}}" class="btn btn-warning">Modifica</a></td>
            </tr>
            @endforeach

        </tbody>
      </table>

      <a href="{{route('admin.technologies.create')}}" class="btn btn-info">Aggiungi Tecnologia</a>

</div>

@endsection