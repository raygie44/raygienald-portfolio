<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title>@yield('title', $p['name'] . ' – ' . $p['role'])</title>
<meta name="description" content="@yield('description', $p['intro'])">
<script>
(function () {
  var t = null;
  try { t = localStorage.getItem('theme'); } catch (e) {}
  if (t !== 'dark' && t !== 'light') t = matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
  document.documentElement.dataset.theme = t;
  document.documentElement.classList.add('js');
})();
</script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@600;700;800&family=Figtree:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>
<body>

<header class="site">
  <div class="container bar">
    <a class="brand" href="{{ route('home') }}">{{ $p['name'] }}</a>

    <nav id="site-nav" class="site-nav" aria-label="Main">
      @if (!empty($p['experience']))<a href="{{ route('home') }}#experience">Experience</a>@endif
      <a href="{{ route('home') }}#work">Projects</a>
      <a href="{{ route('home') }}#skills">Skills</a>
      <a href="{{ route('home') }}#contact">Contact</a>
    </nav>

    <div class="bar-actions">
      <button class="icon-btn" id="theme-toggle" type="button" aria-label="Switch between light and dark mode">
        <span class="ico-sun">@include('partials.icon', ['name' => 'sun'])</span>
        <span class="ico-moon">@include('partials.icon', ['name' => 'moon'])</span>
      </button>
      <button class="icon-btn menu-btn" id="menu-toggle" type="button" aria-label="Open menu" aria-expanded="false" aria-controls="site-nav">
        @include('partials.icon', ['name' => 'menu'])
      </button>
    </div>
  </div>
</header>

<main>
@yield('content')
</main>

<footer id="contact" class="contact">
  <div class="container">
    <h2>Let's work together</h2>
    <p class="muted">I'm open to job opportunities and freelance work. Feel free to reach out.</p>

    <ul class="contact-list">
      <li><a href="mailto:{{ $p['email'] }}" aria-label="Email {{ $p['email'] }}">@include('partials.icon', ['name' => 'mail']) {{ $p['email'] }}</a></li>
      @if (!empty($p['number']))
      <li><a href="tel:{{ preg_replace('/[^\d+]/', '', $p['number']) }}" aria-label="Call {{ $p['number'] }}">@include('partials.icon', ['name' => 'phone']) {{ $p['number'] }}</a></li>
      @endif
      @if (!empty($p['links']['github']))
      <li><a href="{{ $p['links']['github'] }}" target="_blank" rel="noopener noreferrer" aria-label="GitHub profile">@include('partials.icon', ['name' => 'github']) GitHub</a></li>
      @endif
      @if (!empty($p['links']['linkedin']))
      <li><a href="{{ $p['links']['linkedin'] }}" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn profile">@include('partials.icon', ['name' => 'linkedin']) LinkedIn</a></li>
      @endif
      @if (!empty($p['links']['resume']))
      <li><a href="{{ $p['links']['resume'] }}" target="_blank" rel="noopener noreferrer">@include('partials.icon', ['name' => 'file']) View Résumé</a></li>
      <li><a href="{{ $p['links']['resume'] }}" download>@include('partials.icon', ['name' => 'download']) Download Résumé</a></li>
      @endif
    </ul>

    <p class="copy">&copy; {{ date('Y') }} {{ $p['name'] }}</p>
  </div>
</footer>

<dialog id="lightbox" aria-label="Image viewer">
  <button class="lb-btn lb-close" type="button" aria-label="Close image">@include('partials.icon', ['name' => 'close'])</button>
  <button class="lb-btn lb-prev" type="button" aria-label="Previous image">@include('partials.icon', ['name' => 'back'])</button>
  <img src="" alt="">
  <button class="lb-btn lb-next" type="button" aria-label="Next image">@include('partials.icon', ['name' => 'next'])</button>
</dialog>

<script src="{{ asset('js/portfolio.js') }}" defer></script>
</body>
</html>
