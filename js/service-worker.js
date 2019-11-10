const filesToCache = [
];

const staticCacheName = 'deisenbahn-20191110';

self.addEventListener('install', function() {
event.waitUntil(
    caches.open(staticCacheName)
    .then(cache => {
        return cache.addAll(filesToCache);
    })
    );
});

self.addEventListener("activate", event => {
    // Activated
});

self.addEventListener('fetch', function(event) {
    console.log('Fetch!', event.request);
});