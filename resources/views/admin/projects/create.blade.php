@extends('layouts.admin')

@section('content')


<div class="col-6 mx-auto shadow p-4 mt-4">

    <h1>ADD NEW PROJECT</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('project.store') }}" method="post" enctype="multipart/form-data">

        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control p-2" name="title" id="title" aria-describedby="helpId" placeholder="write a title" value="{{ old('title') }}">
            <small id="titleHelper" class="form-text text-muted">write a title for ypur project</small>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control p-2" name="description" id="description" aria-describedby="helpId" placeholder="write description" value="{{ old('description') }}">
            <small id="descriptionHelper" class="form-text text-muted">write a description for your project</small>
        </div>

        <div class="mb-3">
            <label for="authors" class="form-label">Authors</label>
            <input type="text" class="form-control p-2" name="authors" id="authors" aria-describedby="help" placeholder="Write authors" value="{{ old('authors') }}">
            <small id="authorsHelper" class="form-text text-muted">write the authors of your project</small>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Scegli una immagine</label>
            <input type="file" class="form-control" name="thumb" id="thumb" placeholder="Scegli una immagine per il tuo progetto" aria-describedby="thumb_helper" value="{{ old('thumb') }}">
            <div id="thumb_helper" class="form-text">Inserisci una immagine</div>
        </div>

        <button type="submit" class="btn btn-primary 3">Add Project</button>
    </form>
</div>
@endsection