<?php

namespace Ricventu\LaravelRouteViewer\Middlewares;

use Closure;
use Illuminate\Http\Request;

class PackageEnabled
{
    public function handle(Request $request, Closure $next)
    {
        abort_unless(config('routes-viewer.enabled'), 404);

        return $next($request);
    }
}
