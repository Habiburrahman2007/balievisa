<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PageCache
{
    public function handle(Request $request, Closure $next)
    {
        // Only cache GET requests
        if (!$request->isMethod('get')) {
            return $next($request);
        }

        // Generate a cache key based on URL and current app locale
        $locale = \Illuminate\Support\Facades\App::getLocale();
        $key = 'page_cache_' . md5($request->fullUrl() . '_' . $locale);

        // Try to get from cache
        if (Cache::has($key)) {
            return response(Cache::get($key));
        }

        // Get response
        $response = $next($request);

        // Only cache successful responses
        if ($response->getStatusCode() === 200) {
            Cache::put($key, $response->getContent(), 3600);
        }

        return $response;
    }
}
