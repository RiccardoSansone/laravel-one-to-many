@extends('layouts.admin')

@section('content')

<h1 class="text-center mt-5">DETAILS OF SINGLE PROJECT</h1>

<div class="table-responsive mt-3">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">IMAGE</th>
                <th scope="col">TITLE</th>
                <th scope="col">DESCRIPTION</th>
                <th scope="col">AUTHOR</th>
                <th scope="col">GITHUBLINK</th>
                <th scope="col">PROJECTLINK</th>

            </tr>
        </thead>
        <tbody>
                <tr>
                    <td><img width="100" src="{{ asset('storage/' . $project->thumb) }}"></td>
                    <td scope="row">{{$project->title}}</td>
                    <td>{{$project->description}}</td>
                    <td>{{$project->authors}}</td>
                    <td><a href="{{$project->projectlink}}">{{$project->projectlink}}</a></td>
                    <td><a href="{{$project->githublink}}">{{$project->githublink}}</a></td>
                </tr>

        </tbody>
    </table>
</div>

@endsection