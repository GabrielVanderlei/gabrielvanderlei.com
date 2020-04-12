var CACHE_NAME = 'my-offline-cache';
var urlsToCache = [
  '/assets/imgs/institutoidv.jp2',
  '/assets/imgs/cointer-pdvg.jp2',
  '/assets/imgs/cointer-pdvl.jp2',
  '/assets/imgs/cointer-pdvagro.jp2',
  '/assets/imgs/me.jp2',
  '/assets/imgs/roleta-atomica.jp2',
  '/assets/imgs/smart-pdvg.jp2',
  '/assets/imgs/smart-pdvagro.jp2',
  '/assets/imgs/smart-pdvl.jp2',
  '/assets/css/style.css'
];

self.addEventListener('install', function(event) {
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(function(cache) {
        return cache.addAll(urlsToCache);
      })
  );
});

self.addEventListener('fetch', function(event) {
  event.respondWith(
    fetch(event.request).catch(function() {
      caches.match(event.request).then(function(response) {
        return response;
      });
    }));
});