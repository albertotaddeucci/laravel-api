@extends('layouts.admin')

@section('content')

<div class="container py-5">

  <h1>{{$technology->title}}</h1>

  <hr>

  <a href="{{route('admin.technologies.edit', $technology->id)}}" class="btn btn-warning">Modifica</a>

  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
      Elimina
  </button>

<!-- Button trigger modal -->
  
  <!-- Modal -->
  <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <div class="modal-header">
            <h1 class="modal-title fs-5" id="deleteModalLabel">Elimina il post</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
            Sei sicuro di voler eliminare questa tecnologia?
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
            <form action="{{route('admin.technologies.destroy', $technology->id)}}" method="POST">
                @csrf
                @method("DELETE")
                <button class="btn btn-danger">Elimina</button>
            </form>
        </div>

      </div>
    </div>
  </div>


</div>

@endsection