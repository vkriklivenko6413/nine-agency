<?php

namespace App\Http\Middleware;

use App\Models\Variable;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class LoadWebsiteVariables
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $websiteVariables = Variable::whereIn('name', [
            'website_logo',
            'instagram_url',
            'facebook_url',
            'tiktok_url',
            'youtube_url',
        ])->pluck('value', 'name')->toArray();

        $websiteVariables = (object) $websiteVariables;

        View::share('websiteVariables', $websiteVariables);

        return $next($request);
    }
}
