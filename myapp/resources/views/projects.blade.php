@extends('layouts.app')

@section('title', 'Projects')

@include('layouts.breadcrumb', [
  'links' => ['Home' => '/'],
  'current' => 'Projects'
])

@section('content')
    <h1>Jo's Projects</h1>
    <ul>
        <li>Laravel Practice Website</li>
        <li>Portfolio Page (coming soon)</li>
        <li>
            <a href="{{ url('/tasks/to-do-list') }}">
                To-Do List App
            </a>
        </li>
    </ul>
@endsection
