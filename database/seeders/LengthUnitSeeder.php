<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LengthUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Model\TxnLengthUnit::updateOrCreate(['unit' => 'cm'], ['status' => true]);
        \App\Model\TxnLengthUnit::updateOrCreate(['unit' => 'inch'], ['status' => true]);
        \App\Model\TxnLengthUnit::updateOrCreate(['unit' => 'mm'], ['status' => true]);
    }
}
