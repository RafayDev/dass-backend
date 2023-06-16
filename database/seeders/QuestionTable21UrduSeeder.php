<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
 
class QuestionTable21UrduSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {$questions = [
        [
            'quiz_id' => 3,
            'type' => 's',
            'question' => 'میرے لئے پرسکون ہونا مشکل ہو جاتا ہے',
        ],
        [
            'quiz_id' => 3,
            'type' => 'a',
            'question' => 'مجھے یہ احساس ہوتا رہا ہے جیسے میرا منہ خشک ہو رہا ہوں',
        ],
        [
            'quiz_id' => 3,
            'type' => 'd',
            'question' => 'مجھے کسی قسم کے مثبت جذبات محسوس نہیں ہوتے',
        ],
        [
            'quiz_id' => 3,
            'type' => 'a',
            'question' => 'سانس لینے میں دشواری محسوس ہوتی رہی ہے (بغیر کسی جسمانی مشقت والے کام کے)',
        ],
        [
            'quiz_id' => 3,
            'type' => 'd',
            'question' => 'مجھے کسی کام کے کرنے کے لئے آغاز کرنا مشکل محسوس ہوتا رہا ہے',
        ],
        [
            'quiz_id' => 3,
            'type' => 's',
            'question' => ' میں نے بعض حالات میں غیر ضروری ردعمل کا اظہار کیا',
        ],
        [
            'quiz_id' => 3,
            'type' => 'a',
            'question' => 'مجھے ہچکچاہٹ محسوس ہوتی رہی ہے',
        ],
        [
            'quiz_id' => 3,
            'type' => 's',
            'question' => 'میں نے محسوس کیا کہ میں بہت زیادہ ذہنی توانائی استعمال کر رہا ہوں',
        ],
        [
            'quiz_id' => 3,
            'type' => 'a',
            'question' => ' میں ایسے حالات سے گھبراتا رہا جن میں میری بے چینی بڑھنے کا خدشہ ہوتا ہے',
        ],
        [
            'quiz_id' => 3,
            'type' => 'd',
            'question' => ' میں اپنا مستقبل تاریک محسوس کرتا ہوں',
        ],
        [
            'quiz_id' => 3,
            'type' => 's',
            'question' => 'مجھے اپنے آپ میں چڑچڑا پن محسوس ہوتا ہے',
        ],
        [
            'quiz_id' => 3,
            'type' => 's',
            'question' => 'میں ذہنی طور پر بے سکون محسوس کرتا ہوں',
        ],
        [
            'quiz_id' => 3,
            'type' => 'd',
            'question' => ' ہو میں اداسی محسوس کرتا ہوں',
        ],
        [
            'quiz_id' => 3,
            'type' => 's',
            'question' => 'ہو میرے لیے اس چیز یا شخص کو برداشت کرنا مشکل ہوتا ہے جو میرے کام میں رکاوٹ پیدا کرے',
        ],
        [
            'quiz_id' => 3,
            'type' => 'a',
            'question' => ' ارے مجھے محسوس ہوتا رہا ہے کہ جیسے مجھے دورہ پڑنے لگا ہے',
        ],
        [
            'quiz_id' => 3,
            'type' => 'd',
            'question' => ' مجھے کسی بھی کام میں دلچسپی نہیں رہی',
        ],
        [
            'quiz_id' => 3,
            'type' => 'd',
            'question' => 'مجھے محسوس ہوتا رہا کہ میں کسی قابل نہیں ہوں',
        ],
        [
            'quiz_id' => 3,
            'type' => 's',
            'question' => 'مجھے محسوس ہوتا رہا کہ میں بہت جذباتی ہو جاتا ہوں',
        ],
        [
            'quiz_id' => 3,
            'type' => 'a',
            'question' => ' مجھے بلاوجہ بغیر کسی جسمانی مشقت کے دل کی دھڑکن تیز محسوس ہوتی رہی ہے',
        ],
        [
            'quiz_id' => 3,
            'type' => 'a',
            'question' => 'میں بغیر کسی وجہ کے خوفزدہ ہو جاتا ہوں',
        ],
        [
            'quiz_id' => 3,
            'type' => 'd',
            'question' => 'ہو مجھے یہ احساس ہوتا ہے کے زندگی بے معنی ہے',
        ],
    ];
    DB::table('quiz_questions')->insert($questions);
    }
}
