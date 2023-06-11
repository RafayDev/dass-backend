<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
 
class QuestionsTable42Seeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        $questions = [
            // Depression Scale
            [
                'quiz_id' => 2,
                'type' => 'd',
                'question' => 'I found it hard to wind down',
            ],
            [
                'quiz_id' => 2,
                'type' => 'd',
                'question' => 'I couldn’t seem to experience any positive feeling at all',
            ],
            [
                'quiz_id' => 2,
                'type' => 'd',
                'question' => 'I felt that I had nothing to look forward to',
            ],
            [
                'quiz_id' => 2,
                'type' => 'd',
                'question' => 'I felt down-hearted and blue',
            ],
            [
                'quiz_id' => 2,
                'type' => 'd',
                'question' => 'I was unable to become enthusiastic about anything',
            ],
            [
                'quiz_id' => 2,
                'type' => 'd',
                'question' => 'I found it difficult to work up the initiative to do things',
            ],
            [
                'quiz_id' => 2,
                'type' => 'd',
                'question' => 'I felt that I was rather worthless',
            ],
            [
                'quiz_id' => 2,
                'type' => 'd',
                'question' => 'I felt that life was meaningless',
            ],
            [
                'quiz_id' => 2,
                'type' => 'd',
                'question' => 'I felt that nothing was very enjoyable',
            ],
            [
                'quiz_id' => 2,
                'type' => 'd',
                'question' => 'I found it hard to relax',
            ],
            [
                'quiz_id' => 2,
                'type' => 'd',
                'question' => 'I felt sad and depressed',
            ],
            [
                'quiz_id' => 2,
                'type' => 'd',
                'question' => 'I found it difficult to find meaning or purpose in life',
            ],
            
            // Anxiety Scale
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I felt scared without any good reason',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I felt that I was close to panic',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I was aware of the action of my heart in the absence of physical exertion',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I felt scared for no reason',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I felt nervous or shaky',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I felt afraid or terrified',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I found it hard to calm down after something upset me',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I felt agitated or restless',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I found it difficult to tolerate interruptions to what I was doing',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I felt panicky',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I was worried about situations in which I might panic and make a fool of myself',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I felt that I was going to be trapped in certain situations',
            ],
            
            // Stress Scale
            [
                'quiz_id' => 2,
                'type' => 's',
                'question' => 'I found myself getting upset rather easily',
            ],
            [
                'quiz_id' => 2,
                'type' => 's',
                'question' => 'I found it hard to unwind',
            ],
            [
                'quiz_id' => 2,
                'type' => 's',
                'question' => 'I felt that I was under constant pressure',
            ],
            [
                'quiz_id' => 2,
                'type' => 's',
                'question' => 'I was intolerant of anything that slowed me down',
            ],
            [
                'quiz_id' => 2,
                'type' => 's',
                'question' => 'I felt that I was rather touchy',
            ],
            [
                'quiz_id' => 2,
                'type' => 's',
                'question' => 'I was aware of dryness of my mouth',
            ],
            [
                'quiz_id' => 2,
                'type' => 's',
                'question' => 'I found it difficult to cope with all the things I had to do',
            ],
            [
                'quiz_id' => 2,
                'type' => 's',
                'question' => 'I felt that I was not doing well in life',
            ],
            [
                'quiz_id' => 2,
                'type' => 's',
                'question' => 'I felt that I was not making progress',
            ],
            [
                'quiz_id' => 2,
                'type' => 's',
                'question' => 'I found myself getting angry because of things that were outside my control',
            ],
            [
                'quiz_id' => 2,
                'type' => 's',
                'question' => 'I felt run down and drained of physical or emotional energy',
            ],
            [
                'quiz_id' => 2,
                'type' => 's',
                'question' => 'I felt that I was unable to overcome my difficulties',
            ],
            [
                'quiz_id' => 2,
                'type' => 's',
                'question' => 'I felt that I was pretty hopeless about the future',
            ],
            [
                'quiz_id' => 2,
                'type' => 's',
                'question' => 'I felt that I was trapped by my life circumstances',
            ],
            [
                'quiz_id' => 2,
                'type' => 's',
                'question' => 'I felt that everything was an effort',
            ],
            [
                'quiz_id' => 2,
                'type' => 's',
                'question' => 'I found it hard to concentrate',
            ],
            [
                'quiz_id' => 2,
                'type' => 's',
                'question' => 'I found it difficult to relax after a difficult day',
            ],
            [
                'quiz_id' => 2,
                'type' => 's',
                'question' => 'I felt that I was not in control of the important things in my life',
            ],
        ];
    DB::table('quiz_questions')->insert($questions);
    }
}
