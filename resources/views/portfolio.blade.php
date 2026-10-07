
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">

<title>{{ $p['name'] }} – {{ $p['role'] }}</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@500;700;800&family=Figtree:wght@400;500;600&display=swap" rel="stylesheet">

<style>
:root {
  --bg:#e9eef3;
  --ink:#14213d;
  --muted:#51607a;
  --line:#c5d0dc;
  --accent:#2447f5;
  --on-accent:#fff;
  --cell0:#d3dce6;
  --cell1:#9db2f7;
  --cell2:#5f7df6;
  --cell3:#2447f5;

  --display:'Bricolage Grotesque','Arial Black',system-ui,sans-serif;
  --body:'Figtree',system-ui,-apple-system,'Segoe UI',sans-serif;

  box-sizing:border-box;
  padding-top:env(safe-area-inset-top,0px);
  padding-bottom:env(safe-area-inset-bottom,0px);
}

@media (prefers-color-scheme:dark) {
  :root:not([data-theme="light"]) {
    --bg:#0f1624;
    --ink:#e8edf6;
    --muted:#9aa8c2;
    --line:#26324a;
    --accent:#7b93ff;
    --on-accent:#0f1624;
    --cell0:#1a2438;
    --cell1:#2c3f78;
    --cell2:#4a62c9;
    --cell3:#7b93ff;
  }
}

:root[data-theme="dark"] {
  --bg:#0f1624;
  --ink:#e8edf6;
  --muted:#9aa8c2;
  --line:#26324a;
  --accent:#7b93ff;
  --on-accent:#0f1624;
  --cell0:#1a2438;
  --cell1:#2c3f78;
  --cell2:#4a62c9;
  --cell3:#7b93ff;
}

html {
  scroll-padding-top:env(safe-area-inset-top,0px);
}

* {
  box-sizing:border-box;
}

body {
  margin:0;
  background:var(--bg);
  color:var(--ink);
  font:400 1.0625rem/1.6 var(--body);
}

a {
  color:inherit;
}

a:focus-visible,
button:focus-visible {
  outline:3px solid var(--accent);
  outline-offset:3px;
}

.wrap {
  max-width:62rem;
  margin:0 auto;
  padding:0 1.5rem;
}

/* HEADER */
header {
  padding:1.5rem 0;
  display:flex;
  justify-content:space-between;
  align-items:center;
  gap:1rem;
  flex-wrap:wrap;
}

header strong {
  font:700 1.1rem var(--display);
}

nav {
  display:flex;
  gap:1.5rem;
}

nav a {
  text-decoration:none;
  font-weight:500;
  color:var(--muted);
}

nav a:hover {
  color:var(--ink);
}

/* HERO */
.hero {
  padding:4rem 0 3rem;
}

.hero-top {
  display:grid;
  grid-template-columns:auto 1fr;
  gap:2rem 3rem;
  align-items:end;
}

/* Smaller name */
h1 {
  font:800 clamp(1.5rem, 3vw, 2.8rem)/1 var(--display);
  letter-spacing:-0.02em;
  margin:0 0 1.5rem;
}

.lede {
  max-width:34rem;
  font-size:1.25rem;
  color:var(--muted);
  margin:0 0 2rem;
}

.photo {
  width:min(18rem,32vw);
  aspect-ratio:4/5;
  object-fit:cover;
  border-radius:.5rem;
  border:2px solid var(--ink);
  display:block;
}

/* BUTTONS */
.btns {
  display:flex;
  gap:.75rem;
  flex-wrap:wrap;
}

.btn {
  display:inline-block;
  padding:.8rem 1.4rem;
  border-radius:.4rem;
  font-weight:600;
  text-decoration:none;
  border:2px solid var(--ink);
}

.btn.main {
  background:var(--accent);
  border-color:var(--accent);
  color:var(--on-accent);
}

/* ACTIVITY GRID */
.grid-wrap {
  margin-top:3rem;
  overflow-x:auto;
}

#grid {
  display:grid;
  grid-template-rows:repeat(7,1fr);
  grid-auto-flow:column;
  gap:4px;
  min-width:40rem;
}

#grid i {
  display:block;
  aspect-ratio:1;
  border-radius:2px;
  background:var(--cell0);
}

.cap {
  font-size:.9rem;
  color:var(--muted);
  margin:.75rem 0 0;
}

/* SECTIONS */
section {
  padding:3.5rem 0;
  border-top:1px solid var(--line);
}

h2 {
  font:700 2rem/1.1 var(--display);
  letter-spacing:-.02em;
  margin:0 0 2rem;
}

/* EXPERIENCE / PROJECTS */
.proj {
  display:grid;
  grid-template-columns:1fr 2fr;
  gap:1rem 2rem;
  padding:1.5rem 0;
  border-top:1px solid var(--line);
}

.proj:first-of-type {
  border-top:0;
  padding-top:0;
}

.proj h3 {
  font:700 1.4rem var(--display);
  margin:0;
}

.proj h3 a {
  text-decoration:none;
}

.proj h3 a:hover {
  color:var(--accent);
}

.proj p {
  margin:0 0 .5rem;
}

.proj ul {
  margin:0;
  padding-left:1.1rem;
}

.proj li {
  margin-bottom:.35rem;
}

.when {
  color:var(--muted);
  margin:.25rem 0 0;
}

.tags {
  color:var(--muted);
  font-size:.95rem;
}

/* SKILLS */
.skills {
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(14rem,1fr));
  gap:2rem;
}

.skills h3 {
  font:700 1.1rem var(--display);
  margin:0 0 .5rem;
}

.skills p {
  margin:0;
  color:var(--muted);
}

/* FOOTER */
footer {
  padding:3.5rem 0 4rem;
  border-top:1px solid var(--line);
}

footer .mail {
  font: 600 1.1rem var(--display);
  letter-spacing: 0;
  word-break: break-all;
}

footer p {
  color:var(--muted);
}

/* MOBILE */
@media (max-width:40rem) {

  .hero-top {
    grid-template-columns:1fr;
  }

  .photo {
    width:10rem;
  }

  .proj {
    grid-template-columns:1fr;
  }

  .hero {
    padding-top:2rem;
  }

  nav {
    gap:1rem;
  }

  h1 {
    font-size:2rem;
  }
}

/* ANIMATION */
@media (prefers-reduced-motion:no-preference) {

  #grid i {
    animation:pop .5s both;
  }

  @keyframes pop {
    from {
      opacity:0;
      transform:scale(.4);
    }
  }
}
</style>
</head>

<body>

<div class="wrap">

<header>

  <strong>{{ $p['name'] }}</strong>

  <nav aria-label="Main">
    <a href="#experience">Experience</a>
    <a href="#work">Projects</a>
    <a href="#skills">Skills</a>
    <a href="#contact">Contact</a>
  </nav>

</header>


<main>

<!-- HERO -->
<div class="hero">

  <div class="hero-top">

    @if (!empty($p['photo']))
      <img
        class="photo"
        src="{{ asset($p['photo']) }}"
        alt="Photo of {{ $p['name'] }}"
        width="288"
        height="360"
      >
    @endif

    <div>

      <h1>
        {{ $p['first_name'] }}<br>
        {{ $p['last_name'] }}
      </h1>

      <p class="lede">
        {{ $p['intro'] }}
      </p>

      <div class="btns">

        <a class="btn main" href="#work">
          See my work
        </a>

        <a class="btn" href="#contact">
          Get in touch
        </a>

      </div>

    </div>

  </div>


  <!-- GitHub-style activity grid
  <div class="grid-wrap" aria-hidden="true">
    <div id="grid"></div>
  </div> -->

  <!-- <p class="cap">
    A year of commits, drawn from my sample activity.
  </p> -->

</div>


<!-- EXPERIENCE -->
<section id="experience">

  <h2>Experience</h2>

  @foreach ($p['experience'] as $job)

    <div class="proj">

      <div>

        <h3>
          {{ $job['role'] }}
        </h3>

        <p class="when">
          {{ $job['org'] }}<br>
          {{ $job['dates'] }}
        </p>

      </div>

      <ul>

        @foreach ($job['points'] as $point)

          <li>
            {{ $point }}
          </li>

        @endforeach

      </ul>

    </div>

  @endforeach

</section>


<!-- PROJECTS -->
<section id="work">

  <h2>Selected Projects</h2>

  @foreach ($p['projects'] as $project)

    <div class="proj">

      <h3>
        <a href="{{ $project['url'] }}">
          {{ $project['title'] }}
        </a>
      </h3>

      <div>

        <p>
          {{ $project['description'] }}
        </p>

        <p class="tags">
          {{ implode(', ', $project['stack']) }}
        </p>

      </div>

    </div>

  @endforeach

</section>


<!-- SKILLS -->
<section id="skills">

  <h2>What I work with</h2>

  <div class="skills">

    @foreach ($p['skills'] as $group => $items)

      <div>

        <h3>
          {{ $group }}
        </h3>

        <p>
          {{ implode(', ', $items) }}
        </p>

      </div>

    @endforeach

  </div>

</section>

</main>


<!-- CONTACT -->
<footer id="contact">

  <h2>Let's work together</h2>

  <a class="mail" href="mailto:{{ $p['email'] }}">
    {{ $p['email'] }}
  </a>
  <br>
  <a class="mail" href="tel:{{ $p['number'] }}"> {{ $p['number'] }} </a>

  <p>

    @foreach (
      ['github' => 'GitHub', 'linkedin' => 'LinkedIn', 'resume' => 'Résumé (PDF)']
      as $key => $label
    )

      @if (!empty($p['links'][$key]))

        <a href="{{ $p['links'][$key] }}">
          {{ $label }}
        </a>

        &nbsp;

      @endif

    @endforeach

  </p>

</footer>

</div>


<script>

(function(){

  var g = document.getElementById('grid'),
      s = 7,
      h = '';

  function r(){

    s = (s * 9301 + 49297) % 233280;

    return s / 233280;

  }

  for(var w = 0; w < 52; w++) {

    for(var d = 0; d < 7; d++) {

      var v = r(),
          l = v < .35 ? 0 :
              v < .6 ? 1 :
              v < .85 ? 2 : 3;

      h += '<i style="background:var(--cell' + l +
           ');animation-delay:' + (w * 12) + 'ms"></i>';

    }

  }

  g.style.gridTemplateColumns = 'repeat(52,1fr)';

  g.innerHTML = h;

})();

</script>

</body>
</html>
```
