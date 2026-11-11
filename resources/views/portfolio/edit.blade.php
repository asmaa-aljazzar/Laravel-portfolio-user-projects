@extends('layouts.app')

@section('title', 'Update Profile')

@section('content')
    <div class="eyebrow">Change your own information</div>
    <h1>Update Profile</h1>
    <form class="card form-panel" method="POST" action="{{ route('profile.update') }}">
        @csrf
        @method('PUT')
        <div class="field">
            <label for="name">Name</label>
            <input id="name" name="name" value="{{ old('name', $developer->name) }}" required maxlength="255" @error('name') aria-invalid="true" aria-describedby="name-error" @enderror>
            @error('name') <p class="error" id="name-error">{{ $message }}</p> @enderror
        </div>
        <div class="field">
            <label for="job_title">Job title</label>
            <input id="job_title" name="job_title" value="{{ old('job_title', $developer->job_title) }}" required maxlength="255" @error('job_title') aria-invalid="true" aria-describedby="job-title-error" @enderror>
            @error('job_title') <p class="error" id="job-title-error">{{ $message }}</p> @enderror
        </div>
        <div class="field">
            <label for="skills">Skills</label>
            <p id="skills-hint">Enter one skill per line.</p>
            <textarea id="skills" name="skills" required aria-describedby="skills-hint skills-error" @error('skills') aria-invalid="true" @enderror>{{ old('skills', implode("\n", $developer->skills ?? [])) }}</textarea>
            @error('skills') <p class="error" id="skills-error">{{ $message }}</p> @enderror
        </div>
        <div class="actions">
            <button class="button" type="submit">Save profile</button>
            <a href="{{ route('home') }}">Cancel</a>
        </div>
    </form>
@endsection
