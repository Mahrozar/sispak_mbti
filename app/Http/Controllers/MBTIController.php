<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MBTIRecommendation;

class MBTIController extends Controller
{
    public function getJobs($mbti)
    {
        // Cari di database berdasarkan tipe MBTI (case insensitive)
        $recommendation = MBTIRecommendation::where('mbti_type', strtoupper($mbti))->first();

        if (!$recommendation || empty($recommendation->job_recommendation)) {
            return response()->json([
                'mbti_type' => strtoupper($mbti),
                'job_recommendations' => [],
                'message' => 'No jobs found'
            ], 404);
        }

        return response()->json([
            'mbti_type' => $recommendation->mbti_type,
            'job_recommendations' => explode(', ', $recommendation->job_recommendation) // Ubah string ke array
        ]);
    }
}
