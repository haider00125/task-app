<select name="priority" class="form-control">
    @foreach ($priorities as $priority)
        <option value="{{ $priority->value }}" {!! $priority === $selected ? 'selected' : '' !!}>
            {{ $priority->name() }}
        </option>
    @endforeach
</select>
