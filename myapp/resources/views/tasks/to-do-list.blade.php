@extends('layouts.app')

@section('title', 'To Do List')

@include('layouts.breadcrumb', [
  'links' => ['Home' => '/', 'Projects' => '/projects'],
  'current' => 'To-Do List'
])


@section('content')
<div class="container py-4">
    <h1 class="mb-4 text-center" style="color: var(--bs-dark-pink); font-family: 'Didot', serif;">
        My To-Do List
    </h1>

    <!-- Form to Add Task -->
    <form action="/tasks" method="POST" class="mb-4 d-flex">
        @csrf
        <input type="text" name="title" class="form-control me-2" placeholder="Add a new task" required>
        <button class="btn btn-pink">Add</button>
    </form>

    <!-- Task List -->
    <ul class="list-group">
        @foreach ($tasks as $task)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <span style="{{ $task->completed ? 'text-decoration: line-through;' : '' }}">
                {{ $task->title }}
            </span>
            <div>
                <!-- Mark Complete -->
                <form action="/tasks/{{ $task->id }}" method="POST" style="display: inline;">
                    @csrf @method('PUT')
                    <button class="btn btn-sm btn-success">✔</button>
                </form>
                <!-- Delete Task -->
                <form action="/tasks/{{ $task->id }}" method="POST" style="display: inline;">
                    @csrf @method('DELETE')
                    <button class="btn btn-sm btn-danger">🗑️</button>
                </form>
            </div>
        </li>
        @endforeach
    </ul>
</div>

<style>
.btn-pink {
    background-color: var(--bs-main-pink);
    color: white;
    font-weight: 600;
    border: none;
    border-radius: 0.5rem;
    padding: 0.5rem 1.25rem;
    transition: background-color 0.3s ease;
}
.btn-pink:hover {
    background-color: var(--bs-dark-pink);
    color: white;
}
</style>
@endsection
