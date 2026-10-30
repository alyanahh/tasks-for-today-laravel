
@extends('layouts.app')

@section('title', 'Today')

@section('content')

<div class="hero">
    <h2>Tasks for Today</h2>
    <p>{{ now()->format('F d, Y') }}</p>
    <p>Welcome! Here are your scheduled tasks for today.</p>
</div>

<div class="card">
    <h3>Today's Tasks</h3>

    <table>
        <thead>
            <tr>
                <th>Task</th>
                <th>Status</th>
                <th>Date</th>
            </tr>
        </thead>

        <tbody>
            @forelse($tasks as $task)
                <tr>
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
                    <td colspan="3">
                        No tasks scheduled for today.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
