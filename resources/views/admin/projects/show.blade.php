@extends('layouts.admin')

@section('content')
<div class="container p-5">
    <h1>Pagina show</h1>

    <h3 class="mb-5">{{$project->name}}</h3>
    <p>{{$project->type?->title}}</p>
    <div class="row">
        <div class="col-6">
            <img class="w-100" src="{{asset('storage/' . $project->image)}}" alt="">
        
            <div class="py-5">
                    <a href="{{route('admin.projects.edit', $project)}}" class="btn btn-warning">Modifica</a>
                    
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Elimina
                    </button>

                    <a href="{{route('admin.projects.index')}}" class="btn btn-primary">Torna ai progetti</a>
            </div>
        </div>
        <div class="col-6">
            <h5>Info sul Progetto</h5>
            <hr>
            <p><strong>Descrizione: </strong>{{ $project->description }}</p>
            <hr>
            <p><strong>Tecnologie utilizzate: </strong>
            @foreach($project->technologies as $technology)
            {{$technology->title}}
            @endforeach
            </p>
            <hr>
            <p><strong>Link: </strong>{{$project->repo_links}}</p>
        </div>  
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">

                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina il progetto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    Sei sicuro che vuoi eliminare il progetto? "{{$project->name}}"
                </div>


                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                    <form action="{{route('admin.projects.destroy', $project)}}" method="POST">
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