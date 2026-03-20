/**
 * CISC3003 SugEx07 – mobile menu + hamburger (Parts 02–03)
 */
(function () {
  'use strict';

  var body = document.body;
  var toggle = document.getElementById('menuToggle');
  var nav = document.getElementById('primaryNav');
  var overlay = document.getElementById('headerOverlay');

  if (!toggle || !nav) return;

  function setOpen(open) {
    body.classList.toggle('nav-open', open);
    toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    toggle.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
    if (overlay) overlay.setAttribute('aria-hidden', open ? 'false' : 'true');
  }

  toggle.addEventListener('click', function () {
    setOpen(!body.classList.contains('nav-open'));
  });

  if (overlay) {
    overlay.addEventListener('click', function () {
      setOpen(false);
    });
  }

  nav.querySelectorAll('a').forEach(function (link) {
    link.addEventListener('click', function () {
      setOpen(false);
    });
  });

  window.addEventListener('resize', function () {
    if (window.matchMedia('(min-width: 64em)').matches) {
      setOpen(false);
    }
  });
})();
