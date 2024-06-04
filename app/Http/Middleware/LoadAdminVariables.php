<?php

namespace App\Http\Middleware;

use App\Models\Variable;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class LoadAdminVariables
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $websiteLogo = Variable::firstWhere('name', 'website_logo');
        $websiteLogo = $websiteLogo?->value ?? '';

        View::share('websiteLogo', $websiteLogo);

        return $next($request);
    }
}
