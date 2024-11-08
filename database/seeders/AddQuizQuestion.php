<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddQuizQuestion extends Seeder
{
  public function run(): void
  {
    $questions = [
        [
            'course_id' => 1,
            'section_id' => 1,
            'question' => 'Did you _ who took the cookie?',
            'question_uk' => 'Ти дізнався, хто взяв печиво?',
            'question_ru' => 'Ты узнал кто взял печенье?',
            'correct_answer' => 'find out',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 1,
            'question' => 'The concert didn’t _ to my expectations.',
            'question_uk' => 'Концерт не виправдав мої очікування.',
            'question_ru' => 'Концерт не оправдал моих надежд.',
            'correct_answer' => 'live up',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 1,
            'question' => 'I’m sorry, but I don’t think he will ever _.',
            'question_uk' => 'Вибачте, але я не думаю, що він коли-небудь заведе сім`ю (заспокоїться).',
            'question_ru' => 'Простите, но я не думаю, что он когда-то остепенится.',
            'correct_answer' => 'settle down',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 1,
            'question' => 'I’m cold, could you _ the heating _, please?',
            'question_uk' => 'Мені холодно, можеш, будь ласка, збільшити опалення?',
            'question_ru' => 'Мне холодно, можно, пожалуйста, увеличить отопление?',
            'correct_answer' => 'turn, up',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 1,
            'question' => 'We\'ll give him a couple hours to _.',
            'question_uk' => 'Ми дамо йому кілька годин, щоб охолонути.',
            'question_ru' => 'Мы дадим ему пару часов, чтобы охладиться.',
            'correct_answer' => 'cool off',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 1,
            'question' => ' _ my brother while I\'m gone.',
            'question_uk' => 'Приглянь за моїм братом, поки мене немає.',
            'question_ru' => 'Посмотрите за моим братом, пока меня нет.',
            'correct_answer' => 'look after',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 1,
            'question' => 'She thinks you _ the house.',
            'question_uk' => 'Вона думає, що ти бездіяльно проводиш час вдома.',
            'question_ru' => 'Она думает, что ты бездельничаешь по дому.',
            'correct_answer' => 'laze about',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 1,
            'question' => 'I don’t _ going out tonight.',
            'question_uk' => 'Я не в настрої йти кудись сьогодні ввечері.',
            'question_ru' => 'Я не в настроении, чтобы идти куда-то сегодня вечером.',
            'correct_answer' => 'feel up to',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 1,
            'question' => 'Let me see if I can _.',
            'question_uk' => 'Давайте подивимося, чи зможу я збільшити.',
            'question_ru' => 'Посмотрим, может удастся увеличить.',
            'correct_answer' => 'zoom in',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 1,
            'question' => 'They _ a lot of the scenes with her.',
            'question_uk' => 'Вони вирізали багато сцен з нею.',
            'question_ru' => 'Они вырезали большинство сцен с ней.',
            'correct_answer' => 'cut out',
            'created_at' => now(),
        ],
        [
            'course_id' => 1,
            'section_id' => 2,
            'question' => 'You must _ your safety belt in the back of a car.',
            'question_uk' => 'Ви повинні застебнути ремінь безпеки на задньому сидінні авто.',
            'question_ru' => 'Вы должны пристегивать свой ремень безопасности на заднем сидении авто.',
            'correct_answer' => 'do up',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 2,
            'question' => 'The milk _ because I forgot to put it in the fridge.',
            'question_uk' => 'Молоко зіпсувалося, тому що я забув покласти його в холодильник.',
            'question_ru' => 'Молоко испортилось, потому что я забыл положить его в холодильник.',
            'correct_answer' => 'went off',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 2,
            'question' => 'I _ for my studies every semester.',
            'question_uk' => 'Я плачу за навчання кожного семестру.',
            'question_ru' => 'Я плачу за учебу каждый семестр.',
            'correct_answer' => 'pay for',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 2,
            'question' => 'Try to _ at least 20 min a day to read a book.',
            'question_uk' => 'Спробуйте виділити хоча б 20 хвилин на день для читання книги.',
            'question_ru' => 'Попробуйте выделять хотя бы 20 мин. в день на то, чтобы почитать книгу.',
            'correct_answer' => 'put aside',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 2,
            'question' => 'Someone’s _ all the milk.',
            'question_uk' => 'Хтось використав усе молоко.',
            'question_ru' => 'Кто-то использовал все молоко.',
            'correct_answer' => 'used up',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 2,
            'question' => ' _ and _ that book.',
            'question_uk' => 'Заїдь і забери цю книгу.',
            'question_ru' => 'Заедь и забери эту книгу.',
            'correct_answer' => 'drop by, pick up',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 2,
            'question' => 'I’m _ my keys.',
            'question_uk' => 'Я шукаю свої ключі.',
            'question_ru' => 'Я ищу мои ключи.',
            'correct_answer' => 'looking for',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 2,
            'question' => 'There aren’t enough chairs to _.',
            'question_uk' => 'Не вистачає стільців для всіх.',
            'question_ru' => 'Тут не хватает стульев для всех.',
            'correct_answer' => 'go around',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 2,
            'question' => 'Now, please _ your chairs and sweep the floor.',
            'question_uk' => 'Тепер складіть будь ласка стільці і підмети підлогу.',
            'question_ru' => 'Теперь сложи пожалуйста стулья и подмети пол.',
            'correct_answer' => 'fold up',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 2,
            'question' => 'Nick loves _ old cars.',
            'question_uk' => 'Нік любить ремонтувати старі автомобілі.',
            'question_ru' => 'Ник любит ремонтировать старые автомобили.',
            'correct_answer' => 'fixing up',
            'created_at' => now(),
        ],
        [
            'course_id' => 1,
            'section_id' => 3,
            'question' => 'She spent the morning _ to her friends.',
            'question_uk' => 'Вона провела ранок, базікаючи з друзями.',
            'question_ru' => 'Она провела утро болтая с друзьями.',
            'correct_answer' => 'chattering away',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 3,
            'question' => 'She _ the subject of her divorce.',
            'question_uk' => 'Вона не говорила про причину свого розлучення.',
            'question_ru' => 'Она не говорила о причине своего развода.',
            'correct_answer' => 'kept off',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 3,
            'question' => 'The weather has _ .',
            'question_uk' => 'Погода прояснилася.',
            'question_ru' => 'Прояснилось (о погоде).',
            'correct_answer' => 'cleared up',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 3,
            'question' => 'They’ll never _ this idea.',
            'question_uk' => 'Вони ніколи не погодяться з цією ідеєю.',
            'question_ru' => 'Они никогда не согласятся с этой идеей.',
            'correct_answer' => 'go along with',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 3,
            'question' => 'I can’t _ him.',
            'question_uk' => 'Я не можу зв’язатися з ним.',
            'question_ru' => 'Я не могу к нему дозвониться.',
            'correct_answer' => 'get through to',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 3,
            'question' => 'Let’s _ that _ for now.',
            'question_uk' => 'Давайте відкладемо це поки що.',
            'question_ru' => 'Давайте отложим это пока что.',
            'correct_answer' => 'leave, aside',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 3,
            'question' => ' _ , please! I can’t hear you.',
            'question_uk' => 'Говоріть голосніше, будь ласка! Я вас не чую.',
            'question_ru' => 'Говори громче, пожалуйста! Я не слышу тебя.',
            'correct_answer' => 'speak up',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 3,
            'question' => 'Have you _ Jim’s gift?',
            'question_uk' => 'Ви запакували подарунок Джиму?',
            'question_ru' => 'Вы запаковали подарок Джимма?',
            'correct_answer' => 'wrapped up',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 3,
            'question' => 'Don’t just _ !',
            'question_uk' => 'Не потрібно просто бурчати!',
            'question_ru' => 'Не нужно просто бубнить!',
            'correct_answer' => 'drone on',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 3,
            'question' => 'I’ll just _ the main points.',
            'question_uk' => 'Я просто поясню основні пункти.',
            'question_ru' => 'Я просто объясню основные пункты.',
            'correct_answer' => 'run through',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 4,
            'question' => 'You shouldn’t _ the person you’re actually interested in.',
            'question_uk' => 'Не слід ігнорувати людину, яка тебе насправді цікавить.',
            'question_ru' => 'Не следует игнорировать человека, который на самом деле тебя интересует.',
            'correct_answer' => 'freeze out',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 4,
            'question' => 'I’ve just _ that they were having a relationship.',
            'question_uk' => 'Я тільки що почав усвідомлювати, що у них були стосунки.',
            'question_ru' => 'Я только что начал осознавать, что у них были отношения.',
            'correct_answer' => 'cottoned on',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 4,
            'question' => 'I waited for him but he didn’t _.',
            'question_uk' => 'Я чекала на нього, але він не з’явився.',
            'question_ru' => 'Я ждала его, но он не появился.',
            'correct_answer' => 'show up',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 4,
            'question' => 'I _ her at once.',
            'question_uk' => 'Я прив’язалася до неї одразу.',
            'question_ru' => 'Я привязалась к ней сразу.',
            'correct_answer' => 'warmed to',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 4,
            'question' => 'I prefer to _ professionals.',
            'question_uk' => 'Я віддаю перевагу мати справу з професіоналами.',
            'question_ru' => 'Я предпочитаю иметь дело с профессионалами.',
            'correct_answer' => 'deal with',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 4,
            'question' => 'It’s sweet the way he _ his little brother.',
            'question_uk' => 'Те, як він заступається за свого молодшого брата, дуже мило.',
            'question_ru' => 'То как он заступается за своего младшего брата, очень мило.',
            'correct_answer' => 'sticks up for',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 4,
            'question' => 'I _ my boss at the supermarket.',
            'question_uk' => 'Я натрапив на свого начальника в супермаркеті.',
            'question_ru' => 'Я наткнулся на своего начальника в супермаркете.',
            'correct_answer' => 'ran into',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 4,
            'question' => 'He _ his mother.',
            'question_uk' => 'Він схожий на свою маму.',
            'question_ru' => 'Он похож на свою маму.',
            'correct_answer' => 'takes after',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 4,
            'question' => 'I _ to George on my way home.',
            'question_uk' => 'Я заскочив до Джорджа по дорозі додому.',
            'question_ru' => 'Я зашел (заскочил) к Джорджу по дороге из школы домой.',
            'correct_answer' => 'dropped in',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 4,
            'question' => 'Why do you always _ me?',
            'question_uk' => 'Чому ти завжди насміхаєшся надо мною?',
            'question_ru' => 'Почему вы всегда насмехаетесь надо мной?',
            'correct_answer' => 'pick on',
            'created_at' => now(),
        ],
        [
            'course_id' => 1,
            'section_id' => 5,
            'question' => '_ and tell me what\'s wrong.',
            'question_uk' => 'Заспокойся і скажи, що не так.',
            'question_ru' => 'Успокойся, и скажи, что не так.',
            'correct_answer' => 'Calm down',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 5,
            'question' => 'I confess I’m beginning to _ her.',
            'question_uk' => 'Зізнаюсь, я починаю їй подобатися',
            'question_ru' => 'Признаюсь, я начинаю ей нравиться',
            'correct_answer' => 'warm to',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 5,
            'question' => 'I _ when somebody touches my hair.',
            'question_uk' => 'Я виходжу з себе коли хтось чіпає моє волосся',
            'question_ru' => 'Я выхожу из себя когда кто-то трогает мои волосы',
            'correct_answer' => 'freak out',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 5,
            'question' => 'Bad service in a restaurant _ him _.',
            'question_uk' => 'Погане обслуговування в ресторані дратує його.',
            'question_ru' => 'Плохое обслуживание в ресторане выводит его из себя.',
            'correct_answer' => 'ticks, off',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 5,
            'question' => 'It seems to me that you’ll _.',
            'question_uk' => 'Мені здається, що ти злякаєшся.',
            'question_ru' => 'Мне кажется, ты испугаешься и не сделаешь этого.',
            'correct_answer' => 'chicken out',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 5,
            'question' => 'He spoke slowly to _ his anger.',
            'question_uk' => 'Він говорив повільно, щоб стримати свій гнів.',
            'question_ru' => 'Он говорил медленно, чтобы сдержать свой гнев.',
            'correct_answer' => 'hold back',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 5,
            'question' => 'My son _ for sports.',
            'question_uk' => 'Мій син живе спортом.',
            'question_ru' => 'Мой сын живет спортом.',
            'correct_answer' => 'lives for',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 5,
            'question' => 'She will have to _ herself _.',
            'question_uk' => 'Їй доведеться зібратися з силами.',
            'question_ru' => 'Ей нужно будет взять себя в руки.',
            'correct_answer' => 'pull, together',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 5,
            'question' => 'It’s good if a person can _ his emotions from time to time.',
            'question_uk' => 'Добре, якщо людина час від часу виплескує свої емоції.',
            'question_ru' => 'Хорошо, если человек время от времени выплёскивает свои эмоции.',
            'correct_answer' => 'spill out',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 5,
            'question' => 'The smell of a rose will _ you _.',
            'question_uk' => 'Запах троянди підбадьорить тебе.',
            'question_ru' => 'Запах розы подбодрит тебя.',
            'correct_answer' => 'pep, up',
            'created_at' => now(),
        ],
        [
            'course_id' => 1,
            'section_id' => 6,
            'question' => 'My sister and I went to the bus station to _ our mother _.',
            'question_uk' => 'Моя сестра і я поїхали на автобусну станцію, щоб провести нашу маму.',
            'question_ru' => 'Я и моя сестра отправились на автобусную станцию провести нашу маму.',
            'correct_answer' => 'see, off',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 6,
            'question' => 'When I lived in Spain, I used to _ all the time in restaurants.',
            'question_uk' => 'Коли я жила в Іспанії, я увесь час їла у ресторанах.',
            'question_ru' => 'Когда я жила в Испании, я все время ела в ресторанах.',
            'correct_answer' => 'eat out',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 6,
            'question' => 'Go and pack, don’t _ - we have to go in an hour.',
            'question_uk' => 'Іди і пакуй речі, не гай часу – нам потрібно виїхати через годину.',
            'question_ru' => 'Иди и пакуй вещи, не броди без дела – нам через час выезжать.',
            'correct_answer' => 'hang about',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 6,
            'question' => 'The plane _ at 7:15 a.m.',
            'question_uk' => 'Самоліт вирушає о 7:15 ранку.',
            'question_ru' => 'Самолет вылетает в 7:15 утра.',
            'correct_answer' => 'takes off',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 6,
            'question' => 'You sound like a native speaker. Where did you _ your English?',
            'question_uk' => 'Ти звучиш як носій мови. Де ти відшліфував свій англійський?',
            'question_ru' => 'Ты звучишь как носитель языка. Где ты оттачивала свой английский?',
            'correct_answer' => 'brush up',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 6,
            'question' => 'I sometimes drink some wine in the evening to _.',
            'question_uk' => 'Я іноді п’ю вино ввечері, щоб розслабитися.',
            'question_ru' => 'Я иногда пью вечером вино, чтоб расслабиться.',
            'correct_answer' => 'wind down',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 6,
            'question' => 'I will drive you, just _ and enjoy the view.',
            'question_uk' => 'Я тебе відвезу, просто розслабся і насолоджуйся видом.',
            'question_ru' => 'Я буду вести машину, вы просто сядьте удобно и наслаждайтесь видом.',
            'correct_answer' => 'sit back',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 6,
            'question' => 'So you are _ the trip to Paris.',
            'question_uk' => 'Отже, ви схиляєтеся до поїздки в Париж.',
            'question_ru' => 'Значит, вы склоняетесь к поездке в Париж.',
            'correct_answer' => 'tending towards',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 6,
            'question' => 'We need to _ the train station at exactly 9 p.m.',
            'question_uk' => 'Нам потрібно дістатися до вокзалу точно о 21:00.',
            'question_ru' => 'Нам нужно добраться до ж/д станции ровно в 9 вечера.',
            'correct_answer' => 'get to',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 6,
            'question' => 'We _ in Rome for a couple of days.',
            'question_uk' => 'Ми зупинилися в Римі на кілька днів.',
            'question_ru' => 'Мы остановились на несколько дней в Риме.',
            'correct_answer' => 'stopped off',
            'created_at' => now(),
        ],
        [
            'course_id' => 1,
            'section_id' => 7,
            'question' => 'Spicy food _ me.',
            'question_uk' => 'Остра їжа мені не підходить.',
            'question_ru' => 'Острая пища вредит мне.',
            'correct_answer' => 'disagrees with',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 7,
            'question' => 'I’ve _ 2 kg in the last month.',
            'question_uk' => 'Я набрав 2 кг за останній місяць.',
            'question_ru' => 'Я потолстел (поправился) на 2 кг за последний месяц.',
            'correct_answer' => 'put on',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 7,
            'question' => '_ please, this lady needs a doctor.',
            'question_uk' => 'Відійдіть, будь ласка, цій жінці потрібен лікар.',
            'question_ru' => 'Отойдите, пожалуйста, этой женщине нужен доктор.',
            'correct_answer' => 'step aside',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 7,
            'question' => 'I have something to tell you, but I want you to promise not to _.',
            'question_uk' => 'Я маю щось тобі сказати, але я хочу, щоб ти пообіцяв не психувати.',
            'question_ru' => 'Я должен кое-что тебе сказать, но пообещай мне не психовать.',
            'correct_answer' => 'flip out',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 7,
            'question' => 'The disease _ the liver _.',
            'question_uk' => 'Хвороба знищує печінку.',
            'question_ru' => 'Болезнь медленно уничтожает печень.',
            'correct_answer' => 'eats, away',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 7,
            'question' => 'The effect of these pills _ in a few hours.',
            'question_uk' => 'Ефект від цих таблеток зникає через кілька годин.',
            'question_ru' => 'Эти таблетки перестают действовать через несколько часов.',
            'correct_answer' => 'wears off',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 7,
            'question' => 'Without sun, the body will get sick and _.',
            'question_uk' => 'Без сонця тіло буде хворіти і чахнути.',
            'question_ru' => 'Без солнца тело будет болеть и чахнуть.',
            'correct_answer' => 'waste away',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 7,
            'question' => 'The doctors think she will _.',
            'question_uk' => 'Лікарі думають, що вона впорається.',
            'question_ru' => 'Врачи думают, что она справится (выживет).',
            'correct_answer' => 'pull through',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 7,
            'question' => 'Medics tried to _ him _.',
            'question_uk' => 'Медики намагалися привести його до тями.',
            'question_ru' => 'Медики пытались привести его в сознание.',
            'correct_answer' => 'bring, around',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 7,
            'question' => '_ your juice.',
            'question_uk' => 'Допий свій сік.',
            'question_ru' => 'Допей свой сок.',
            'correct_answer' => 'drink up',
            'created_at' => now(),
        ],
        [
            'course_id' => 1,
            'section_id' => 8,
            'question' => '_! There\'s ice on the road.',
            'question_uk' => 'Обережно! На дорозі лід.',
            'question_ru' => 'Осторожно! На дороге лёд.',
            'correct_answer' => 'watch out',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 8,
            'question' => 'In fact, I\'m only now just beginning to _.',
            'question_uk' => 'Насправді, тільки зараз я починаю щось розуміти.',
            'question_ru' => 'В действительности, только сейчас я начала что-то понимать.',
            'correct_answer' => 'catch on',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 8,
            'question' => 'Their demands _ common sense.',
            'question_uk' => 'Їхні вимоги виходять за межі здорового глузду.',
            'question_ru' => 'Их требования выходят за рамки здравого смысла.',
            'correct_answer' => 'go beyond',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 8,
            'question' => 'You should _ tonight.',
            'question_uk' => 'І тобі варто залишитися на ніч.',
            'question_ru' => 'И тебе стоит остаться на ночь.',
            'correct_answer' => 'stay over',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 8,
            'question' => 'Unfortunately, the reality today does not _ that assertion.',
            'question_uk' => 'На жаль, сьогоднішня реальність не підтверджує це твердження.',
            'question_ru' => 'К сожалению, сегодняшние реальности не подтверждают этого.',
            'correct_answer' => 'bear out',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 8,
            'question' => 'We cannot and must not _ strategically.',
            'question_uk' => 'Ми не можемо і не повинні програвати стратегічно.',
            'question_ru' => 'Мы не можем и не должны проигрывать стратегически.',
            'correct_answer' => 'lose out',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 8,
            'question' => 'He wants to _ on a ship.',
            'question_uk' => 'Він хоче сховатися на кораблі.',
            'question_ru' => 'Он хочет спрятаться на корабле.',
            'correct_answer' => 'stow away',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 8,
            'question' => 'I _ to work every morning.',
            'question_uk' => 'Щоранку я дуже швидко їду на роботу.',
            'question_ru' => 'Каждое утро я очень быстро иду на работу.',
            'correct_answer' => 'zip along',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 8,
            'question' => 'If there\'s any food _ , just put it in the fridge.',
            'question_uk' => 'Якщо залишилася невикористана їжа, просто покладіть її в холодильник.',
            'question_ru' => 'Если осталась неиспользованная еда, положите её в холодильник.',
            'correct_answer' => 'left over',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 8,
            'question' => 'He locked the room and put up a sign asking people to _.',
            'question_uk' => 'Він замкнув кімнату і поставив знак, який просить людей не заходити.',
            'question_ru' => 'Он запер комнату и поставил знак, который просит людей не заходить.',
            'correct_answer' => 'keep out',
            'created_at' => now(),
        ],
        [
            'course_id' => 1,
            'section_id' => 9,
            'question' => 'Financial difficulties can _ at any moment.',
            'question_uk' => 'Фінансові труднощі можуть виникнути в будь-який момент.',
            'question_ru' => 'Финансовые затруднения могут возникнуть в любой момент.',
            'correct_answer' => 'crop up',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 9,
            'question' => 'His parents are rich and he often likes to _ their luxury.',
            'question_uk' => 'Його батьки багаті, і він часто любить хвалитися їхніми розкошами.',
            'question_ru' => 'Его родители очень богаты и мальчик часто хвастается своим достоянием.',
            'correct_answer' => 'show off',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 9,
            'question' => 'Mike, will you _ the paragraph, please?',
            'question_uk' => 'Майк, прочитай абзац вголос, будь ласка.',
            'question_ru' => 'Майк, прочитай абзац вслух, пожалуйста.',
            'correct_answer' => 'read out',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 9,
            'question' => 'You can _ any questions you might have.',
            'question_uk' => 'Ви можете підняти будь-які питання, які у вас є.',
            'question_ru' => 'Вы можете вынести на обсуждение любой вопрос, который у вас есть.',
            'correct_answer' => 'bring up',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 9,
            'question' => 'Please _ , you two! I\'m trying to sleep.',
            'question_uk' => 'Будь ласка, замовкніть, ви двоє! Я намагаюся заснути.',
            'question_ru' => 'Замолчите, пожалуйста, вы двое! Я пытаюсь уснуть.',
            'correct_answer' => 'pipe down',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 9,
            'question' => 'You must _ all the documents on the embassy\'s checklist.',
            'question_uk' => 'Ви повинні здати всі документи по контрольному списку посольства.',
            'question_ru' => 'Вы должны сдать на проверку все документы по контрольному списку посольства.',
            'correct_answer' => 'hand in',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 9,
            'question' => 'This project _ the results of Curie\'s research.',
            'question_uk' => 'Цей проект ґрунтується на результатах досліджень Кюрі.',
            'question_ru' => 'Этот проект основывается на результатах исследований Кюри.',
            'correct_answer' => 'draws on',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 9,
            'question' => 'My history class _ at 15.00.',
            'question_uk' => 'Мій урок історії закінчується о 15.00.',
            'question_ru' => 'Мой урок истории заканчивается в 15.00.',
            'correct_answer' => 'lets out',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 9,
            'question' => 'She _ a bookshop in Berlin.',
            'question_uk' => 'Вона відкрила книжковий магазин у Берліні.',
            'question_ru' => 'Она открыла книжный магазин в Берлине.',
            'correct_answer' => 'set up',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 9,
            'question' => 'She spends her evening _ textbooks.',
            'question_uk' => 'Вона проводить вечори, детально вивчаючи підручники.',
            'question_ru' => 'Она проводит вечера, детально изучая учебники.',
            'correct_answer' => 'poring over',
            'created_at' => now(),
        ],
        [
            'course_id' => 1,
            'section_id' => 10,
            'question' => 'He _ the cards _ on the table.',
            'question_uk' => 'Він розкинув картки на столі.',
            'question_ru' => 'Он раскинул карточки на столе.',
            'correct_answer' => 'spread, out',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 10,
            'question' => 'I try to _ English.',
            'question_uk' => 'Я намагаюсь почати займатися англійською.',
            'question_ru' => 'Я стараюсь начать заниматься английским.',
            'correct_answer' => 'get into',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 10,
            'question' => 'This trip is sure to _ an adventure.',
            'question_uk' => 'Ця поїздка неодмінно перетвориться на пригоду.',
            'question_ru' => 'Эта поездка непременно превратится в приключение.',
            'correct_answer' => 'turn into',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 10,
            'question' => 'He _ like a smart guy.',
            'question_uk' => 'Він справляє враження розумного хлопця.',
            'question_ru' => 'Он производит впечатление умного парня.',
            'correct_answer' => 'comes across',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 10,
            'question' => 'You\'ll be late for your flight if you don\'t _.',
            'question_uk' => 'Ви спізнитесь на рейс, якщо не поспішите.',
            'question_ru' => 'Вы опоздаете на рейс, если не поспешите.',
            'correct_answer' => 'hurry up',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 10,
            'question' => 'They have to _ something to feed the baby milk.',
            'question_uk' => 'Їм потрібно придумати щось, щоб нагодувати дитину молоком.',
            'question_ru' => 'Им приходится что-то придумывать, чтобы накормить ребёнка молоком.',
            'correct_answer' => 'come up with',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 10,
            'question' => 'We just need some time to _ these new roles.',
            'question_uk' => 'Нам просто потрібно трохи часу, щоб звикнути до нових ролей.',
            'question_ru' => 'Нам просто нужно какое-то время, чтобы привыкнуть к этим новым ролям.',
            'correct_answer' => 'settle into',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 10,
            'question' => 'This time I\'ll _ something special.',
            'question_uk' => 'Цього разу я придумаю щось особливе.',
            'question_ru' => 'На этот раз я придумаю что-то особенное.',
            'correct_answer' => 'think up',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 10,
            'question' => 'No one should have to _ that kind of thing alone.',
            'question_uk' => 'Ніхто не повинен переживати таке в одиночку.',
            'question_ru' => 'Никто не должен переживать такое в одиночку.',
            'correct_answer' => 'go through',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 10,
            'question' => 'He walks too fast and it\'s really hard to _ with him.',
            'question_uk' => 'Він іде занадто швидко, і справді важко встигати за ним.',
            'question_ru' => 'Он ходит слишком быстро, действительно сложно успевать за ним.',
            'correct_answer' => 'keep up',
            'created_at' => now(),
        ],
        [
            'course_id' => 1,
            'section_id' => 11,
            'question' => 'The quality will only get better and the prices will _.',
            'question_uk' => 'Якість тільки покращиться, а ціни знизяться.',
            'question_ru' => 'Качество от этого будет только улучшаться, а цены – снижаться.',
            'correct_answer' => 'come down',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 11,
            'question' => 'There is still a risk that the whole deal will _.',
            'question_uk' => 'Є ще ризик, що вся угода провалиться.',
            'question_ru' => 'Существует риск, что всё соглашение провалится.',
            'correct_answer' => 'fall through',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 11,
            'question' => 'I think I have friends that could _.',
            'question_uk' => 'Я думаю, що у мене є друзі, які можуть допомогти.',
            'question_ru' => 'Я думаю, что у меня есть друзья, которые смогут помочь.',
            'correct_answer' => 'help out',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 11,
            'question' => 'You don\'t have to _ the whole engine.',
            'question_uk' => 'Тобі не потрібно розбирати весь двигун.',
            'question_ru' => 'Тебе не нужно разбирать весь двигатель.',
            'correct_answer' => 'take apart',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 11,
            'question' => '_ as much information as possible.',
            'question_uk' => 'Заповнюйте якомога більше інформації.',
            'question_ru' => 'Заполняйте как можно больше информации.',
            'correct_answer' => 'fill in',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 11,
            'question' => 'All I need is a bed, in the event I get a chance to _ early.',
            'question_uk' => 'Все, що мені потрібно, це ліжко, якщо я отримаю можливість раніше закінчити роботу.',
            'question_ru' => 'Всё, что мне нужно, – это кровать, если хоть раз будет шанс рано закончить работу.',
            'correct_answer' => 'knock off',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 11,
            'question' => 'I want to _ all our relatives.',
            'question_uk' => 'Я хочу зібрати всіх наших родичів.',
            'question_ru' => 'Я хочу собрать всех наших родственников.',
            'correct_answer' => 'round up',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 11,
            'question' => 'In a week, dad will _ a new position.',
            'question_uk' => 'Через тиждень тато вступить на нову посаду.',
            'question_ru' => 'Через неделю папа вступит на новую должность.',
            'correct_answer' => 'get in',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 11,
            'question' => 'Otherwise, you\'ll find that the number of your subscribers will _ pretty quickly.',
            'question_uk' => 'Інакше ви побачите, що кількість ваших підписників швидко впаде.',
            'question_ru' => 'В противном случае количество подписчиков будет стремительно падать.',
            'correct_answer' => 'fall off',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 11,
            'question' => 'You need to _ all these documents.',
            'question_uk' => 'Вам потрібно відправити всі ці документи.',
            'question_ru' => 'Вам нужно отправить все эти документы.',
            'correct_answer' => 'send off',
            'created_at' => now(),
        ],
        [
            'course_id' => 1,
            'section_id' => 12,
            'question' => 'We\'ll play bridge and let the major _ the law.',
            'question_uk' => 'Ми зіграємо в бридж і дозволимо майору встановлювати правила.',
            'question_ru' => 'Мы сыграем в бридж и позволим майору устанавливать правила.',
            'correct_answer' => 'lay down',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 12,
            'question' => 'I always thought that I\'d _ winning a championship title somewhere eventually.',
            'question_uk' => 'Я завжди знала, що зрештою виграю чемпіонський титул десь.',
            'question_ru' => 'Я всегда знала, что в конечном итоге выиграю чемпионский титул где-нибудь.',
            'correct_answer' => 'end up',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 12,
            'question' => 'Don\'t worry about anything - you\'ll _ it all _.',
            'question_uk' => 'Не переживай ни о чём - ты всё уладишь.',
            'question_ru' => 'Ни про что не переживай, в конце концов ты всё решишь.',
            'correct_answer' => 'work, out',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 12,
            'question' => 'You are able to _ people and situations quickly and accurately.',
            'question_uk' => 'Ви здатні швидко та точно оцінювати людей і ситуації.',
            'question_ru' => 'Вы способны достаточно быстро и точно оценивать людей и ситуации.',
            'correct_answer' => 'size up',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 12,
            'question' => 'This helps to _ the workforce to work on more important tasks.',
            'question_uk' => 'Це дозволяє звільнити трудові ресурси для виконання більш важливих завдань.',
            'question_ru' => 'Это позволит высвободить трудовые ресурсы для выполнения более важных задач.',
            'correct_answer' => 'free up',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 12,
            'question' => 'How long do you think you can _ surgery?',
            'question_uk' => 'Як довго ти думаєш, що зможеш відкласти операцію?',
            'question_ru' => 'Как долго ты думаешь откладывать операцию?',
            'correct_answer' => 'hold off',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 12,
            'question' => 'I will _ the reform.',
            'question_uk' => 'Я буду виступати за реформу.',
            'question_ru' => 'Я буду выступать за реформу.',
            'correct_answer' => 'stand for',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 12,
            'question' => 'David, you have to _ the possibility of coincidence.',
            'question_uk' => 'Девіде, ти повинен врахувати можливість збігу.',
            'question_ru' => 'Дэвид, ты должен учесть возможность совпадения.',
            'correct_answer' => 'allow for',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 12,
            'question' => 'The numbers between the two documents should _.',
            'question_uk' => 'Інформація між двома документами має збігатися.',
            'question_ru' => 'Информация из двух этих документов должна совпадать.',
            'correct_answer' => 'match up',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 12,
            'question' => '_ a dozen oranges for me.',
            'question_uk' => 'Вибери для мене дюжину апельсин.',
            'question_ru' => 'Отберите для меня дюжину апельсин.',
            'correct_answer' => 'pick out',
            'created_at' => now(),
        ],
        [
            'course_id' => 1,
            'section_id' => 13,
            'question' => 'Do not try to _ all the text.',
            'question_uk' => 'Не намагайтеся втиснути весь текст.',
            'question_ru' => 'Не старайтесь втиснуть в текст всё.',
            'correct_answer' => 'cram in',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 13,
            'question' => 'We just start to sort of _ in circles.',
            'question_uk' => 'Ми просто почали бродити по колу.',
            'question_ru' => 'Мы решили просто бродить по улочкам без всяких путеводителей.',
            'correct_answer' => 'mill about',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 13,
            'question' => 'This is the only way to _ positive change and growth',
            'question_uk' => 'Це єдиний спосіб прийти до позитивних змін і зростання.',
            'question_ru' => 'Это единственный способ прийти к положительным изменениям и росту.',
            'correct_answer' => 'bring about',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 13,
            'question' => 'The rain never _ all night.',
            'question_uk' => 'Дощ не припинявся всю ніч.',
            'question_ru' => 'Дождь не прекращался всю ночь.',
            'correct_answer' => 'let up',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 13,
            'question' => 'I\'ll _ heaters and filters next year.',
            'question_uk' => 'Наступного року я хочу встановити обігрівачі та фільтри.',
            'question_ru' => 'В следующем году я хочу установить обогреватели и фильтры.',
            'correct_answer' => 'put in',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 13,
            'question' => 'I have to go back to the hotel and _ before the flight.',
            'question_uk' => 'Мені потрібно повернутися в готель і освіжитися перед вильотом.',
            'question_ru' => 'Мне нужно вернуться в отель и освежиться перед вылетом.',
            'correct_answer' => 'freshen up',
            'created_at' => now(),
        ],
        [
            'course_id' => 1,
            'section_id' => 14,
            'question' => 'I hate to _ business at lunch.',
            'question_uk' => 'Я ненавиджу говорити про бізнес під час обіду.',
            'question_ru' => 'Я ненавижу говорить про бизнес во время обеда.',
            'correct_answer' => 'bring up',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 14,
            'question' => 'Don\'t _ on the opportunity to get better each day.',
            'question_uk' => 'Старайся не упустити можливість ставати краще кожен день.',
            'question_ru' => 'Старайтесь не упускать возможность становиться лучше день за днем.',
            'correct_answer' => 'miss out',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 14,
            'question' => 'I\'m trying to _ a regimen.',
            'question_uk' => 'Я намагаюся дотримуватися режиму.',
            'question_ru' => 'Я стараюсь придерживаться режима.',
            'correct_answer' => 'keep to',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 14,
            'question' => 'The remittances _ our economy.',
            'question_uk' => 'Грошові перекази підтримують нашу економіку.',
            'question_ru' => 'Денежные переводы поддерживают нашу экономику.',
            'correct_answer' => 'buoy up',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 14,
            'question' => 'He planned to _ two million fries a month.',
            'question_uk' => 'Він планував випускати 2 мільйони картоплі фрі на місяць.',
            'question_ru' => 'Он планировал выпускать 2 миллиона картошки фри в месяц.',
            'correct_answer' => 'turn out',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 14,
            'question' => 'I don\'t think there\'s reason to _ anymore.',
            'question_uk' => 'Більше не бачу причин оглядатися назад.',
            'question_ru' => 'Больше не вижу причин оглядываться назад.',
            'correct_answer' => 'look back',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 14,
            'question' => 'We have to _ all expenses.',
            'question_uk' => 'Ми повинні врахувати всі витрати.',
            'question_ru' => 'Мы должны учитывать все расходы.',
            'correct_answer' => 'provide for',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 14,
            'question' => 'How long will fear _?',
            'question_uk' => 'До яких пір страх буде перемагати?',
            'question_ru' => 'До каких пор страх будет побеждать?',
            'correct_answer' => 'win out',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 14,
            'question' => 'We need someone who will _ something.',
            'question_uk' => 'Нам потрібен хтось, хто дійсно буде щось представляти.',
            'question_ru' => 'Нам нужен тот, кто действительно будет что-то из себя представлять.',
            'correct_answer' => 'stand for',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 14,
            'question' => 'These costs seem to only _.',
            'question_uk' => 'Здається, що ці витрати будуть лише зростати.',
            'question_ru' => 'Судя по всему, эти расходы будут лишь увеличиваться.',
            'correct_answer' => 'go up',
            'created_at' => now(),
        ],
        [
            'course_id' => 1,
            'section_id' => 15,
            'question' => 'It usually takes all night to _ the nine batteries.',
            'question_uk' => 'Зазвичай це займає всю ніч, щоб зарядити 9 батарей.',
            'question_ru' => 'Обычно занимает всю ночь, чтобы зарядить 9 батарей.',
            'correct_answer' => 'charge up',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 15,
            'question' => 'How can you _ exactly four liters of water?',
            'question_uk' => 'Як можна відміряти точно 4 літри води?',
            'question_ru' => 'Как можно отмерить точно 4 литра воды?',
            'correct_answer' => 'measure out',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 15,
            'question' => 'You can _ the tablet _ the wall there.',
            'question_uk' => 'Ти можеш підключити планшет там.',
            'question_ru' => 'Ты можешь подключить планшет там.',
            'correct_answer' => 'plug, into',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 15,
            'question' => 'To access the private area of this site, please _.',
            'question_uk' => 'Для доступу до закритого розділу сайту, будь ласка, авторизуйтеся.',
            'question_ru' => 'Для доступа к закрытому разделу сайта вам необходимо авторизоваться.',
            'correct_answer' => 'log in',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 15,
            'question' => 'Don\'t forget to _ when you\'ve finished.',
            'question_uk' => 'Не забудь вийти з системи, коли закінчиш.',
            'question_ru' => 'Не забудь выйти из системы когда закончишь.',
            'correct_answer' => 'log off',
            'created_at' => now(),
        ],
        [
            'course_id' => 1,
            'section_id' => 16,
            'question' => 'She had to _ her _.',
            'question_uk' => 'Їй довелося перенести свою відпустку.',
            'question_ru' => 'Ей пришлось перенести свой отпуск.',
            'correct_answer' => 'bring, forward',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 16,
            'question' => 'Many of our exhibits _ to the 19th century.',
            'question_uk' => 'Багато наших експонатів датуються XIX століттям.',
            'question_ru' => 'Большинство наших экспонатов дотируются XIX ст.',
            'correct_answer' => 'date back',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 16,
            'question' => 'We used to _ together when we were young.',
            'question_uk' => 'Ми раніше проводили час разом, коли були молоді.',
            'question_ru' => 'Мы раньше проводили время вместе, когда были молоды.',
            'correct_answer' => 'knock about',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 16,
            'question' => 'The process of finding buyers could _ for months.',
            'question_uk' => 'Процес пошуку покупців може затягтися на місяці.',
            'question_ru' => 'Процесс поиска покупателей может затянуться на месяцы.',
            'correct_answer' => 'drag on',
            'created_at' => now(),
        ],
        [
            'course_id' => 1,
            'section_id' => 17,
            'question' => 'We could _ our wallet.',
            'question_uk' => 'Ми могли б опустошити гаманець.',
            'question_ru' => 'Мы могли бы опустошить бумажник.',
            'correct_answer' => 'empty out',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 17,
            'question' => 'My parents had to _ me _ last week.',
            'question_uk' => 'Мої батьки змушені були допомогти мені з грошима на минулому тижні.',
            'question_ru' => 'Моим родителям пришлось помочь мне с деньгами на прошлой неделе.',
            'correct_answer' => 'bail, out',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 17,
            'question' => 'Let\'s _ how to become a billionaire.',
            'question_uk' => 'Давайте спробуємо розібратися, як стати мільярдером.',
            'question_ru' => 'Давайте попробуем разобраться как стать миллиардером.',
            'correct_answer' => 'puzzle out',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 17,
            'question' => 'She began to _ the bills.',
            'question_uk' => 'Вона почала відраховувати купюри.',
            'question_ru' => 'Она начала отсчитывать купюры.',
            'correct_answer' => 'count out',
            'created_at' => now(),
        ],
        [
            'course_id' => 1,
            'section_id' => 18,
            'question' => 'I could never _ my kid like that.',
            'question_uk' => 'Я б ніколи не сварив свою дитину так.',
            'question_ru' => 'Я бы никогда не ругал так своих детей.',
            'correct_answer' => 'bawl out',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 18,
            'question' => 'Make sure you don\'t _ in your bills.',
            'question_uk' => 'Переконайтеся, що ви не просрочите оплату рахунків.',
            'question_ru' => 'Убедитесь, что вы не просрочили оплату счетов.',
            'correct_answer' => 'get behind',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 18,
            'question' => 'You shouldn\'t _ those who are less fortunate than you are.',
            'question_uk' => 'Ти не повинен дивитися з висоти на тих, кому пощастило менше, ніж тобі.',
            'question_ru' => 'Ты не должен смотреть свысока на тех, кому повезло меньше, чем тебе.',
            'correct_answer' => 'look down on',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 18,
            'question' => 'I think you should _.',
            'question_uk' => 'Я думаю, що тобі слід замовкнути.',
            'question_ru' => 'Я думаю, тебе следует закрыть рот.',
            'correct_answer' => 'shut up',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 18,
            'question' => 'Don\'t worry - everything will _ in the end.',
            'question_uk' => 'Не хвилюйся - в кінці кінців все вирішиться.',
            'question_ru' => 'Не волнуйся, в конце концов всё уладится.',
            'correct_answer' => 'work out',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 18,
            'question' => 'My husband thinks I can _ without a housekeeper.',
            'question_uk' => 'Мій чоловік вважає, що я впораюся без прибиральниці.',
            'question_ru' => 'Мой муж считает, что я справлюсь без помощницы по дому.',
            'correct_answer' => 'get by',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 18,
            'question' => 'It’s obvious that it\'s very difficult to _ with her.',
            'question_uk' => 'Очевидно, що з нею дуже важко сперечатися.',
            'question_ru' => 'Очевидно, её очень тяжело переубедить.',
            'correct_answer' => 'reason with',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 18,
            'question' => 'Don\'t _ anything new!',
            'question_uk' => 'Не будемо впроваджувати нічого нового!',
            'question_ru' => 'Не будем внедрять ничего нового!',
            'correct_answer' => 'bring in',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 18,
            'question' => 'But the facts will _ at some point.',
            'question_uk' => 'Але факти вийдуть на поверхню в будь-який момент.',
            'question_ru' => 'Однако факты появятся в любой момент.',
            'correct_answer' => 'come out',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 18,
            'question' => 'After one month, the workers had to _.',
            'question_uk' => 'Через місяць робітники змушені були поступитися.',
            'question_ru' => 'Через месяц рабочие вынуждены были уступить.',
            'correct_answer' => 'give in',
            'created_at' => now(),
        ],
        [
            'course_id' => 1,
            'section_id' => 19,
            'question' => 'Don\'t you dare _ me _!',
            'question_uk' => 'Не смій мені грубити.',
            'question_ru' => 'Не смей мне грубить.',
            'correct_answer' => 'answer, back',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 19,
            'question' => 'You can\t _ your whole life.',
            'question_uk' => 'Ти не можеш тікати все життя.',
            'question_ru' => 'Ты не можешь убегать всю жизнь.',
            'correct_answer' => 'run away',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 19,
            'question' => 'Hopefully this will _ the lack of communication.',
            'question_uk' => 'Сподіваюся, це компенсує нестачу спілкування.',
            'question_ru' => 'Надеюсь, это  компенсирует недостаток общения.',
            'correct_answer' => 'make up for',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 19,
            'question' => 'In that time It\'s possible another war could _. ',
            'question_uk' => 'За цей час може розпочатись ще одна війна.',
            'question_ru' => 'За это время может начаться ещё одна война.',
            'correct_answer' => 'break out',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 19,
            'question' => 'I had to _ threats to get my money.',
            'question_uk' => 'Мені довелося вдатися до погроз, щоби отримати гроші.',
            'question_ru' => 'Мне пришлось прибегнуть к угрозам, чтоб получить деньги.',
            'correct_answer' => 'resort to',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 19,
            'question' => 'Could you please _? ',
            'question_uk' => 'Чи не могли б ви зупинити машину?',
            'question_ru' => 'Не могли бы вы остановить машину?',
            'correct_answer' => 'pull over',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 19,
            'question' => 'We should _ everyone of them.',
            'question_uk' => 'Ми повинні знищити кожного з них.',
            'question_ru' => 'Мы должны уничтожить каждого из них.',
            'correct_answer' => 'wipe out',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 19,
            'question' => 'Catch him, don\'t let him _.',
            'question_uk' => 'Лови його, не дай йому втекти.',
            'question_ru' => 'Лови его, не дай ему убежать.',
            'correct_answer' => 'get away',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 19,
            'question' => 'I can _ you.',
            'question_uk' => 'Я можу покластися на тебе.',
            'question_ru' => 'Я могу положиться на тебя.',
            'correct_answer' => 'lean on',
            'created_at' => now(),
        ],

        [
            'course_id' => 1,
            'section_id' => 19,
            'question' => 'Police quickly _ the area.',
            'question_uk' => 'Поліція швидко перекрила район.',
            'question_ru' => 'Полиция быстро перекрыла район.',
            'correct_answer' => 'closed off',
            'created_at' => now(),
        ],

    ];
    $chunks = array_chunk($questions, 100); // Adjust chunk size as necessary

    foreach ($chunks as $chunk) {
        DB::table('quiz')->insert($chunk);
    }
  }
}
