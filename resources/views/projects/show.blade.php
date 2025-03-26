@extends('layouts.projects')

@section("title", "Dettaglio Progetto Web")

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Dettaglio Progetto</h2>

    <div class="button-container d-flex gap-3">
        <a class="btn btn-warning" href="{{route('projects.edit', $project->id)}}">Modifica</a>

        <form action="{{route('projects.destroy', $project->id)}}" method="POST">
            @csrf
            @method("DELETE")
            
            <input class="btn btn-danger" type="submit" value="Elimina">
        </form>
    </div>

    <div class="card">
        <div class="card-header">
            <h3>{{ $project->project_name }}</h3>
            <p><strong>Ruolo:</strong> {{ $project->role }}</p>
        </div>
        <div class="card-body">
            <p><strong>Descrizione:</strong> {{ $project->description }}</p>
            <p><strong>Data Lancio:</strong> {{ $project->launch_date }}</p>

            <div class="technologies-container">
                <strong>Tecnologie Utilizzate:</strong>
                @forelse ($project->technologies as $technology)
                    <span  pan class="badge" style="background-color: {{$technology->color}}">{{$technology->name}}</span>
                @empty
                    Nessuna tecnologia
                @endforelse
            </div>
            
            
            <p><strong>Link al Progetto:</strong> <a href="{{ $project->link }}">{{ $project->link }}</a></p>
            <p><strong>Stato:</strong> {{ $project->status }}</p>
            <p><strong>Categoria:</strong> {{ $project->type->name }}</p>
            <p><strong>Immagine Anteprima:</strong></p>
            <img src="{{ $project->image_url }}" alt="Anteprima del Progetto" class="img-fluid">
        </div>
        <div class="card-footer">
            <a href="{{ route('projects.index') }}" class="btn btn-secondary">Torna alla Lista</a>
        </div>
    </div>
</div>
@endsection
