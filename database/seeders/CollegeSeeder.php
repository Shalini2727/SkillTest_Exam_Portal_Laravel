<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\College;

class CollegeSeeder extends Seeder
{
    public function run(): void
    {
        $colleges = [
            [
                'name' => 'S.R. Group of Institutions',
                'status' => 1,
            ],
            [
                'name' => 'GRMU',
                'status' => 1,
            ],
            [
                'name' => 'Maharishi University',
                'status' => 1,
            ],
            [
                'name' => 'BBD',
                'status' => 1,
            ],
        ];

        foreach ($colleges as $college) {
            College::firstOrCreate(
                ['name'=>$college['name']],
                $college
            );
        }
    }
}