@extends('layouts.admin')

@section('content')
<div class="container p-5">
    <h1>Pagina create</h1>

    <form action="{{route('admin.projects.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Titolo</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description') }}</textarea>
            @error('description')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Copertina</label>
            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" value="{{ old('image') }}">
            @error('image')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="repo_links" class="form-label">Link Repository</label>
            <input type="text" class="form-control @error('repo_links') is-invalid @enderror" id="repo_links" name="repo_links" value="{{ old('repo_links') }}">
            @error('repo_links')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="type_id">Tipologia</label>
            <select class="form-select" name="type_id" id="type_id">               
                <option value=""></option>
                
                @foreach ($types as $type)
                <option value="{{$type->id}}" {{ $type->id == old('type_id') ? 'selected' : '' }}>{{ $type->title }}</option>
                @endforeach
                
            </select>
        </div>
        <div class="mb-4">
            <label class="mb-2" for="">Technologies</label>
            <div class="d-flex gap-4">

                @foreach($technologies as $technology)
                <div class="form-check ">

                    <input 
                        type="checkbox" 
                        name="technologies[]"
                        value="{{$technology->id}}" 
                        class="form-check-input" 
                        id="tag-{{$technology->id}}"

                        {{ in_array($technology->id, old('technologies', [])) ? 'checked' : '' }}
                    > 
                    
                    <label for="tag-{{$technology->id}}" class="form-check-label">{{$technology->title}}</label>
                </div>
                @endforeach

            </div>
        </div>
        
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
</div>
@endsection