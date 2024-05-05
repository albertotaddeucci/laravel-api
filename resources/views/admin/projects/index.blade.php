@extends('layouts.admin')

@section('content')
<div class="container p-5">
    <h1 class="mb-5">Pagina index</h1>
    
    <div class="row gap-4">
        @foreach($projects as $project)
        <div class="card bg-secondary" style="width: 18rem;">
            <img src="{{asset('storage/' . $project->image)}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$project->name}}</h5>
                <p class="card-text">{{$project->description}}</p>
                <a href="{{route('admin.projects.show', $project)}}" class="btn btn-info">Visualizza progetto</a>            
            </div>
        </div>
        @endforeach
        <div class="card align-items-center justify-content-center bg-secondary" style="width: 18rem;">
            <a href="{{route('admin.projects.create')}}" class="btn btn-info">Crea nuovo progetto</a>                          
        </div>
    </div>
</div>
@endsection