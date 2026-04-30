<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        $supportedLocales = ['en', 'zh', 'es', 'ar', 'hi'];
        
        // 1. Check query parameter (priority for SEO/crawlers)
        $lang = $request->query('lang');
        
        // 2. Check session
        if (!$lang) {
            $lang = $request->session()->get('locale');
        }

        // 3. Fallback to config
        $locale = in_array($lang, $supportedLocales) ? $lang : config('app.locale', 'en');

        App::setLocale($locale);

        return $next($request);
    }
}
