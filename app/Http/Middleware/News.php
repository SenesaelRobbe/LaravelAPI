<?php

namespace App\Http\Middleware;

use Closure;

class news
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // if(! $request -> ajax()) return response("Forbidden.", 403);

        return $next($request)
            ->header('X-Frame-Options', 'deny') //tegenhouden dat de site kan gebruikt worden om te clickjacken
            ->header('X-XSS-Protection', '1; mode=block') //anti-xss, mode block zorgt er voor dat de pagina niet meer wordt ingeladen
            ->header('Strict-Transport-Security', 'max-age=31536000; includeSubDomains') //forceren om over https te serven
            ->header('Content-Type', 'application/json')
            ->header('Content-Security-Policy', "default-src 'self' ") //zorgt ervoor dat de content die weergeven wordt vanuit de site zelf komt, dus geen "onbetrouwbare" bron
            ->header('X-Content-Type-Options', 'nosniff'); //checken op mime-type, bij foto's die ingeladen word dat het effectief foto's zijn, ...
    }
}