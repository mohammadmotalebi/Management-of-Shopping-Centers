module.exports = {
  "globDirectory": "public/",
    "cacheId" : 'loyalty.app.cache',
  "globPatterns": [
    "images/*.*",
    "fonts/*.*",
    "js/app.js",
    "css/app.css",
  ],
    'maximumFileSizeToCacheInBytes' : '800000000',
  "swDest": "public/sw.js"
};
