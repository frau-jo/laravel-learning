<nav aria-label="breadcrumb" class="mb-4">
  <ol class="breadcrumb ms-3">
    @foreach ($links as $text => $url)
      <li class="breadcrumb-item">
        <a href="{{ $url }}">{{ $text }}</a>
      </li>
    @endforeach

    @if (isset($current))
      <li class="breadcrumb-item active" aria-current="page">{{ $current }}</li>
    @endif
  </ol>
</nav>

<style>
.breadcrumb a {
  color: var(--bs-main-pink);
  text-decoration: none;
}
.breadcrumb a:hover {
  text-decoration: underline;
}
</style>
