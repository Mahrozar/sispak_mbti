<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MBTISeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['mbti_type' => 'INFP', 'job_recommendation' => 'Writer, Artist, Psychologist'],
            ['mbti_type' => 'ENTJ', 'job_recommendation' => 'CEO, Lawyer, Consultant'],
            ['mbti_type' => 'ISTJ', 'job_recommendation' => 'Accountant, Engineer, Judge'],
            ['mbti_type' => 'ESFP', 'job_recommendation' => 'Actor, Musician, Event Planner'],
        ];

        DB::table('mbti_recommendations')->insert($data);
    }
}
