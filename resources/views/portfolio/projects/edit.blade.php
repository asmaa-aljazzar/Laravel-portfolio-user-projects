@extends('layouts.app')

@section('title', 'Edit project')

@section('content')
    <div class="eyebrow">Keep your work up to date</div>
    <h1>Edit project.</h1>
    <form class="card form-panel" method="POST" action="{{ route('projects.update', $project) }}">
        @csrf
        @method('PUT')
        @include('portfolio.projects._form')
        <div class="actions">
            <button class="button" type="submit">Save changes</button>
            <a href="{{ route('projects.show', $project) }}">Cancel</a>
        </div>
    </form>
@endsection
