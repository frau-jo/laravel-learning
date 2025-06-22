@extends('layouts.app')

@section('title', 'Contact')

@include('layouts.breadcrumb', [
  'links' => ['Home' => '/'],
  'current' => 'Contact'
])

@section('content')
    <h1>Contact Jo</h1>
    <p>You can reach Jo at jisolon.83@gmail.com</p>
@endsection
