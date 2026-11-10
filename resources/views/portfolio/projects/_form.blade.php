<div class="field">
    <label for="title">Title</label>
    <input id="title" name="title" value="{{ old('title', $project->title ?? '') }}" required maxlength="255" @error('title') aria-invalid="true" aria-describedby="title-error" @enderror>
    @error('title') <p class="error" id="title-error">{{ $message }}</p> @enderror
</div>
<div class="field">
    <label for="description">Description</label>
    <textarea id="description" name="description" required maxlength="255" @error('description') aria-invalid="true" aria-describedby="description-error" @enderror>{{ old('description', $project->description ?? '') }}</textarea>
    @error('description') <p class="error" id="description-error">{{ $message }}</p> @enderror
</div>
@isset($project)
    <div class="field">
        <label for="status">Status</label>
        <select id="status" name="status" required @error('status') aria-invalid="true" aria-describedby="status-error" @enderror>
            @foreach(['Pending', 'In Progress', 'Completed'] as $status)
                <option value="{{ $status }}" @selected(old('status', $project->status) === $status)>{{ $status }}</option>
            @endforeach
        </select>
        @error('status') <p class="error" id="status-error">{{ $message }}</p> @enderror
    </div>
@endisset
