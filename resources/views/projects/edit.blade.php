@extends("layouts.projects")

@section("title", "Creazione nuovo progetto")

@section('content')
        <div class="d-flex flex-column justify-content-center w-50">
        <form action="{{route('projects.update', $project->id)}}" method="POST">
            @csrf
            @method('PUT')  
    
            <div class="mb-3">
                <label for="project_name" class="form-label">Nome del Progetto</label>
                <input type="text" class="form-control" id="project_name" name="project_name" value="{{$project->project_name}}" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{$project->description}}</textarea>
            </div>



            <div class="mb-3">
                <label for="launch_date" class="form-label">Data di Lancio</label>
                <input type="date" class="form-control" id="launch_date" name="launch_date" value="{{$project->launch_date}}" required>
            </div>

            <div class="mb-3">
                <label for="git_link" class="form-label">Link GitHub (opzionale)</label>
                <input type="url" class="form-control" id="git_link" name="git_link" value="{{ $project->git_link ?? '' }}">
            </div>

            <div class="mb-3">
                <label for="role" class="form-label">Ruolo</label>
                <input type="text" class="form-control" id="role" name="role" value="{{$project->role}}" required>
            </div>

            <div class="mb-3">
                <label for="image_url" class="form-label">URL Immagine (opzionale)</label>
                <input type="url" class="form-control" id="image_url" name="image_url" value="{{ $project->image_url ?? '' }}">
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Stato</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="Completato" {{$project->status == 'Completato' ? 'selected' : ''}}>Completato</option>
                    <option value="In corso" {{$project->status == 'In corso' ? 'selected' : ''}}>In corso</option>
                    <option value="In manutenzione" {{$project->status == 'In manutenzione' ? 'selected' : ''}}>In manutenzione</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="type_id" class="form-label">Tipologia</label>
                <select class="form-control" id="type_id" name="type_id" required>
                    @foreach ($types as $type)
                        <option value={{$type->id}} {{$type->id == $project->type_id ? "selected" : ""}}>{{$type->name}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Modifica progetto</button>
        </form>
    </div>
 
@endsection
