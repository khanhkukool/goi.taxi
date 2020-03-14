const staticCacheName = 'site-statis';
const assets = [
    '/goi.taxi/',
    'assets/css/_all-skins.min.css',
    'assets/css/AdminLTE.min.css',
    'assets/css/all.min.css',
    'assets/css/bootstrap.min.css',
    'assets/css/materialize.min.css',
    'assets/css/style.css',
    'assets/css/util.css',
    'assets/js/adminlte.min.js',
    'assets/js/app.js',
    'assets/js/bootstrap.min.js',
    'assets/js/jquery-3.4.1.min.js',
    'assets/js/jquery-ui.min.js',
    'assets/js/main.js',
    'assets/js/ui.js',
    'assets/js/materialize.min.js',
    'assets/js/map-custom.js'
];
self.addEventListener('install', evt => {
    evt.waitUntil(
    caches.open(staticCacheName).then(cache => {
        cache.addAll(assets);
    }));
});

self.addEventListener('activate', evt => {
    // console.log('Inside the activate handler:', event);
});

self.addEventListener('fetch', evt => {
    // console.log('Inside the fetch handler:', event);
});
