// const CACHE_NAME = 'v1.0.0';

// const cacheAssets = [
//     '/favicon.ico',
// ];

// self.addEventListener('install', event => {
//     event.waitUntil(
//         caches.open(CACHE_NAME).then(cache => {
//             cache.addAll(cacheAssets);
//         })
//     );
// });

// self.addEventListener('activate', event => {
//     event.waitUntil(
//         caches.keys().then(keyList => {
//             return Promise.all(keyList.map(key => {
//                 if (key !== CACHE_NAME) {
//                     return caches.delete(key);
//                 }
//             }));
//         })
//     );
// });

// self.addEventListener('fetch', event => {
//     event.respondWith(
//         caches.open(CACHE_NAME).then(cache => {
//             return cache.match(event.request).then(response => {
//                 return response || fetch(event.request);
//             });
//         })
//     );
// });

// This is the "Offline page" service worker

importScripts('https://storage.googleapis.com/workbox-cdn/releases/5.1.2/workbox-sw.js');

const CACHE = "pwabuilder-page";

// TODO: replace the following with the correct offline fallback page i.e.: const offlineFallbackPage = "offline.html";
const offlineFallbackPage = "/offline_page.html";

self.addEventListener("message", (event) => {
  if (event.data && event.data.type === "SKIP_WAITING") {
    self.skipWaiting();
  }
});

self.addEventListener('install', async (event) => {
  event.waitUntil(
    caches.open(CACHE)
      .then((cache) => cache.add(offlineFallbackPage))
  );
});

if (workbox.navigationPreload.isSupported()) {
  workbox.navigationPreload.enable();
}

self.addEventListener('fetch', (event) => {
  if (event.request.mode === 'navigate') {
    event.respondWith((async () => {
      try {
        const preloadResp = await event.preloadResponse;

        if (preloadResp) {
          return preloadResp;
        }

        const networkResp = await fetch(event.request);
        return networkResp;
      } catch (error) {

        const cache = await caches.open(CACHE);
        const cachedResp = await cache.match(offlineFallbackPage);
        return cachedResp;
      }
    })());
  }
});
