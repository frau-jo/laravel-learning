@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<!-- Modal Triggered on Page Load -->
<div class="modal fade show" id="welcomeModal" tabindex="-1" style="display: block;" aria-modal="true" role="dialog">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content shadow-lg border-0" style="border-radius: 1rem;">
      <div class="modal-header bg-light-pink text-dark">
        <h5 class="modal-title" style="font-family: 'Didot', serif; color: var(--bs-main-pink);">
          🌸 Welcome!
        </h5>
      </div>
      <div class="modal-body">
        <p style="font-family: 'Montserrat', sans-serif;">
          You’ve arrived at Jo's Laravel learning site — a space to experiment, build, and grow.
        </p>
      </div>
      <div class="modal-footer justify-content-between">
        <span class="text-muted small">Laravel Playground by Jo</span>
        <a href="/about" class="btn btn-pink">Get Started →</a>
      </div>
    </div>
  </div>
</div>

<!-- Hidden overlay to mimic modal backdrop -->
<div class="modal-backdrop fade show"></div>

<!-- Optional fallback content below modal -->
<div class="text-center mt-5">
    <p class="text-muted">If the modal didn’t load, <a href="/about">click here to get started</a>.</p>
</div>

<!-- Inline Custom Button Styling -->
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

  .bg-light-pink {
    background-color: var(--bs-light-pink);
  }
</style>
@endsection
