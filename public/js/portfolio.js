(function () {
  var d = document, root = d.documentElement;

  // Theme toggle (remembered in localStorage)
  var tt = d.getElementById('theme-toggle');
  if (tt) tt.addEventListener('click', function () {
    var next = root.dataset.theme === 'dark' ? 'light' : 'dark';
    root.dataset.theme = next;
    try { localStorage.setItem('theme', next); } catch (e) {}
  });

  // Mobile menu
  var mt = d.getElementById('menu-toggle'), nav = d.getElementById('site-nav');
  if (mt && nav) {
    mt.addEventListener('click', function () {
      var open = nav.classList.toggle('open');
      mt.setAttribute('aria-expanded', open);
      mt.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
    });
    nav.addEventListener('click', function (e) {
      if (e.target.closest('a')) { nav.classList.remove('open'); mt.setAttribute('aria-expanded', 'false'); }
    });
  }

  // Fade-in on scroll (skipped when the user prefers reduced motion)
  var els = d.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window && !matchMedia('(prefers-reduced-motion: reduce)').matches) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); }
      });
    }, { threshold: 0.1 });
    els.forEach(function (el) { io.observe(el); });
  } else {
    els.forEach(function (el) { el.classList.add('in'); });
  }

  // Lightbox for project screenshots
  var lb = d.getElementById('lightbox');
  var shots = [].slice.call(d.querySelectorAll('.shot'));
  if (lb && shots.length) {
    var img = lb.querySelector('img'), i = 0;
    if (shots.length === 1) lb.classList.add('single');
    var show = function (n) {
      i = (n + shots.length) % shots.length;
      img.src = shots[i].dataset.full;
      img.alt = shots[i].querySelector('img').alt;
    };
    shots.forEach(function (s, n) {
      s.addEventListener('click', function () { show(n); lb.showModal(); });
    });
    lb.querySelector('.lb-prev').addEventListener('click', function () { show(i - 1); });
    lb.querySelector('.lb-next').addEventListener('click', function () { show(i + 1); });
    lb.querySelector('.lb-close').addEventListener('click', function () { lb.close(); });
    lb.addEventListener('click', function (e) { if (e.target === lb) lb.close(); });
    d.addEventListener('keydown', function (e) {
      if (!lb.open) return;
      if (e.key === 'ArrowLeft') show(i - 1);
      if (e.key === 'ArrowRight') show(i + 1);
    });
  }
})();
