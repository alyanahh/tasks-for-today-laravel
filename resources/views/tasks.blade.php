
@extends('layouts.app')

@section('title', 'All Tasks')

@section('content')

<div class="hero">
    <h2>All Tasks</h2>
    <p>Complete list of tasks stored in the database.</p>
    <p>Total Tasks: {{ $tasks->count() }}</p>
</div>

<div class="card">

    <h3>Task List</h3>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Task</th>
                <th>Status</th>
                <th>Date</th>
            </tr>
        </thead>

        <tbody>
            @forelse($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>

                    <td>{{ $task->title }}</td>

                    <td>
                        <span class="status">
                            {{ ucfirst($task->status) }}
                        </span>
                    </td>

                    <td>
                        {{ $task->task_date->format('Y-m-d') }}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">
                        No tasks found.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

</div>

@endsection
