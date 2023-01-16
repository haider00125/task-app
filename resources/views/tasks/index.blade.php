@extends('layouts.app')

@section('content')
<h1>{{ __('Tasks') }}</h1>

<div class="card mb-4">
    <div class="card-header">
      {{ __('Filter') }}
    </div>
    <div class="card-body">
        <form>
            <div class="row">
                <div class="col-md-4">
                    <label for="name">{{ __('Project') }}</label>
                    <x-projects :selected="request('project_id')"/>
                </div>
                <div class="col-md-1">
                    <label>&nbsp;</label>
                    <button type="submit" class="btn btn-primary">{{ __('Search') }}</button>
                </div>
            </div>
        </form>
    </div>
</div>

<x-messages/>

<div class="card">
    <div class="card-header">
      {{ __('Tasks List') }}
      <a href="{{ route('tasks.create') }}" class="btn btn-secondary btn-sm float-right">{{ __('Create New Task') }}</a>
    </div>
    <div class="card-body">
            <table class="table">
                <thead>
                    <th> {{ __('Project') }} </th>
                    <th> {{ __('Task') }} </th>
                    <th> {{ __('Priority') }} </th>
                    <th> {{ __('Created At') }} </th>
                    <th> {{ __('Action') }} </th>
                </thead>
                <tbody>
                    @forelse ($tasks as $task)
                        <tr>
                            <td> {{ $task->project?->name }} </td>
                            <td> {{ $task->name }} </td>
                            <td> {{ $task->priority->name() }} </td>
                            <td> {{ $task->created_at }} </td>
                            <td>
                                <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary"> {{ __('Edit') }} </a>
                                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger"> {{ __('Delete') }} </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5"> {{ __('No tasks found') }} </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            {{ $tasks->appends(request()->all())->links() }}
    </div>
</div>
@endsection
