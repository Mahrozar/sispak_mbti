<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MBTIRecommendation extends Model
{
    use HasFactory;

    protected $table = 'mbti_recommendations'; // Pastikan nama tabel benar

    protected $fillable = ['mbti_type', 'job_recommendation'];
    
    // protected $casts = [
    //     'job_recommendation' => 'array',] // Menyimpan daftar pekerjaan dalam format array
}
