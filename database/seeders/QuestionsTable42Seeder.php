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
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I found myself getting upset by quite trivial things',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I was aware of dryness of my mouth',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I couldn\'t seem to experience any positive feeling at all',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I experienced breathing difficulty (eg, excessively rapid breathing, breathlessness in the absence of physical exertion)',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I just couldn\'t seem to get going',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I tended to over-react to situations',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I had a feeling of shakiness (eg, legs going to give way)',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I found it difficult to relax',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I found myself in situations that made me so anxious I was most relieved when they ended',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I felt that I had nothing to look forward to',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I found myself getting upset rather easily',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I felt that I was using a lot of nervous energy',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I felt sad and depressed',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I found myself getting impatient when I was delayed in any way (eg, elevators, traffic lights, being kept waiting)',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I had a feeling of faintness',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I felt that I had lost interest in just about everything',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I felt I wasn\'t worth much as a person',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I felt that I was rather touchy',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I perspired noticeably (eg, hands sweaty) in the absence of high temperatures or physical exertion',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I felt scared without any good reason',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I felt that life wasn\'t worthwhile',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I found it hard to wind down',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I had difficulty in swallowing',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I couldn\'t seem to get any enjoyment out of the things I did',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I was aware of the action of my heart in the absence of physical exertion (eg, sense of heart rate increase, heart missing a beat)',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I felt down-hearted and blue',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I found that I was very irritable',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I felt I was close to panic',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I found it hard to calm down after something upset me',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I feared that I would be "thrown" by some trivial but unfamiliar task',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I was unable to become enthusiastic about anything',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I found it difficult to tolerate interruptions to what I was doing',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I was in a state of nervous tension',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I felt I was pretty worthless',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I was intolerant of anything that kept me from getting on with what I was doing',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I felt terrified',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I could see nothing in the future to be hopeful about',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I felt that life was meaningless',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I found myself getting agitated',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I was worried about situations in which I might panic and make a fool of myself',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I experienced trembling (eg, in the hands)',
            ],
            [
                'quiz_id' => 2,
                'type' => 'a',
                'question' => 'I found it difficult to work up the initiative to do things',
            ],
        ];
    DB::table('quiz_questions')->insert($questions);
    }
}
