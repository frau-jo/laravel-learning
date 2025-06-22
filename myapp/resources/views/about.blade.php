@extends('layouts.app')

@section('title', 'About')

@include('layouts.breadcrumb', [
  'links' => ['Home' => '/'],
  'current' => 'About'
])

@section('content')
    <h1>About Jo</h1>
    <p>This is the about page for Jo’s Laravel site!</p>
@endsection
