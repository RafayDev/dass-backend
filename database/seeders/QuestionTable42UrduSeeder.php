<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
 
class QuestionTable42UrduSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        $questions = [
            [
                'quiz_id' => 4,
                'type' => 'a',
                'question' => 'آپ کو کسی وجہ سے پریشان ہونے کی وجہ سے معمولی باتوں پر پریشانی محسوس ہوتی ہے؟',
            ],
            [
                'quiz_id' => 4,
                'type' => 'a',
                'question' => 'آپ کو کسی وجہ سے منہ خشک ہونے کا احساس ہوتا ہے؟',
            ],
            [
                'quiz_id' => 4,
                'type' => 'a',
                'question' => 'آپ کو کچھ خوشگوار احساسات محسوس نہیں ہوتیں؟',
            ],
            [
                'quiz_id' => 4,
                'type' => 'a',
                'question' => 'آپ نے تھکاوٹ کا احساس کیا بغیر سانس لینے میں دقت محسوس کی؟',
            ],
            [
                'quiz_id' => 4,
                'type' => 'a',
                'question' => 'آپ کو کام کرنے کے لئے مفید نہیں محسوس ہوتے؟',
            ],
            [
                'quiz_id' => 4,
                'type' => 'a',
                'question' => 'آپ نے غیر مناسب رویے کا اظہار صورتحال میں کیا؟',
            ],
            [
                'quiz_id' => 4,
                'type' => 'a',
                'question' => 'آپ نے کپکپاہٹ کا احساس کیا جیسے آپ گرنے والے ہیں؟',
            ],
            [
                'quiz_id' => 4,
                'type' => 'a',
                'question' => 'آپ کو ذہنی طور پر کم سکون محسوس ہوتی ہے؟',
            ],
            [
                'quiz_id' => 4,
                'type' => 'a',
                'question' => 'آپ نے ایسے حالات سے گزرا ہے جو بے حد پریشان کن تھے اور ان حالات سے باہر نکل کر آپ نے اپنے آپ کو بہت پر سکون پایا ہے؟',
            ],
            [
                'quiz_id' => 4,
                'type' => 'a',
                'question' => 'آپ کو مستقبل تاریک محسوس ہوتا ہے؟',
            ],
            [
                'quiz_id' => 4,
                'type' => 'a',
                'question' => 'آپ کو جلدی پریشان ہونے کا احساس ہوا؟',
            ],
            [
                'quiz_id' => 4,
                'type' => 'a',
                'question' => 'آپ نے کام کرنے کے لئے زیادہ ذہنی توانائی صرف کی ہے؟',
            ],
            [
                'quiz_id' => 4,
                'type' => 'a',
                'question' => 'آپ نے خود کو بہت غمزدہ اور افسردہ محسوس کیا؟',
            ],
            [
                'quiz_id' => 4,
                'type' => 'a',
                'question' => 'کسی بھی وجہ سے انتظار کرنا آپ کے لئے ناقابل برداشت ہوا؟',
            ],
            [
                'quiz_id' => 4,
                'type' => 'a',
                'question' => 'آپ کو دم گھٹنے کا احساس ہوا؟',
            ],
            [
                'quiz_id' => 4,
                'type' => 'a',
                'question' => 'آپ کو کسی بھی کام میں دلچسپی نہیں رہتی؟',
            ],
            [
                'quiz_id' => 4,
                'type' => 'a',
                'question' => 'آپ نے محسوس کیا کہ آپ کی کوئی اہمیت نہیں ہے؟',
            ],
            [
                'quiz_id' => 4,
                'type' => 'a',
                'question' => 'آپ کو بہت حساس محسوس ہوتے ہیں؟',
            ],
            [
                'quiz_id' => 4,
                'type' => 'a',
                'question' => 'آپ کو بغیر کسی جسمانی مشقت کے بہت پسینہ آتا ہے؟',
            ],
            [
                'quiz_id' => 4,
                'type' => 'a',
                'question' => 'بغیر کسی مناسب وجہ کے آپ خوفزدہ ہو جاتے ہیں؟',
            ],
            [
                'quiz_id' => 4,
                'type' => 'a',
                'question' => 'آپ نے محسوس کیا کہ زندگی کی کوئی اہمیت نہیں؟',
            ],
            [
                'quiz_id' => 4,
                'type' => 'a',
                'question' => 'آپ کے لئے غصے پر قابو پانا مشکل ہو جاتا تھا؟',
            ],
            [
                'quiz_id' => 4,
                'type' => 'a',
                'question' => 'آپ نے کھانا نگلنے میں دقت محسوس کی؟',
            ],
            [
                'quiz_id' => 4,
                'type' => 'a',
                'question' => 'آپ اپنے کسی بھی کام سے لطف اندوز نہیں ہوئے؟',
            ],
            [
                'quiz_id' => 4,
                'type' => 'a',
                'question' => 'بغیر کسی جسمانی مشقت کے آپ کی دل کی دھڑکن تیز ہو گئی؟',
            ],
            [
                'quiz_id' => 4,
                'type' => 'a',
                'question' => 'آپ نے محسوس کیا کہ آپ بیٹھ گئے ہیں اور آپ اداس ہیں؟',
            ],
            [
                'quiz_id' => 4,
                'type' => 'a',
                'question' => 'آپ نے چڑچڑا پن محسوس کیا؟',
            ],
            [
                'quiz_id' => 4,
                'type' => 'a',
                'question' => 'آپ نے محسوس کیا کہ آپ کی پریشانی حد سے بڑھ گئی ہے؟c',
            ],
            [
                'quiz_id' => 4,
                'type' => 'a',
                'question' => '
                آپ نے محسوس کیا کہ جب آپ کو کسی وجہ سے پریشان ہوتے ہو، تو آپ کے لئے پرسکون ہونا مشکل ہو جاتا ہے؟',
            ],
            [
                'quiz_id' => 4,
                'type' => 'a',
                'question' => 'کیا آپ کو ڈر تھا کہ آپ کو کسی معمولی لیکن غیر مانوس کام کی ذمہ داری سونپی جائے گی؟',
            ],
            [
                'quiz_id' => 4,
                'type' => 'a',
                'question' => 'آپ کسی بھی کام کے بارے میں پرجوش نہیں رہتے؟',
            ],
            [
                'quiz_id' => 4,
                'type' => 'a',
                'question' => 'آپ کے لئے اپنے کام میں کسی کی مداخلت برداشت کرنا مشکل تھا؟',
            ],
            [
                'quiz_id' => 4,
                'type' => 'a',
                'question' => 'آپ ذہنی تناو کی حالت میں رہتے تھے؟',
            ],
            [
                'quiz_id' => 4,
                'type' => 'a',
                'question' => 'آپ نے خود کو بے حد غیراہم محسوس کیا؟',
            ],
            [
                'quiz_id' => 4,
                'type' => 'a',
                'question' => 'آپ کے لئے اس چیز یا شخص کو برداشت کرنا مشکل تھا جو آپ کے کام میں رکاوٹ پیدا کرے؟',
            ],
            [
                'quiz_id' => 4,
                'type' => 'a',
                'question' => 'آپ بے حد خوفزدہ رہتے تھے؟',
            ],
            [
                'quiz_id' => 4,
                'type' => 'a',
                'question' => 'آپ کو مستقبل میں کوئی چیز ایسی نظر نہیں آتی جس کے بارے میں آپ پرامید رکھ سکیں؟',
            ],
            [
                'quiz_id' => 4,
                'type' => 'a',
                'question' => 'آپ نے محسوس کیا کہ زندگی بے معنی اور بے مقصد ہے؟',
            ],
            [
                'quiz_id' => 4,
                'type' => 'a',
                'question' => 'آپ نے خود کو ضدی محسوس کیا؟',
            ],
            [
                'quiz_id' => 4,
                'type' => 'a',
                'question' => 'آپ ایسے حالات کے بارے میں پریشان ہوئے جن میں آپ کے بے وقوف بننے اور آپ کی بے چینی بڑھنے کا خدشہ تھا؟',
            ],
            [
                'quiz_id' => 4,
                'type' => 'a',
                'question' => 'آپ نے اپنے جسم میں کپکپاہٹ محسوس کی؟',
            ],
            [
                'quiz_id' => 4,
                'type' => 'a',
                'question' => 'آپ کو کسی کام کے کرنے کے لئے پہل کرنا مشکل محسوس ہوا؟',
            ],
        ];
    DB::table('quiz_questions')->insert($questions);
    }
}
