<?php

namespace Database\Seeders;

use App\Models\Ktp;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KtpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ktp::create([
            'user_id' => 2,
            'file' => uniqid().'.jpg'
        ]);
    }
}
