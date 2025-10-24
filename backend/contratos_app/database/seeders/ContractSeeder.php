<?php

namespace Database\Seeders;

use App\Models\Contract;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Contract::factory()->create([
            'title' => 'Contrato de prueba',
            'contractor_name' => 'Contratista de prueba',
            'status' => 'DRAFT',
            'amount' => 200000,
            'start_date' => '2025-10-24',
            'end_date' => '2026-01-01'
        ]);
    }
}
