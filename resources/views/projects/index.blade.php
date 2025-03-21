@extends("layouts.projects")

@section("title", "Lista Progetti")

@section('content')
<div class="container mt-4">
    <h2 class="mb-3">Lista Progetti</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome del Progetto</th>
                <th>Data Lancio</th>
                <th>Tecnologie</th>
                <th>Stato</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->project_name }}</td>
                    <td>{{ $project->launch_date }}</td>
                    <td>{{ $project->technologies }}</td>
                    <td>{{ $project->status }}</td>
                    <td><a href="{{ route('projects.show', $project) }}">Dettaglio</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection