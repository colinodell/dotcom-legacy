<?php

header('X-Created-By: Colin O\'Dell');

require_once 'vendor/autoload.php';

// Create the cache used for storing RSS feed entries
$cache = new \Zend\Cache\Storage\Adapter\Filesystem([
    'ttl' => 3600,
    'cache_dir' => __DIR__.'/tmp/',
]);

// Enable serialization
$plugin = new \Zend\Cache\Storage\Plugin\Serializer();
$cache->addPlugin($plugin);

// Configure the feed reader to use this cache
\Zend\Feed\Reader\Reader::setCache($cache);
\Zend\Feed\Reader\Reader::useHttpConditionalGet();

// Use the curl adapter to avoid SSL configuration issues
$httpClient = \Zend\Feed\Reader\Reader::getHttpClient();
$httpClient->setAdapter('Zend\Http\Client\Adapter\Curl');

$ut_posts = [];
try {
    $feed = \Zend\Feed\Reader\Reader::import('https://www.unleashed-technologies.com/blog/author/colin-odell/feed');

    /** @var \Zend\Feed\Reader\Entry\Rss $post */
    foreach ($feed as $i => $post) {
        // Only get the last few posts
        if ($i >= 4) {
            break;
        }

        $ut_posts[] = [
            'title' => $post->getTitle(),
            'link'  => $post->getLink(),
            'date'  => $post->getDateCreated(),
            'desc'  => $post->getDescription(),
        ];
    }
} catch (Exception $ex) { }
