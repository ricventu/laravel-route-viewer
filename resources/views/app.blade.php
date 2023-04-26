<!DOCTYPE html>
<html class="dark">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
  @viteReactRefresh
    {{\Illuminate\Support\Facades\Vite::useBuildDirectory('vendor/route-viewer')
        ->withEntryPoints([
          'resources/css/app.css',
          'resources/js/app.jsx',
    ]) }}
  @inertiaHead
</head>
<body>
@inertia
</body>
</html>
