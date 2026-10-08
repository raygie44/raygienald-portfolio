@extends('layouts.app')

@section('content')

{{-- HERO --}}
<section class="hero">
  <div class="container hero-grid">
    @if (!empty($p['photo']))
      <img class="photo" src="{{ $p['photo'] }}" alt="Photo of {{ $p['name'] }}" width="240" height="300" fetchpriority="high">
    @endif

    <div>
      <p class="eyebrow">{{ $p['role'] }}</p>
      <h1>{{ $p['first_name'] }} {{ $p['last_name'] }}</h1>
      <p class="lede">{{ $p['intro'] }}</p>

      <div class="btns">
        <a class="btn primary" href="#work">See my work</a>
        @if (!empty($p['links']['resume']))
          <a class="btn" href="{{ $p['links']['resume'] }}" target="_blank" rel="noopener noreferrer">View Résumé</a>
        @endif
        <a class="btn" href="#contact">Get in touch</a>
      </div>

      <ul class="socials">
        @if (!empty($p['links']['github']))
        <li><a href="{{ $p['links']['github'] }}" target="_blank" rel="noopener noreferrer" aria-label="GitHub">@include('partials.icon', ['name' => 'github'])</a></li>
        @endif
        @if (!empty($p['links']['linkedin']))
        <li><a href="{{ $p['links']['linkedin'] }}" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">@include('partials.icon', ['name' => 'linkedin'])</a></li>
        @endif
        <li><a href="mailto:{{ $p['email'] }}" aria-label="Email">@include('partials.icon', ['name' => 'mail'])</a></li>
        @if (!empty($p['number']))
        <li><a href="tel:{{ preg_replace('/[^\d+]/', '', $p['number']) }}" aria-label="Phone">@include('partials.icon', ['name' => 'phone'])</a></li>
        @endif
      </ul>
    </div>
  </div>
</section>

{{-- EXPERIENCE --}}
@if (!empty($p['experience']))
<section id="experience" class="section">
  <div class="container">
    <h2 class="reveal">Experience</h2>
    <p class="section-intro reveal">Where I've worked and what I did there.</p>

    <div class="jobs">
      @foreach ($p['experience'] as $job)
      <article class="job reveal">
        <div class="job-head">
          <div>
            <h3>{{ $job['role'] }}</h3>
            <p class="org">{{ $job['org'] }}@if (!empty($job['location'])) &middot; {{ $job['location'] }}@endif</p>
          </div>
          <span class="date">{{ $job['dates'] }}</span>
        </div>
        @if (!empty($job['description']))<p>{{ $job['description'] }}</p>@endif
        @if (!empty($job['points']))
        <ul class="list">
          @foreach ($job['points'] as $point)<li>{{ $point }}</li>@endforeach
        </ul>
        @endif
      </article>
      @endforeach
    </div>
  </div>
</section>
@endif

{{-- PROJECTS --}}
<section id="work" class="section">
  <div class="container">
    <h2 class="reveal">Selected Projects</h2>
    <p class="section-intro reveal">Click a project to see its full details, screenshots and documents.</p>

    <div class="cards">
      @foreach ($p['projects'] as $project)
      <a class="card reveal" href="{{ route('projects.show', $project['slug']) }}">
        <div class="thumb">
          @if ($project['image'])
            <img src="{{ $project['image'] }}" alt="Screenshot of {{ $project['title'] }}" loading="lazy" width="640" height="400">
          @else
            <span aria-hidden="true">{{ mb_substr($project['title'], 0, 1) }}</span>
          @endif
        </div>
        <div class="card-body">
          @if ($project['category'])<p class="eyebrow">{{ $project['category'] }}</p>@endif
          <h3>{{ $project['title'] }}</h3>
          <p>{{ $project['description'] }}</p>
          @if (!empty($project['technologies']))
          <ul class="chips">
            @foreach ($project['technologies'] as $tech)<li class="chip">{{ $tech }}</li>@endforeach
          </ul>
          @endif
          <span class="more">View project @include('partials.icon', ['name' => 'next'])</span>
        </div>
      </a>
      @endforeach
    </div>
  </div>
</section>

{{-- SKILLS --}}
<section id="skills" class="section">
  <div class="container">
    <h2 class="reveal">Skills</h2>
    <p class="section-intro reveal">The tools and technologies I work with.</p>

    <div class="skill-grid">
      @foreach ($p['skills'] as $group => $items)
      <div class="skill reveal">
        <h3>{{ $group }}</h3>
        <ul class="chips">
          @foreach ($items as $item)<li class="chip">{{ $item }}</li>@endforeach
        </ul>
      </div>
      @endforeach
    </div>
  </div>
</section>

@endsection
