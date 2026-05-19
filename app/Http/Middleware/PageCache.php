<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Response;

class PageCache
{
    /**
     * Cache duration in seconds (1 hour).
     * Using the 'file' store explicitly — avoids the latency of CACHE_STORE=database
     * which adds a DB round-trip on every single cached page hit.
     */
    private const TTL = 3600;
    private const STORE = 'file';

    public function handle(Request $request, Closure $next)
    {
        // Only cache GET requests with no query string (except lang param)
        if (!$request->isMethod('get')) {
            return $next($request);
        }

        // Build a cache key from URL + locale
        $locale = App::getLocale();
        $key = 'page_cache_' . md5($request->fullUrl() . '_' . $locale);

        $store = Cache::store(self::STORE);

        if ($store->has($key)) {
            $cached = $store->get($key);
            // Generate ETag from content hash for 304 Not Modified support
            $etag = '"' . md5($cached) . '"';

            // Return 304 if browser already has a fresh copy
            if ($request->header('If-None-Match') === $etag) {
                return Response::make('', 304)
                    ->header('ETag', $etag)
                    ->header('Cache-Control', 'public, max-age=' . self::TTL);
            }

            return Response::make($cached, 200)
                ->header('Content-Type', 'text/html; charset=UTF-8')
                ->header('Cache-Control', 'public, max-age=' . self::TTL)
                ->header('ETag', $etag)
                ->header('X-Cache', 'HIT');
        }

        /** @var \Illuminate\Http\Response $response */
        $response = $next($request);

        if ($response->getStatusCode() === 200) {
            $content = $response->getContent();
            $store->put($key, $content, self::TTL);

            $etag = '"' . md5($content) . '"';
            $response->header('Content-Type', 'text/html; charset=UTF-8');
            $response->header('Cache-Control', 'public, max-age=' . self::TTL);
            $response->header('ETag', $etag);
            $response->header('X-Cache', 'MISS');
        }

        return $response;
    }
}
