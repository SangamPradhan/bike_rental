<?php
require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

$booking = new \App\Models\Booking(['name'=>'Test','phone'=>'123','email'=>'a@b.c','preferred_date'=>'2026-05-05','days'=>1,'total_price'=>1,'id_no'=>'1','exploring_region'=>'inside_valley']);
echo json_encode(['region' => $booking->exploring_region]);
