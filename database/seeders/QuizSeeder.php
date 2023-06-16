<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
 
class QuizSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        DB::table('quizzes')->insert(
            [
            [
            'quiz_name' => 'Dass-21-English',
            'quiz_description' => 'Dass-21',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'quiz_name' => 'Dass-42-English',
            'quiz_description' => 'Dass-42',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'quiz_name' => 'Dass-21-Urdu',
            'quiz_description' => 'Dass-21',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'quiz_name' => 'Dass-42-Urdu',
            'quiz_description' => 'Dass-42',
            'created_at' => now(),
            'updated_at' => now(),
            ]
            ]
    );
    }
}
