<?php

require __DIR__.'/../vendor/autoload.php';

$app = new App\App(dirname(__DIR__));
$app->singleton(
    'kernel',
    App\Kernel::class
);

$response = $app->kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();
