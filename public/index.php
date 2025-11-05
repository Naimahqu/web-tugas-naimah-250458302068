<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Cek maintenance mode
if (file_exists($maintenance = __DIR__ . '/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Load autoloader Composer
require __DIR__ . '/../vendor/autoload.php';

// Boot Laravel
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Jalankan kernel (bagian utama HTTP request)
$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request =Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
