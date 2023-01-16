@extends('layouts.app')

@section('content')
<div class="card mt-5">
    <div class="card-header">
        {{ __(':action Task', ['action' => $task ? 'Edit' : 'Add']) }}
    </div>
    <div class="card-body">
        <form method="POST" action="{{ $task ? route('tasks.update', $task->id) : route('tasks.store') }}">
            @csrf
            @if ($task)
                @method('PUT')
            @endif

            <div class="form-group">
                <label for="name">{{ __('Project') }}</label>
                <x-projects :selected="$task?->project_id"/>
            </div>

            <div class="form-group">
                <label for="name">{{ __('Task name') }}</label>
                <input type="text" name="name" value="{{ $task?->name }}" class="form-control" placeholder="{{ __('Task name') }}">
            </div>

            <div class="form-group">
                <label for="name">{{ __('Priority') }}</label>
                <x-priorities :selected="$task?->priority"/>
            </div>

            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
            <a href="{{ route('tasks.index') }}" class="btn btn-secondary">{{ __('Back') }}</a>

            <x-messages :errors="$errors"/>
        </form>
    </div>
</div>
@endsection
