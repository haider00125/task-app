<select name="project_id" class="form-control">
    <option value="">---</option>
    @foreach ($projects as $project)
        <option value="{{ $project->id }}" {!! $project->id === $selected ? 'selected' : '' !!}>
            {{ $project->name }}
        </option>
    @endforeach
</select>
