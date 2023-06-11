<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
 
class QuestionsTable21Seeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {$questions = [
        [
            'quiz_id' => 1,
            'type' => 's',
            'question' => 'I found it hard to wind down',
        ],
        [
            'quiz_id' => 1,
            'type' => 'a',
            'question' => 'I was aware of dryness of my mouth',
        ],
        [
            'quiz_id' => 1,
            'type' => 'd',
            'question' => 'I couldn’t seem to experience any positive feeling at all',
        ],
        [
            'quiz_id' => 1,
            'type' => 'a',
            'question' => 'I experienced breathing difficulty (e.g. excessively rapid breathing, breathlessness in the absence of physical exertion)',
        ],
        [
            'quiz_id' => 1,
            'type' => 'd',
            'question' => 'I found it difficult to work up the initiative to do things',
        ],
        [
            'quiz_id' => 1,
            'type' => 's',
            'question' => 'I tended to over-react to situations',
        ],
        [
            'quiz_id' => 1,
            'type' => 'a',
            'question' => 'I experienced trembling (e.g. in the hands)',
        ],
        [
            'quiz_id' => 1,
            'type' => 's',
            'question' => 'I felt that I was using a lot of nervous energy',
        ],
        [
            'quiz_id' => 1,
            'type' => 'a',
            'question' => 'I was worried about situations in which I might panic and make a fool of myself',
        ],
        [
            'quiz_id' => 1,
            'type' => 'd',
            'question' => 'I felt that I had nothing to look forward to',
        ],
        [
            'quiz_id' => 1,
            'type' => 's',
            'question' => 'I found myself getting agitated',
        ],
        [
            'quiz_id' => 1,
            'type' => 's',
            'question' => 'I found it difficult to relax',
        ],
        [
            'quiz_id' => 1,
            'type' => 'd',
            'question' => 'I felt down-hearted and blue',
        ],
        [
            'quiz_id' => 1,
            'type' => 's',
            'question' => 'I was intolerant of anything that kept me from getting on with what I was doing',
        ],
        [
            'quiz_id' => 1,
            'type' => 'a',
            'question' => 'I felt I was close to panic',
        ],
        [
            'quiz_id' => 1,
            'type' => 'd',
            'question' => 'I was unable to become enthusiastic about anything',
        ],
        [
            'quiz_id' => 1,
            'type' => 'd',
            'question' => 'I felt I wasn’t worth much as a person',
        ],
        [
            'quiz_id' => 1,
            'type' => 's',
            'question' => 'I felt that I was rather touchy',
        ],
        [
            'quiz_id' => 1,
            'type' => 'a',
            'question' => 'I was aware of the action of my heart in the absence of physical exertion (e.g. sense of heart rate increase, heart missing a beat)',
        ],
        [
            'quiz_id' => 1,
            'type' => 'a',
            'question' => 'I felt scared without any good reason',
        ],
        [
            'quiz_id' => 1,
            'type' => 'd',
            'question' => 'I felt that life was meaningless',
        ],
    ];
    DB::table('quiz_questions')->insert($questions);
    }
}
