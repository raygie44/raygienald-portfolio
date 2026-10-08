@extends('layouts.app')

@section('title', $project['title'] . ' – ' . $p['name'])
@section('description', $project['description'])

@section('content')
<div class="container">

  <a class="back" href="{{ route('home') }}#work">@include('partials.icon', ['name' => 'back']) Back to Projects</a>

  <header class="proj-head reveal">
    @if ($project['category'])<p class="eyebrow">{{ $project['category'] }}</p>@endif
    <h1>{{ $project['title'] }}</h1>
    @if ($project['description'])<p class="lede">{{ $project['description'] }}</p>@endif
  </header>

  @if ($project['image'])
    <img class="hero-img reveal" src="{{ $project['image'] }}" alt="Main screenshot of {{ $project['title'] }}" width="1200" height="750">
  @endif

  <div class="detail">
    <div class="body">
      <h2>Project overview</h2>
      <p>{!! nl2br(e($project['full_description'] ?: $project['description'])) !!}</p>

      @if (!empty($project['goal']))
        <h2>Problem and goal</h2>
        <p>{!! nl2br(e($project['goal'])) !!}</p>
      @endif

      @if (!empty($project['features']))
        <h2>Features</h2>
        <ul class="list">
          @foreach ($project['features'] as $feature)<li>{{ $feature }}</li>@endforeach
        </ul>
      @endif

      @if (!empty($project['challenges']))
        <h2>Challenges</h2>
        <p>{!! nl2br(e($project['challenges'])) !!}</p>
      @endif

      @if (!empty($project['solution']))
        <h2>Solution</h2>
        <p>{!! nl2br(e($project['solution'])) !!}</p>
      @endif

      @if (!empty($project['results']))
        <h2>Results</h2>
        <p>{!! nl2br(e($project['results'])) !!}</p>
      @endif

      @if (!empty($project['gallery']))
        <h2>Screenshots</h2>
        <div class="gallery">
          @foreach ($project['gallery'] as $i => $shot)
          <button class="shot" type="button" data-full="{{ $shot }}" aria-label="View screenshot {{ $i + 1 }} larger">
            <img src="{{ $shot }}" alt="{{ $project['title'] }} screenshot {{ $i + 1 }}" loading="lazy">
          </button>
          @endforeach
        </div>
      @endif

      @if (!empty($project['pdf']))
        <h2>Project documentation</h2>
        <div class="doc">
          <span class="doc-name">@include('partials.icon', ['name' => 'file']) PDF document</span>
          <span class="doc-actions">
            <a class="btn" href="{{ $project['pdf'] }}" target="_blank" rel="noopener noreferrer">View PDF</a>
            <a class="btn" href="{{ $project['pdf'] }}" download>@include('partials.icon', ['name' => 'download']) Download PDF</a>
          </span>
        </div>
      @endif
    </div>

    <aside class="aside" aria-label="Project details">
      <dl>
        @if ($project['category'])<dt>Category</dt><dd>{{ $project['category'] }}</dd>@endif
        @if ($project['date'])<dt>Date</dt><dd>{{ $project['date'] }}</dd>@endif
        @if ($project['role'])<dt>My role</dt><dd>{{ $project['role'] }}</dd>@endif
        @if (!empty($project['technologies']))
          <dt>Technologies</dt>
          <dd><ul class="chips">@foreach ($project['technologies'] as $tech)<li class="chip">{{ $tech }}</li>@endforeach</ul></dd>
        @endif
      </dl>

      @if (!empty($project['url']))
        <a class="btn primary" href="{{ $project['url'] }}" target="_blank" rel="noopener noreferrer">View Live Project @include('partials.icon', ['name' => 'external'])</a>
      @endif
      @if (!empty($project['github']))
        <a class="btn" href="{{ $project['github'] }}" target="_blank" rel="noopener noreferrer">@include('partials.icon', ['name' => 'github']) View GitHub</a>
      @endif
    </aside>
  </div>

  <a class="back" href="{{ route('home') }}#work">@include('partials.icon', ['name' => 'back']) Back to Projects</a>
</div>
@endsection
