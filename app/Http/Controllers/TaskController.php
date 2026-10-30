<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;

class TaskController extends Controller
{
    // Display today's tasks
    public function welcome()
    {
        $tasks = Task::whereDate('task_date', today())
            ->orderBy('task_date')
            ->get();

        return view('welcome', compact('tasks'));
    }

    // Display all tasks
    public function tasks()
    {
        $tasks = Task::orderBy('task_date', 'asc')
            ->get();

        return view('tasks', compact('tasks'));
    }

    // Display user profile
    public function profile()
    {
        $user = User::first();

        return view('profile', compact('user'));
    }

    // Display about page
    public function about()
    {
        return view('about');
    }
}
