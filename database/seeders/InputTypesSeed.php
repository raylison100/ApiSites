<?php

namespace Database\Seeders;

use App\Entities\InputTypes;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class InputTypesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('input_types')->insertOrIgnore([
            'id'         => 1,
            'name'       => 'Dados Pessoais',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('input_types')->insertOrIgnore([
            'id'         => 2,
            'name'       => 'Dados Sensíveis',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('input_types')->insertOrIgnore([
            'id'         => 3,
            'name'       => 'Indefinido',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
