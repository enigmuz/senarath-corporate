// Senarath Bank corporate — interactions (look & feel only). LAB ENVIRONMENT.
document.addEventListener('DOMContentLoaded', function () {

  /* ---------- Mobile menu ---------- */
  var burger = document.getElementById('hamburger');
  var mmenu  = document.getElementById('mobileMenu');
  if (burger && mmenu) {
    burger.addEventListener('click', function () {
      var open = mmenu.classList.toggle('open');
      burger.classList.toggle('open', open);
      burger.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
    // close when a link is tapped
    mmenu.querySelectorAll('a').forEach(function (a) {
      a.addEventListener('click', function () {
        mmenu.classList.remove('open'); burger.classList.remove('open');
        burger.setAttribute('aria-expanded', 'false');
      });
    });
  }

  /* ---------- Hero slider (auto-rotating) ---------- */
  var slidesWrap = document.getElementById('slides');
  if (slidesWrap) {
    var slides = Array.prototype.slice.call(slidesWrap.querySelectorAll('.slide'));
    var dotsWrap = document.getElementById('slDots');
    var prev = document.getElementById('slPrev');
    var next = document.getElementById('slNext');
    var i = 0, timer = null, DELAY = 5000;

    // build dots
    slides.forEach(function (_, idx) {
      var b = document.createElement('button');
      b.setAttribute('aria-label', 'Go to slide ' + (idx + 1));
      if (idx === 0) b.className = 'active';
      b.addEventListener('click', function () { go(idx); restart(); });
      dotsWrap.appendChild(b);
    });
    var dots = Array.prototype.slice.call(dotsWrap.children);

    function go(n) {
      slides[i].classList.remove('is-active');
      if (dots[i]) dots[i].classList.remove('active');
      i = (n + slides.length) % slides.length;
      slides[i].classList.add('is-active');
      if (dots[i]) dots[i].classList.add('active');
    }
    function nextSlide() { go(i + 1); }
    function start() { timer = setInterval(nextSlide, DELAY); }
    function stop()  { if (timer) clearInterval(timer); timer = null; }
    function restart() { stop(); start(); }

    if (next) next.addEventListener('click', function () { nextSlide(); restart(); });
    if (prev) prev.addEventListener('click', function () { go(i - 1); restart(); });

    // pause on hover (desktop)
    slidesWrap.addEventListener('mouseenter', stop);
    slidesWrap.addEventListener('mouseleave', start);

    // pause when tab hidden
    document.addEventListener('visibilitychange', function () {
      if (document.hidden) stop(); else restart();
    });

    // swipe (mobile)
    var x0 = null;
    slidesWrap.addEventListener('touchstart', function (e) { x0 = e.touches[0].clientX; }, { passive: true });
    slidesWrap.addEventListener('touchend', function (e) {
      if (x0 === null) return;
      var dx = e.changedTouches[0].clientX - x0;
      if (Math.abs(dx) > 40) { dx < 0 ? nextSlide() : go(i - 1); restart(); }
      x0 = null;
    }, { passive: true });

    start();
  }

  /* ---------- Reveal on scroll ---------- */
  var cards = document.querySelectorAll('.card,.stat');
  if ('IntersectionObserver' in window) {
    var io = new IntersectionObserver(function (es) {
      es.forEach(function (e) {
        if (e.isIntersecting) { e.target.style.opacity = 1; e.target.style.transform = 'none'; io.unobserve(e.target); }
      });
    }, { threshold: .12 });
    cards.forEach(function (c) {
      c.style.opacity = 0; c.style.transform = 'translateY(14px)';
      c.style.transition = 'opacity .5s ease, transform .5s ease'; io.observe(c);
    });
  }
});
