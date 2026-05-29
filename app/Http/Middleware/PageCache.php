<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Response;

class PageCache
{
    




    private const TTL = 3600;
    private const STORE = 'file';

    public function handle(Request $request, Closure $next)
    {
        
        if (!$request->isMethod('get')) {
            return $next($request);
        }

        
        $locale = App::getLocale();
        $key = 'page_cache_' . md5($request->fullUrl() . '_' . $locale);

        $store = Cache::store(self::STORE);

        if ($store->has($key)) {
            $cached = $store->get($key);
            
            $etag = '"' . md5($cached) . '"';

            
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
