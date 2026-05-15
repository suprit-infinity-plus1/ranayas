<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

// Create txn_length_units table
if (!Schema::hasTable('txn_length_units')) {
    Schema::create('txn_length_units', function (Blueprint $table) {
        $table->id();
        $table->string('unit');
        $table->boolean('status')->default(true);
        $table->timestamps();
    });
    echo "Created txn_length_units table\n";
}
