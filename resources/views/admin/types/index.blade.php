@extends('layouts.admin')

@section('content')

<div class="container py-5">

    <h1>Tutte le tipologie</h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Descrizione</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @foreach($types as $type)
            <tr>
                <th scope="row">{{$loop->index + 1}}</th>
                <td>{{$type->title}}</td>
                <td>{{$type->description}}</td>
                <td><a href="{{route('admin.types.show', $type->id)}}" class="btn btn-info">Mostra</a></td>
                <td><a href="{{route('admin.types.edit', $type->id)}}" class="btn btn-warning">Modifica</a></td>
            </tr>
            @endforeach

        </tbody>
      </table>

      <a href="{{route('admin.types.create')}}" class="btn btn-info">Aggiungi Tipologia</a>

</div>

@endsection