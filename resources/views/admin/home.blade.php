@extends('layouts.admin')

@section('content')
<div class="dashboard p-5">
    <h1 class="mb-5">Benvenuto {{Auth::user()->name}}</h1>

    <a href="{{route('admin.projects.index')}}" class="btn btn-info">Visualizza i tuoi progetti</a>
</div>
@endsection

