@extends("layouts.projects")

@section("title", "Creazione nuovo progetto")

@section('content')
        <div class="d-flex flex-column justify-content-center w-50">
        <form action="{{route('projects.store')}}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label for="project_name" class="form-label">Nome del Progetto</label>
                <input type="text" class="form-control" id="project_name" name="project_name" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="technologies" class="form-label">Tecnologie</label>
                <input type="text" class="form-control" id="technologies" name="technologies" required>
            </div>

            <div class="mb-3">
                <label for="launch_date" class="form-label">Data di Lancio</label>
                <input type="date" class="form-control" id="launch_date" name="launch_date" required>
            </div>

            <div class="mb-3">
                <label for="git_link" class="form-label">Link GitHub (opzionale)</label>
                <input type="url" class="form-control" id="git_link" name="git_link">
            </div>

            <div class="mb-3">
                <label for="role" class="form-label">Ruolo</label>
                <input type="text" class="form-control" id="role" name="role" required>
            </div>

            <div class="mb-3">
                <label for="image_url" class="form-label">URL Immagine (opzionale)</label>
                <input type="url" class="form-control" id="image_url" name="image_url">
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Stato</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="Completato">Completato</option>
                    <option value="In corso">In corso</option>
                    <option value="In manutenzione">In manutenzione</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="type_id" class="form-label">Stato</label>
                <select class="form-control" id="type_id" name="type_id" required>
                    @foreach ($types as $type)
                        <option value={{$type->id}}>{{$type->name}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Aggiungi progetto</button>
        </form>
    </div>
 
@endsection
