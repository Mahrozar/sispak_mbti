<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Job;

class JobSeeder extends Seeder
{
    public function run()
    {
        Job::create(['job_name' => 'Software Engineer', 'description' => 'Mengembangkan aplikasi perangkat lunak']);
        Job::create(['job_name' => 'Data Scientist', 'description' => 'Menganalisis data untuk pengambilan keputusan']);
    }
}
