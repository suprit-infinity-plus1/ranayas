<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('txn_products', function (Blueprint $table) {
            $table->integer('dimension_unit')->unsigned()->nullable()->after('width');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('txn_products', function (Blueprint $table) {
            $table->dropColumn('dimension_unit');
        });
    }
};
