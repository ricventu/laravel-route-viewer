<?php

namespace Ricventu\LaravelRouteViewer\Middlewares;

use Closure;
use Illuminate\Http\Request;

class PackageEnabled
{
    public function handle(Request $request, Closure $next)
    {
        abort_unless(config('route-viewer.enabled'), 404);

        return $next($request);
    }
}
