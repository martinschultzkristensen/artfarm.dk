// Fallback parallax for browsers without CSS scroll-driven animations.
// Where `animation-timeline: view()` is supported, css/style.css already does
// this off the main thread and this script bows out. Keep SCALE and TRAVEL in
// sync with the .parallax-img rules there.
(function () {
  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
  if (window.CSS && CSS.supports && CSS.supports('animation-timeline', 'view()')) return;

  var images = Array.prototype.slice.call(document.querySelectorAll('.parallax-img'));
  if (!images.length) return;

  var SCALE = 1.12;
  var TRAVEL = 4; // percent of the image's height, each way
  var visible = [];
  var ticking = false;

  function schedule() {
    if (ticking) return;
    ticking = true;
    requestAnimationFrame(update);
  }

  function update() {
    ticking = false;
    var vh = window.innerHeight;
    visible.forEach(function (img) {
      var box = img.getBoundingClientRect();
      // 0 when the top edge sits at the bottom of the viewport, 1 when the
      // bottom edge reaches the top: the same span as the CSS `cover` range.
      var p = (vh - box.top) / (vh + box.height);
      p = p < 0 ? 0 : p > 1 ? 1 : p;
      img.style.transform = 'scale(' + SCALE + ') translateY(' + ((p * 2 - 1) * TRAVEL) + '%)';
    });
  }

  var observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      var i = visible.indexOf(entry.target);
      if (entry.isIntersecting && i === -1) visible.push(entry.target);
      else if (!entry.isIntersecting && i !== -1) visible.splice(i, 1);
    });
    schedule();
  });

  images.forEach(function (img) {
    img.style.willChange = 'transform';
    observer.observe(img);
  });

  window.addEventListener('scroll', schedule, { passive: true });
  window.addEventListener('resize', schedule, { passive: true });
  update();
})();
