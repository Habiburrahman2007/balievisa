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
        
        
        $lang = $request->query('lang');
        
        
        if (!$lang) {
            $lang = $request->session()->get('locale');
        }

        
        $locale = in_array($lang, $supportedLocales) ? $lang : config('app.locale', 'en');

        App::setLocale($locale);

        return $next($request);
    }
}
