<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhraseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to blow out',
      'phrase_uk' => 'гаснути, задувати',
      'phrase_ru' => 'гаснуть , задувать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to brush up (on) sth',
      'phrase_uk' => 'відновити знання, навички',
      'phrase_ru' => 'возобновить знания, навыки',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to care for',
      'phrase_uk' => 'любити, подобатися',
      'phrase_ru' => 'любить, нравиться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to cling on (to sth)',
      'phrase_uk' => 'міцно триматися (за щось)',
      'phrase_ru' => 'крепко держаться (за что-то)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to cool off',
      'phrase_uk' => 'охолоджувати, заспокоюватися',
      'phrase_ru' => 'охлаждать, успокаиваться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to cut back',
      'phrase_uk' => 'скорочувати, зменшувати',
      'phrase_ru' => 'сокращать, уменьшать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to cut out',
      'phrase_uk' => 'вирізати, виключати (з раціону)',
      'phrase_ru' => 'вырезать, исключать (из рациона)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to dress up',
      'phrase_uk' => 'одягатися офіційно (для особливих подій)',
      'phrase_ru' => 'одеваться официально (для особых событий)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to find out',
      'phrase_uk' => 'дізнаватися',
      'phrase_ru' => 'узнавать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to fool around',
      'phrase_uk' => 'бешкетувати, балуватися (з можливістю небажаних наслідків)',
      'phrase_ru' => 'шалить, баловаться (с возможностью нежелательных последствий)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to get off',
      'phrase_uk' => 'виходити з транспорту',
      'phrase_ru' => 'выходить из транспорта',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to get on',
      'phrase_uk' => 'сідати на (автобус, потяг, літак)',
      'phrase_ru' => 'садиться на (автобус, поезд самолет)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to grow out of',
      'phrase_uk' => 'перерости, вирости з, вийти з-під',
      'phrase_ru' => 'перерасти, вырасти из, выйти из-под',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to hang out',
      'phrase_uk' => 'проводити час (зависати)',
      'phrase_ru' => 'проводить время (зависать)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to lie around',
      'phrase_uk' => 'бити байдики; бути непродуктивним, ледачим',
      'phrase_ru' => 'бить баклуши; быть непродуктивным, ленивым',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to lie down',
      'phrase_uk' => 'прилягти (щоб відпочити)',
      'phrase_ru' => 'прилечь (чтобы отдохнуть)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to lighten up',
      'phrase_uk' => 'заспокоюватися, розслаблятися, ставати менш серйозним',
      'phrase_ru' => 'успокаиваться, расслабляться, становиться менее серьезным',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to live up to',
      'phrase_uk' => 'виправдовувати (надії), виконувати',
      'phrase_ru' => 'оправдывать (надежды), выполнять',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to lock up',
      'phrase_uk' => 'закривати всі двері й вікна перед тим як покинути будівлю',
      'phrase_ru' => 'закрывать все двери окна перед тем как покинуть здание',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to look after',
      'phrase_uk' => 'доглядати, піклуватися про когось',
      'phrase_ru' => 'присматривать, заботиться о ком-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to look around',
      'phrase_uk' => 'оглядати (місцевість)',
      'phrase_ru' => 'осматривать (местность)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to move in',
      'phrase_uk' => 'переїжджати, заселятися (в житло)',
      'phrase_ru' => 'переезжать, заселяться (в жилье)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to move out',
      'phrase_uk' => 'виселитися (з житла)',
      'phrase_ru' => 'выселиться (из жилья)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to pass down',
      'phrase_uk' => 'передаватися (перехід від старшого до молодшого)',
      'phrase_ru' => 'передаваться (переходить от старшего к младшему)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to settle down',
      'phrase_uk' => 'остепенитися, завести сім’ю, почати жити стабільним життям, заспокоїтися',
      'phrase_ru' => 'остепениться/завести семью, начать жить стабильной жизнью, успокоиться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to stand around',
      'phrase_uk' => 'стояти, бовтатися, тинятися',
      'phrase_ru' => 'стоять, торчать, слоняться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to stand back',
      'phrase_uk' => 'стояти на відстані, відійти',
      'phrase_ru' => 'стоять на расстоянии, отойти',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to stop over',
      'phrase_uk' => 'зупинитися на ніч (в подорожі)',
      'phrase_ru' => 'остановиться на ночь (в путешествии)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to take away',
      'phrase_uk' => 'забирати, відносити',
      'phrase_ru' => 'забирать, относить',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to try on',
      'phrase_uk' => 'приміряти одяг',
      'phrase_ru' => 'примерять одежду',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to try out',
      'phrase_uk' => 'тестувати, пробувати, перевіряти',
      'phrase_ru' => 'тестировать, пробовать, проверять',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to turn over',
      'phrase_uk' => 'перемикати, перелистувати, перевертати',
      'phrase_ru' => 'переключать, перелистывать, переворачивать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to turn up',
      'phrase_uk' => 'збільшувати (звук, температуру); включити',
      'phrase_ru' => 'увеличивать (звук, температуру); включить',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to wake up',
      'phrase_uk' => 'прокидатися; усвідомлювати',
      'phrase_ru' => 'просыпаться; осознавать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to watch out for',
      'phrase_uk' => 'стежити за; звернути увагу, пильнувати, остерігатися, спостерігати за',
      'phrase_ru' => 'следить за; обратить внимание, присматривать за, остерегаться, наблюдать за',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to zoom in',
      'phrase_uk' => 'наближати, показувати зображення великим планом',
      'phrase_ru' => 'приближать, показывать изображение крупным планом',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to chill out',
      'phrase_uk' => 'розслабитися',
      'phrase_ru' => 'расслабиться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to laze about',
      'phrase_uk' => 'байдикувати',
      'phrase_ru' => 'бездельничать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to move over',
      'phrase_uk' => 'посунутися, посторонитися',
      'phrase_ru' => 'подвинуться, посторониться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to pour down',
      'phrase_uk' => 'йти, лити (про дощ)',
      'phrase_ru' => 'идти, лить (про дождь)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to big sb/sth up',
      'phrase_uk' => 'хвалити, нахвалювати',
      'phrase_ru' => 'хвалить, нахваливать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to break into sth',
      'phrase_uk' => 'почати щось робити (дуже несподівано)',
      'phrase_ru' => 'начать что-то делать (очень неожиданно)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to cheer sb (on) up',
      'phrase_uk' => 'підбадьорювати',
      'phrase_ru' => 'подбадривать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to drink to sb/sth',
      'phrase_uk' => 'випити за когось/щось; сказати тост',
      'phrase_ru' => 'выпить за кого-то/что-то; сказать тост',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to feel up to sb',
      'phrase_uk' => 'бути в ресурсі/настрої (щось робити)',
      'phrase_ru' => 'быть в ресурсе/настроении (что-то делать)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to loosen up',
      'phrase_uk' => 'розслабитися (ментально)',
      'phrase_ru' => 'расслабиться (ментально)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to roll up',
      'phrase_uk' => 'приїхати, «з\'явитися»',
      'phrase_ru' => 'приехать, «заявиться»',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to shoot off',
      'phrase_uk' => 'піти (відчалити)',
      'phrase_ru' => 'уйти (отчалить)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to think sth up',
      'phrase_uk' => 'вигадувати, придумувати',
      'phrase_ru' => 'выдумывать, придумывать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 1,
      'phrase_en' => 'to wash down (sth)',
      'phrase_uk' => 'запивати',
      'phrase_ru' => 'запивать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to back onto',
      'phrase_uk' => 'бути повернутим, стояти спиною до чогось',
      'phrase_ru' => 'быть повернутым, стоять спиной к чему-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to be tucked away',
      'phrase_uk' => 'бути схованим, важкознаходимим',
      'phrase_ru' => 'быть спрятанным, труднонаходимым',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to call in',
      'phrase_uk' => 'викликати (майстра, робітника і т.д.)',
      'phrase_ru' => 'вызывать (мастера, рабочего и т.д.)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to live through',
      'phrase_uk' => 'пережити важку/болючу ситуацію',
      'phrase_ru' => 'пережить тяжелую/болезненную ситуацию',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to clean out',
      'phrase_uk' => 'вичищати, розбирати',
      'phrase_ru' => 'вычищать, разбирать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to clean up',
      'phrase_uk' => 'наводити порядок, ретельно прибирати',
      'phrase_ru' => 'наводить порядок, тщательно убирать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to come apart',
      'phrase_uk' => 'розходитись (по швах), розпадатись',
      'phrase_ru' => 'расходиться (по швам), распадаться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to come back',
      'phrase_uk' => 'повернутись, прийти знову',
      'phrase_ru' => 'возвратиться, придти снова',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to come on',
      'phrase_uk' => 'вмикатись; починати працювати (про техніку)',
      'phrase_ru' => 'включаться; начинать работать( о технике)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to do up',
      'phrase_uk' => 'пристібати; зав\'язувати',
      'phrase_ru' => 'пристегивать; завязывать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to do without',
      'phrase_uk' => 'справлятися, обходитися без чогось',
      'phrase_ru' => 'справляться, обходиться без чего-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to fix up',
      'phrase_uk' => 'ремонтувати',
      'phrase_ru' => 'ремонтировать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to go for',
      'phrase_uk' => 'вибирати; прагнути, досягати',
      'phrase_ru' => 'выбирать; стремиться, достигать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to go off',
      'phrase_uk' => 'псуватися; вимикатися',
      'phrase_ru' => 'портиться; выключаться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to go together',
      'phrase_uk' => 'з\'єднуватися; добре виглядати разом',
      'phrase_ru' => 'соединяться; хорошо смотреться вместе',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to go with',
      'phrase_uk' => 'підходити до, приєднатися до, супроводжувати, піти з',
      'phrase_ru' => 'подходить к, присоединиться к, сопровождать, пойти с',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to jot down',
      'phrase_uk' => 'записувати (швидко)',
      'phrase_ru' => 'записывать (быстро)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to let in',
      'phrase_uk' => 'впускати, пропускати',
      'phrase_ru' => 'впускать, пропускать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to line up',
      'phrase_uk' => 'ставити; будувати щось/когось в ряд',
      'phrase_ru' => 'ставить; строить что-то/кого-то в ряд',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to mess up',
      'phrase_uk' => 'створювати безлад, бруднити',
      'phrase_ru' => 'создавать беспорядок, пачкать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to pay for',
      'phrase_uk' => 'платити за щось',
      'phrase_ru' => 'платить за что-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to pay off',
      'phrase_uk' => 'оплачувати борги повністю',
      'phrase_ru' => 'оплачивать долги полностью',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to pick (sb/sth) up',
      'phrase_uk' => 'забирати (когось/щось)',
      'phrase_ru' => 'забирать (кого-то/что-то)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to pile up',
      'phrase_uk' => 'накопичуватися, збиратися',
      'phrase_ru' => 'накапливаться, собираться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to pull up',
      'phrase_uk' => 'піднімати',
      'phrase_ru' => 'поднимать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to put aside',
      'phrase_uk' => 'відкладати, виділяти (час, гроші)',
      'phrase_ru' => 'откладывать, выделять ( время , деньги)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to put away',
      'phrase_uk' => 'класти назад на своє місце',
      'phrase_ru' => 'класть обратно на свое место',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to put out',
      'phrase_uk' => 'гасити, тушити, припиняти горіння',
      'phrase_ru' => 'гасить, тушить, прекращать горение',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to rub in',
      'phrase_uk' => 'втирати (крем)',
      'phrase_ru' => 'втирать (крем)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to see about',
      'phrase_uk' => 'подбати про щось',
      'phrase_ru' => 'позаботиться о чем-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to show off',
      'phrase_uk' => 'акцентувати, підкреслювати',
      'phrase_ru' => 'акцентировать, подчеркивать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to throw away',
      'phrase_uk' => 'викидати',
      'phrase_ru' => 'выбрасывать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to turn down',
      'phrase_uk' => 'зменшувати (звук, температуру)',
      'phrase_ru' => 'уменьшать (звук, температуру)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to use up',
      'phrase_uk' => 'витрачати, використовувати',
      'phrase_ru' => 'тратить, использовать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to warm up',
      'phrase_uk' => 'розігрівати готову їжу',
      'phrase_ru' => 'разогревать готовую пищу',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to zip up',
      'phrase_uk' => 'застібати блискавку',
      'phrase_ru' => 'застегивать молнию',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to boil over',
      'phrase_uk' => 'перекипіти «втекти»',
      'phrase_ru' => 'перекипеть «сбежать»',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to chop down',
      'phrase_uk' => 'зрубати дерево',
      'phrase_ru' => 'срубить дерево',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to join in',
      'phrase_uk' => 'приєднатися',
      'phrase_ru' => 'присоединиться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to live off',
      'phrase_uk' => 'жити на, жити за рахунок',
      'phrase_ru' => 'жить на, жить за счет',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to look for',
      'phrase_uk' => 'шукати',
      'phrase_ru' => 'искать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to mess around',
      'phrase_uk' => 'возитися, валяти дурня',
      'phrase_ru' => 'возиться, валять дурака',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to name sb/sth after sb/sth',
      'phrase_uk' => 'називати когось на честь когось',
      'phrase_ru' => 'называть кого-то в честь кого-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to pour out sth',
      'phrase_uk' => 'розливати (напої)',
      'phrase_ru' => 'разливать (напитки)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to reach out',
      'phrase_uk' => 'підтягутися за чимось',
      'phrase_ru' => 'подтянуться за чем-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to add up to sb',
      'phrase_uk' => 'зводитися до',
      'phrase_ru' => 'сводиться к',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to brush sth off',
      'phrase_uk' => 'очищати щось',
      'phrase_ru' => 'отчищать что-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to call (in) on sb',
      'phrase_uk' => 'відвідати, навідатися (по дорозі кудись)',
      'phrase_ru' => 'посетить, наведаться (дорогой куда-то)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to clutter sth up',
      'phrase_uk' => 'захаращувати, засмічувати',
      'phrase_ru' => 'загромождать, засорять',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to curl up',
      'phrase_uk' => 'скрутитися в клубок',
      'phrase_ru' => 'скрутиться в клубок',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to dig out',
      'phrase_uk' => 'знаходити, «відкопувати» (інформацію, речі)',
      'phrase_ru' => 'находить, «откапывать» (информацию, вещи)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to double up',
      'phrase_uk' => 'ділити (з кимось/чимось)',
      'phrase_ru' => 'делить (с кем-то/что-то)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to drop by',
      'phrase_uk' => 'заїхати (ненадовго і без попередження)',
      'phrase_ru' => 'заехать (ненадолго и без предупреждения)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to drown out',
      'phrase_uk' => 'заглушити, перекричати',
      'phrase_ru' => 'заглушить , перекричать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to fend for oneself',
      'phrase_uk' => 'подбати про себе, постояти за себе',
      'phrase_ru' => 'позаботься о себе, постоять за себя',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to fold/do up',
      'phrase_uk' => 'складати',
      'phrase_ru' => 'складывать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to give back',
      'phrase_uk' => 'повернути (комусь/щось)',
      'phrase_ru' => 'вернуть (кому-то/что-то)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to go around',
      'phrase_uk' => 'вистачати чогось для всіх (наприклад: вистачає стаканів на всіх)',
      'phrase_ru' => 'хватать чего-то для всех (например: хватает стаканов на всех)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to gobble down / to wolf down',
      'phrase_uk' => 'пожирати, швидко їсти; заглотити, ковтати',
      'phrase_ru' => 'пожирать, быстро есть; заглотить, проглотить',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to head for',
      'phrase_uk' => 'слідувати, рухатись до',
      'phrase_ru' => 'следовать, двигаться к',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to hoard away',
      'phrase_uk' => 'накопичувати, запасатись; відкладати (на потім)',
      'phrase_ru' => 'накапливать, запасаться; откладывать (на потом)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to keep up with sth',
      'phrase_uk' => 'бути в курсі («йти в ногу з»)',
      'phrase_ru' => 'быть в курсе («идти в ногу с»)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to lock up',
      'phrase_uk' => 'закрити всі двері і вікна перед тим як залишити будівлю',
      'phrase_ru' => 'закрыть все двери и окна перед тем как покинуть здание',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to nod off',
      'phrase_uk' => 'засипати («відключатись»)',
      'phrase_ru' => 'засыпать («отключаться»)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to roll about/around',
      'phrase_uk' => 'дуже сильно сміятись, падати від сміху',
      'phrase_ru' => 'очень сильно смеяться, падать от смеха',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to run around',
      'phrase_uk' => 'бути дуже зайнятим, бігати по справах',
      'phrase_ru' => 'быть очень занятым, бегать по делам',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to seize up',
      'phrase_uk' => 'перестати функціонувати/працювати',
      'phrase_ru' => 'перестать функционировать/работать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to spill over',
      'phrase_uk' => 'проливати, розливати(сь)',
      'phrase_ru' => 'проливать, разливать(ся)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to throw out',
      'phrase_uk' => 'зігрівати(сь)',
      'phrase_ru' => 'согревать(ся)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 2,
      'phrase_en' => 'to turn into',
      'phrase_uk' => 'змінюватися, перевтілюватися, розвиватися',
      'phrase_ru' => 'измениться, перевоплощаться, развиваться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to ask for',
      'phrase_uk' => 'просити',
      'phrase_ru' => 'просить',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to ask out',
      'phrase_uk' => 'запрошувати на зустріч/побачення',
      'phrase_ru' => 'приглашать на встречу/свидание',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to ask over',
      'phrase_uk' => 'запрошувати',
      'phrase_ru' => 'приглашать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to break in',
      'phrase_uk' => 'перебивати, втручатися в розмову',
      'phrase_ru' => 'перебивать, вмешиваться в разговор',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to bring around/round',
      'phrase_uk' => 'переконувати, вмовляти',
      'phrase_ru' => 'убеждать, уговаривать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to clear up',
      'phrase_uk' => 'пояснити (детально), прояснюватись (про погоду)',
      'phrase_ru' => 'прояснить (объяснить более детально), проясняться (о погоде)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to come out with',
      'phrase_uk' => 'висловлюватися, виступати (з заявами)',
      'phrase_ru' => 'высказываться , выступать (с заявлениями)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to face up to',
      'phrase_uk' => 'приймати неприємний факт, змиритися',
      'phrase_ru' => 'принимать неприятный факт, смириться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to fall for',
      'phrase_uk' => 'піддаватись брехні',
      'phrase_ru' => 'поддаваться лжи (вестись на ложь)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to get at',
      'phrase_uk' => 'критикувати (докучати)',
      'phrase_ru' => 'критиковать (доставать)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to get away from',
      'phrase_uk' => 'відходити від теми дискусії',
      'phrase_ru' => 'отходить от темы дискуссии',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to get around',
      'phrase_uk' => 'поширюватись (про інформацію)',
      'phrase_ru' => 'распространяться (об информации)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to get through to',
      'phrase_uk' => 'додзвонитися, достукатися до когось',
      'phrase_ru' => 'дозвониться, достучаться до кого-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to give away',
      'phrase_uk' => 'проговоритися, розкрити секрет',
      'phrase_ru' => 'проговориться, раскрыть секрет',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to give sb away',
      'phrase_uk' => 'видавати, розкривати',
      'phrase_ru' => 'выдавать, раскрывать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to go along with',
      'phrase_uk' => 'погоджуватися з',
      'phrase_ru' => 'соглашаться с',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to go into',
      'phrase_uk' => 'детально обговорювати, вдаватись у подробиці',
      'phrase_ru' => 'детально обсуждать, вдаваться в подробности',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to go on',
      'phrase_uk' => 'відбуватися, продовжувати',
      'phrase_ru' => 'происходить, продолжать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to hang up',
      'phrase_uk' => 'закінчувати телефонну розмову (кладати трубку)',
      'phrase_ru' => 'заканчивать телефонный разговор (ложить трубку)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to have sb on',
      'phrase_uk' => 'говорити неправду, щоб пожартувати над кимось; розігрувати',
      'phrase_ru' => 'говорить неправду, чтоб пошутить над кем-то; разыгрывать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to hear from',
      'phrase_uk' => 'отримувати звістку; чути про когось',
      'phrase_ru' => 'получать известие; слышать о ком-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to keep off',
      'phrase_uk' => 'уникати якоїсь теми, не говорити, триматися осторонь',
      'phrase_ru' => 'избегать какой-то темы, не говорить, держаться в дали',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to let on',
      'phrase_uk' => 'розповідати, ділитися секретом',
      'phrase_ru' => 'рассказывать, делиться секретом',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to mix with',
      'phrase_uk' => 'спілкуватися, знаходити спільну мову',
      'phrase_ru' => 'общаться, находить общий язык',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to open up',
      'phrase_uk' => 'відверто говорити, розкриватися',
      'phrase_ru' => 'откровенно говорить, раскрываться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to point out',
      'phrase_uk' => 'повідомляти, робити акцент',
      'phrase_ru' => 'сообщать, делать ударение',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to put across',
      'phrase_uk' => 'роз’яснити, зрозуміло викладати; гучно заявити',
      'phrase_ru' => 'разъяснить, понятно излагать; громко заявить',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to put through',
      'phrase_uk' => 'з’єднувати (по телефону)',
      'phrase_ru' => 'соединять (по телефону)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to speak up',
      'phrase_uk' => 'говорити голосніше, виступати, висловлюватись',
      'phrase_ru' => 'говорить громче, выступать, высказываться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to take down',
      'phrase_uk' => 'записувати; видаляти',
      'phrase_ru' => 'записывать; удалить',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to take over',
      'phrase_uk' => 'обговорювати, поговорити про',
      'phrase_ru' => 'обсуждать, поговорить о',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to wrap up',
      'phrase_uk' => 'обгорнути, закутувати',
      'phrase_ru' => 'обворачивать, укутывать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to write up',
      'phrase_uk' => 'довести до кінця, закінчувати',
      'phrase_ru' => 'доводить до конца, заканчивать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to yack on',
      'phrase_uk' => 'балакати; набридати балаканиною',
      'phrase_ru' => 'болтать; надоедать болтовней',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to be getting at sth',
      'phrase_uk' => 'натякати, схиляти до чогось',
      'phrase_ru' => 'намекать, клонить к чему-либо',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to brush aside',
      'phrase_uk' => 'ігнорувати, не брати до уваги',
      'phrase_ru' => 'игнорировать, не брать во внимание',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to bubble over',
      'phrase_uk' => 'бути переповненим (емоціями)',
      'phrase_ru' => 'быть переполненным (эмоциями)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to buy into sth',
      'phrase_uk' => 'вірити, вестися на щось',
      'phrase_ru' => 'верить, вестись на что-либо',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to call around',
      'phrase_uk' => 'обдзвонювати',
      'phrase_ru' => 'обзвонить',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to depend on/upon sth,sb',
      'phrase_uk' => 'покладатися на, розраховувати на',
      'phrase_ru' => 'полагаться на, рассчитывать на',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to drop around/round',
      'phrase_uk' => 'приносити, повертати',
      'phrase_ru' => 'приносить, вернуть',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to dry up',
      'phrase_uk' => 'заткнутися, замовкнути',
      'phrase_ru' => 'заткнуться, замолчать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to enter into',
      'phrase_uk' => 'вступати, входити',
      'phrase_ru' => 'вступать, входить',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to leave aside',
      'phrase_uk' => 'відкладати',
      'phrase_ru' => 'откладывать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to order sb about/around',
      'phrase_uk' => 'командувати, керувати',
      'phrase_ru' => 'командовать, руководить',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to pass on sth',
      'phrase_uk' => 'передавати',
      'phrase_ru' => 'передавать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to blurt sth out',
      'phrase_uk' => 'розбалакати (без роздумів швидко)',
      'phrase_ru' => 'разболтать (без раздумий быстро)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to bombard sb with sth',
      'phrase_uk' => 'завалити/ засипати когось інформацією',
      'phrase_ru' => 'завалить/ засыпать кого-то информацией',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to direct sth at sb',
      'phrase_uk' => 'спрямувати щось на когось',
      'phrase_ru' => 'направлять что-то на кого-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to chatter away',
      'phrase_uk' => 'балакати (без зупинки)',
      'phrase_ru' => 'болтать (без остановки)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to clam up',
      'phrase_uk' => 'замовкнути (через скромність)',
      'phrase_ru' => 'замолчать (из-за скромности)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to drag out of',
      'phrase_uk' => 'витягувати інформацію з когось',
      'phrase_ru' => 'вытягивать информацию с кого-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to drone on',
      'phrase_uk' => 'бурмотіти без зупинки',
      'phrase_ru' => 'бубнить без остановки',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to engage in sth',
      'phrase_uk' => 'брати участь у чомусь',
      'phrase_ru' => 'принимать участие в чем-либо',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to expand on sth',
      'phrase_uk' => 'деталізувати, розвивати тему',
      'phrase_ru' => 'детализировать, развивать тему',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to gloss over sth',
      'phrase_uk' => 'загладжувати (щось)',
      'phrase_ru' => 'заглаживать (что-либо)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to go on at sb',
      'phrase_uk' => 'критикувати «наїжджати» на когось',
      'phrase_ru' => 'критиковать «наезжать» на кого-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to lead into',
      'phrase_uk' => 'призводити до чогось',
      'phrase_ru' => 'привести к чему-либо',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to reel sth off',
      'phrase_uk' => '«щебетати» швидко щось говорити',
      'phrase_ru' => '«щебетать» быстро что-то говорить',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to run through sth',
      'phrase_uk' => 'пояснювати (швидко і поверхнево)',
      'phrase_ru' => 'объяснять (быстро и поверхностно)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 3,
      'phrase_en' => 'to strike up',
      'phrase_uk' => 'починати розмову/дружбу',
      'phrase_ru' => 'начинать разговор/дружбу',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to bring along',
      'phrase_uk' => 'розвивати, допомагати, ставати кращим',
      'phrase_ru' => 'развивать, помогать, становиться лучше',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to bring up someone',
      'phrase_uk' => 'виховувати дитину',
      'phrase_ru' => 'воспитывать ребенка',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to call back',
      'phrase_uk' => 'передзвонювати',
      'phrase_ru' => 'перезванивать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to call for sb',
      'phrase_uk' => 'заходити/заїжджати за кимось',
      'phrase_ru' => 'заходить/заезжать за кем-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to catch up (on)',
      'phrase_uk' => 'надолужувати справи, бути в курсі',
      'phrase_ru' => 'наверстывать дела, быть в курсе',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to clear out',
      'phrase_uk' => 'виїжджати, покидати місце',
      'phrase_ru' => 'выезжать, покидать место',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to come about',
      'phrase_uk' => 'відбуватися, траплятися',
      'phrase_ru' => 'происходить, случаться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to come along',
      'phrase_uk' => 'піти з кимось; приєднатися',
      'phrase_ru' => 'пойти с кем-то; присоединиться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to come up against',
      'phrase_uk' => 'стикатися з (проблемами)',
      'phrase_ru' => 'сталкиваться с (проблемами)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to deal with',
      'phrase_uk' => 'мати справу з кимось/чимось',
      'phrase_ru' => 'иметь дело с кем-то/чем-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to do sb out of sth',
      'phrase_uk' => 'позбавлятися від чогось; заважати зробити щось (шляхом обману)',
      'phrase_ru' => 'избавиться от чего-то; помешать сделать что-то (путем обмана)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to drop in',
      'phrase_uk' => 'заходити до когось без домовленості',
      'phrase_ru' => 'заходить к кому-то без договоренности',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to fit in',
      'phrase_uk' => 'вписуватися; відчувати належність до компанії',
      'phrase_ru' => 'вписываться; ощущать принадлежность к компании',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to fizzle out',
      'phrase_uk' => 'зійти нанівець',
      'phrase_ru' => 'сходить на нет',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to get along',
      'phrase_uk' => 'ладити, бути у хороших відносинах',
      'phrase_ru' => 'ладить, быть в хороших отношениях',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to get on with',
      'phrase_uk' => 'ладити з кимось',
      'phrase_ru' => 'ладить с кем-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to get together',
      'phrase_uk' => 'збиратися зустрічатися з кимось',
      'phrase_ru' => 'собираться встречаться с кем-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to hang around',
      'phrase_uk' => 'збиратися, крутитися біля чогось',
      'phrase_ru' => 'собираться, крутиться возле чего-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to invite in',
      'phrase_uk' => 'запрошувати (в гості, додому)',
      'phrase_ru' => 'приглашать (в гости, дом)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to let down sb',
      'phrase_uk' => 'розчаровувати, підводити когось',
      'phrase_ru' => 'разочаровывать, подводить кого-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to make of',
      'phrase_uk' => 'мати думку',
      'phrase_ru' => 'иметь мнение',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to make up',
      'phrase_uk' => 'миритися; переставати сердитися',
      'phrase_ru' => 'мириться; переставать злиться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to make up to sb',
      'phrase_uk' => 'підлизуватися, бути хорошим з метою щось отримати',
      'phrase_ru' => 'подмазываться, быть хорошим с целью что-то получить',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to mix up',
      'phrase_uk' => 'плутати',
      'phrase_ru' => 'путать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to pay back',
      'phrase_uk' => 'повертати борг',
      'phrase_ru' => 'возвращать долг',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to pick on',
      'phrase_uk' => 'насміхатися, дражнити',
      'phrase_ru' => 'насмехаться, дразнить',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to put off',
      'phrase_uk' => 'відкладати на потім; відштовхувати',
      'phrase_ru' => 'откладывать на потом; отталкивать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to see sb off',
      'phrase_uk' => 'проводжати',
      'phrase_ru' => 'провожать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to show up',
      'phrase_uk' => 'з\'являтися, приходити',
      'phrase_ru' => 'появляться, приходить',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to start off (sb)',
      'phrase_uk' => 'розсмішити когось',
      'phrase_ru' => 'рассмешить кого-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to stick together',
      'phrase_uk' => 'підтримувати один одного, об\'єднуватися',
      'phrase_ru' => 'поддерживать друг друга, объединяться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to take after',
      'phrase_uk' => 'бути схожим',
      'phrase_ru' => 'быть похожим',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to take sb in',
      'phrase_uk' => 'приймати у своєму домі, прихистити',
      'phrase_ru' => 'принимать в своем доме, приютить',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to take sb out',
      'phrase_uk' => 'запрошувати кудись (покриваючи всі витрати)',
      'phrase_ru' => 'приглашать куда-то (покрывая все затраты)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to tell apart',
      'phrase_uk' => 'розрізняти (відрізняти дві речі)',
      'phrase_ru' => 'различать (отличать две вещи)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to turn to',
      'phrase_uk' => 'звертатися (по допомогу)',
      'phrase_ru' => 'обращаться (за помощью)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to bump into',
      'phrase_uk' => 'натрапити на когось, врізатися',
      'phrase_ru' => 'наткнуться на кого-то, врезаться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to butt in',
      'phrase_uk' => 'втручатися (вставляти свої 5 копійок)',
      'phrase_ru' => 'вмешаться (вставить свои 5 копеек)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to drift apart',
      'phrase_uk' => 'віддалятися один від одного',
      'phrase_ru' => 'отдаляться друг от друга',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to go out together',
      'phrase_uk' => 'ставати чужими',
      'phrase_ru' => 'становиться чужими',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to go out with sb',
      'phrase_uk' => 'зустрічатися з кимось',
      'phrase_ru' => 'встречаться с кем-либо',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to grow apart',
      'phrase_uk' => 'перестати спілкуватися',
      'phrase_ru' => 'перестать общаться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to have it out with sb',
      'phrase_uk' => 'з\'ясовувати стосунки',
      'phrase_ru' => 'выяснять отношения',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to hit it off',
      'phrase_uk' => 'подружитися, знайти спільну мову',
      'phrase_ru' => 'подружиться, найти общий язык',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to pair off',
      'phrase_uk' => 'стати парою, почати зустрічатися',
      'phrase_ru' => 'стать парой, начать встречаться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to pin down',
      'phrase_uk' => 'добитися чіткої відповіді від когось',
      'phrase_ru' => 'добиться четкого ответа от кого-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to run into',
      'phrase_uk' => 'випадково зустрітися, натрапити на когось',
      'phrase_ru' => 'случайно встретиться, наткнуться на кого-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to boss sb about/around',
      'phrase_uk' => 'керувати кимось, розпоряджатися',
      'phrase_ru' => 'руководить кем-то, распоряжаться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to be bent on sth',
      'phrase_uk' => 'бути рішучим до чогось',
      'phrase_ru' => 'быть решительным к чему-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to be/get mixed up with sb',
      'phrase_uk' => 'зв\'язатися з, вплутуватися в',
      'phrase_ru' => 'связаться с, ввязываться в',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to butter sb up',
      'phrase_uk' => 'лестити комусь, задобрювати когось',
      'phrase_ru' => 'льстить кому-то, задобрить кого-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to cash in on sth',
      'phrase_uk' => 'наживатися на',
      'phrase_ru' => 'наживаться на',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to cheat on sb',
      'phrase_uk' => 'зраджувати когось',
      'phrase_ru' => 'предавать кого-то, изменять',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to confide in sb',
      'phrase_uk' => 'довіряти(ся) комусь',
      'phrase_ru' => 'доверять(ся) кому-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to cotton on',
      'phrase_uk' => 'починати усвідомлювати',
      'phrase_ru' => 'начинать осознавать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to finish with sb',
      'phrase_uk' => 'розійтися, розлучитися з кимось',
      'phrase_ru' => 'расстаться, расходиться с кем-либо',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to freeze sb out',
      'phrase_uk' => 'ігнорувати когось',
      'phrase_ru' => 'игнорировать кого-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to luck out',
      'phrase_uk' => 'мати удачу',
      'phrase_ru' => 'иметь удачу',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to play at',
      'phrase_uk' => 'прикидатися, притворятися кимось',
      'phrase_ru' => 'притворяться, притворяться кем-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to stick up for',
      'phrase_uk' => 'заступатися за когось',
      'phrase_ru' => 'заступиться за кого-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 4,
      'phrase_en' => 'to warm to sb',
      'phrase_uk' => 'прив\'язатися до когось',
      'phrase_ru' => 'привязаться к кому-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to blow away',
      'phrase_uk' => 'вражати',
      'phrase_ru' => 'впечатлять',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to blow up',
      'phrase_uk' => 'раптово розсердитися',
      'phrase_ru' => 'внезапно рассердиться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to bring back',
      'phrase_uk' => 'нагадувати, викликати спогади',
      'phrase_ru' => 'напомнить, вызывать напоминания',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to burn out',
      'phrase_uk' => 'вигоряти (емоційно)',
      'phrase_ru' => 'угасать, выгорать (эмоционально)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to burn up',
      'phrase_uk' => 'сильно розсердитися',
      'phrase_ru' => 'сильно рассердиться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to calm down',
      'phrase_uk' => 'заспокоювати(ся)',
      'phrase_ru' => 'успокаивать(ся)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to carry away',
      'phrase_uk' => 'захоплювати, зачаровувати',
      'phrase_ru' => 'захватывать, восхищать, очаровывать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to chicken out',
      'phrase_uk' => 'злякатися і не зробити',
      'phrase_ru' => 'испугаться и не сделать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to come round',
      'phrase_uk' => 'змінити свою думку',
      'phrase_ru' => 'поменять свое мнение',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to cut up',
      'phrase_uk' => 'хвилювати, засмучувати',
      'phrase_ru' => 'волновать, расстраивать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to die away',
      'phrase_uk' => 'затихати',
      'phrase_ru' => 'затихать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to freak out',
      'phrase_uk' => 'втрачати самоконтроль (через емоції сходити з розуму)',
      'phrase_ru' => 'терять самоконтроль (из-за эмоций сходить с ума)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to get down to',
      'phrase_uk' => 'братися (за роботу), займатися чимось',
      'phrase_ru' => 'браться (за работу), заняться чем-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to give up',
      'phrase_uk' => 'здаватися, втрачати (надію), припиняти',
      'phrase_ru' => 'здаваться, терять (надежду), прекращать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to go in for',
      'phrase_uk' => 'займатися, захоплюватися чимось',
      'phrase_ru' => 'заниматься, увлекаться чем-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to gross out',
      'phrase_uk' => 'бути противним',
      'phrase_ru' => 'быть противным',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to hit on',
      'phrase_uk' => 'викликати симпатію, залицятися',
      'phrase_ru' => 'вызывать симпатию, ухаживать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to hold back',
      'phrase_uk' => 'стримувати (емоції)',
      'phrase_ru' => 'сдерживать (эмоции)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to keep form',
      'phrase_uk' => 'контролювати (стримувати себе)',
      'phrase_ru' => 'контролировать (сдерживать себя)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to pass for',
      'phrase_uk' => 'сприймати кимось (чимось) чим не є',
      'phrase_ru' => 'воспринимать кем-то (чем-то) чем не является',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to live for',
      'phrase_uk' => 'захоплюватися, «жити» чимось',
      'phrase_ru' => 'увлекаться, «жить» чем-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to look forward to',
      'phrase_uk' => 'чекати з нетерпінням',
      'phrase_ru' => 'ждать с нетерпением',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to monkey around',
      'phrase_uk' => 'бешкетувати',
      'phrase_ru' => 'шалить',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to play at',
      'phrase_uk' => 'зображати когось, прикидатися',
      'phrase_ru' => 'изображать кого-то, притворяться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to put up with',
      'phrase_uk' => 'терпіти',
      'phrase_ru' => 'терпеть',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to snake up',
      'phrase_uk' => 'шокувати, турбувати',
      'phrase_ru' => 'шокировать, беспокоить',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to warm to',
      'phrase_uk' => 'дружньо ставитися, починати подобатися',
      'phrase_ru' => 'дружески относиться, начинать нравиться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to sink in',
      'phrase_uk' => 'вірити, усвідомлювати (переважно негативні події)',
      'phrase_ru' => 'поверить, осознать (в основном негативные события)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to switch off',
      'phrase_uk' => 'відключатися, не звертати увагу',
      'phrase_ru' => 'отключаться, не обращать внимание',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to take back',
      'phrase_uk' => 'викликати ностальгію, нагадувати',
      'phrase_ru' => 'вызывать ностальгию, напоминать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to wear down',
      'phrase_uk' => 'виснажувати когось',
      'phrase_ru' => 'истощать кого-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to weigh on',
      'phrase_uk' => 'тиснути на когось, пригнічувати, нервувати',
      'phrase_ru' => 'давить на кого-то, угнетать, нервировать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'can\'t get over sth',
      'phrase_uk' => 'не дає спокою, не можу повірити',
      'phrase_ru' => 'не дает покоя, не могу поверить',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to be hung up',
      'phrase_uk' => 'бути зацикленим на чомусь',
      'phrase_ru' => 'быть зацикленным на чем-либо',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to be put out',
      'phrase_uk' => 'бути ображеним, засмученим',
      'phrase_ru' => 'быть обиженным, расстроенным',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to bottle up sth',
      'phrase_uk' => 'закриватися, приховувати емоції',
      'phrase_ru' => 'закрываться, скрывать эмоции',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to brighten up',
      'phrase_uk' => 'ставати веселішим',
      'phrase_ru' => 'становиться веселее',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to cheer up',
      'phrase_uk' => 'піднімати настрій, розвеселити',
      'phrase_ru' => 'поднимать настроение, развеселить',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to dawn upon/on sb',
      'phrase_uk' => 'осяяло, дійшло (осяяла думка)',
      'phrase_ru' => 'осенило, дошло (озарила мысль)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to grow on sb',
      'phrase_uk' => 'все більше подобатися',
      'phrase_ru' => 'нравиться все больше',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to jump out at sb',
      'phrase_uk' => 'з\'являтися, приходити (про відповідь)',
      'phrase_ru' => 'появляться, приходить (про ответ)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to pull yourself together',
      'phrase_uk' => 'зібратися з духом, взяти себе в руки',
      'phrase_ru' => 'собраться с духом, взять себя в руки',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to be torn between sth',
      'phrase_uk' => 'розриватися між чимось/кимось',
      'phrase_ru' => 'разрываться между чем-либо/кем-либо',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to bore into sb',
      'phrase_uk' => 'витріщатися',
      'phrase_ru' => 'вытаращиться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to bowl over',
      'phrase_uk' => 'вражати, дивувати',
      'phrase_ru' => 'поражать, удивлять',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to brim with sth',
      'phrase_uk' => 'бути переповненим чимось (відчуття)',
      'phrase_ru' => 'быть переполненным чем-либо (ощущения)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to choke/fight back',
      'phrase_uk' => 'стримувати, здаватися',
      'phrase_ru' => 'сдерживать, унывать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to eat away at sb',
      'phrase_uk' => 'гризти (зсередини)',
      'phrase_ru' => 'съедать (изнутри)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to flare up',
      'phrase_uk' => 'раптово розсердитися, спалахнути від гніву',
      'phrase_ru' => 'внезапно разозлиться, вспыхнуть от гнева',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to flood back',
      'phrase_uk' => 'нахлинути (про спогади, емоції)',
      'phrase_ru' => 'нахлынуть (про воспоминания, эмоции)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to get sb down',
      'phrase_uk' => 'робити нещасним, пригнічувати когось',
      'phrase_ru' => 'делать несчастным, подавлять кого-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to grate on sb/sth',
      'phrase_uk' => 'дратувати когось/щось',
      'phrase_ru' => 'раздражать кого-то/что-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to light up',
      'phrase_uk' => 'загорітися, засвітитися',
      'phrase_ru' => 'загореться, засветиться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to pep up sb/sth',
      'phrase_uk' => 'оживляти, підбадьорювати когось/щось',
      'phrase_ru' => 'оживлять, подбадривать кого-то/что-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to pick oneself up',
      'phrase_uk' => 'брати себе в руки',
      'phrase_ru' => 'брать себя в руки',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to pride oneself on',
      'phrase_uk' => 'пишатися, відчувати гордість',
      'phrase_ru' => 'гордиться, ощущать гордость',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to shake up',
      'phrase_uk' => 'шокувати, стривожити',
      'phrase_ru' => 'шокировать, встревожить',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to snap out of',
      'phrase_uk' => 'вирватися, вийти (з депресії)',
      'phrase_ru' => 'вырваться, выйти (с депрессии)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to spill (sth) out',
      'phrase_uk' => 'висловити, розповісти (часто неконтрольоване), виплеснути',
      'phrase_ru' => 'выразить, рассказать (часто неконтролируемое), выплеснуть',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to tee sb off (informal)',
      'phrase_uk' => 'розізлити, дратувати когось',
      'phrase_ru' => 'разозлить, раздражать кого-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to tense up',
      'phrase_uk' => 'напружувати(ся)',
      'phrase_ru' => 'напрягать(ся)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 5,
      'phrase_en' => 'to tick sb off',
      'phrase_uk' => 'виводити когось із себе',
      'phrase_ru' => 'выводить кого-то из себя',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 6,
      'phrase_en' => 'to be booked up',
      'phrase_uk' => 'бути заброньованим/повністю зайнятим (без вільних місць)',
      'phrase_ru' => 'быть забронированным/полностью занятым (без свободных мест)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 6,
      'phrase_en' => 'to check in',
      'phrase_uk' => 'реєструватися, заселятися (в готель)',
      'phrase_ru' => 'регистрироваться, заселяться (в отель)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 6,
      'phrase_en' => 'to check out',
      'phrase_uk' => 'виселятися (з готелю)',
      'phrase_ru' => 'выселяться (из отеля)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 6,
      'phrase_en' => 'to eat out',
      'phrase_uk' => 'їсти в ресторані',
      'phrase_ru' => 'есть в ресторане',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 6,
      'phrase_en' => 'to get to',
      'phrase_uk' => 'досягати',
      'phrase_ru' => 'добиваться, достигать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
    [
        'course_id' => 1,
        'section_id' => 6,
        'phrase_en' => 'to move in',
        'phrase_uk' => 'переїхати',
        'phrase_ru' => 'переехать',
        'created_at' => now(),
    ],
  ]);
DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 6,
      'phrase_en' => 'to read up on',
      'phrase_uk' => 'детально вивчати, дізнаватися інформацію читаючи',
      'phrase_ru' => 'детально изучать, узнавать информацию читая',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 6,
      'phrase_en' => 'to sit back',
      'phrase_uk' => 'зручно сидіти, обпершися на спинку',
      'phrase_ru' => 'удобно сидеть, опершись на спинку',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 6,
      'phrase_en' => 'to stop off',
      'phrase_uk' => 'заїжджати, відвідати на короткий час',
      'phrase_ru' => 'заезжать, посетить на короткое время',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 6,
      'phrase_en' => 'to take off/fly off',
      'phrase_uk' => 'злітати (про літак)',
      'phrase_ru' => 'взлетать, вылететь (о самолете)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 6,
      'phrase_en' => 'to tear off',
      'phrase_uk' => 'зривати з себе (про одяг)',
      'phrase_ru' => 'срывать с себя что-то (об одежде)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 6,
      'phrase_en' => 'to be cut off',
      'phrase_uk' => 'бути відрізаним, ізольованим',
      'phrase_ru' => 'быть отрезанным, изолированным',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 6,
      'phrase_en' => 'to lift off',
      'phrase_uk' => 'злітати (в повітря)',
      'phrase_ru' => 'взлетать (в воздух)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 6,
      'phrase_en' => 'to open onto sth',
      'phrase_uk' => 'мати пейзаж на',
      'phrase_ru' => 'иметь пейзаж на',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 6,
      'phrase_en' => 'to pack away',
      'phrase_uk' => 'пакувати, упаковувати',
      'phrase_ru' => 'паковать, упаковывать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 6,
      'phrase_en' => 'to gobble sth up',
      'phrase_uk' => 'спорожнити (запаси чогось)',
      'phrase_ru' => 'опустошить (запасы чего-то)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 6,
      'phrase_en' => 'to hang about',
      'phrase_uk' => 'бродити без діла',
      'phrase_ru' => 'бродить без дела',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 6,
      'phrase_en' => 'to make out sth',
      'phrase_uk' => 'вигадувати щось, неправдиво стверджувати',
      'phrase_ru' => 'выдумывать что-то, неправдиво утверждать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 6,
      'phrase_en' => 'to tend towards',
      'phrase_uk' => 'схилятися до, віддавати перевагу',
      'phrase_ru' => 'склоняться к, отдавать предпочтение',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 6,
      'phrase_en' => 'to tie sb down',
      'phrase_uk' => 'обмежувати, сковувати',
      'phrase_ru' => 'ограничивать, сковывать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 6,
      'phrase_en' => 'to see off',
      'phrase_uk' => 'проводжати в дорогу',
      'phrase_ru' => 'провожать в дорогу',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 6,
      'phrase_en' => 'to set off/head off',
      'phrase_uk' => 'відправлятися в дорогу, починати подорож',
      'phrase_ru' => 'отправляться в путь, начинать путешествие',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 6,
      'phrase_en' => 'to get in',
      'phrase_uk' => 'прибувати на місце (про поїзд, літак тощо)',
      'phrase_ru' => 'прибывать на место (о поезде, самолете и т.д.)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 6,
      'phrase_en' => 'to show sb around',
      'phrase_uk' => 'показувати комусь місцевість',
      'phrase_ru' => 'показывать кому-то местность',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 6,
      'phrase_en' => 'to wind down/kick back/chill out',
      'phrase_uk' => 'розслаблятися',
      'phrase_ru' => 'расслабиться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 6,
      'phrase_en' => 'to get into',
      'phrase_uk' => 'прибувати в конкретне місце (про транспорт)',
      'phrase_ru' => 'прибывать в конкретное место (о транспорте)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 6,
      'phrase_en' => 'to polish up/brush up',
      'phrase_uk' => 'відшліфувати, відполірувати',
      'phrase_ru' => 'отшлифовать, отполировать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 6,
      'phrase_en' => 'to pop in/pop into',
      'phrase_uk' => 'заскочити кудись між ділом',
      'phrase_ru' => 'заскочить куда-то между делом',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 6,
      'phrase_en' => 'to hop off',
      'phrase_uk' => 'висаджуватися',
      'phrase_ru' => 'высаживаться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 6,
      'phrase_en' => 'to hurry up',
      'phrase_uk' => 'поспішити',
      'phrase_ru' => 'поспешить',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 6,
      'phrase_en' => 'to run over',
      'phrase_uk' => 'переїжджати, наїжджати транспортом на когось',
      'phrase_ru' => 'переехать, наехать транспортом на кого-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 7,
      'phrase_en' => 'to ask after',
      'phrase_uk' => 'цікавитися, питати про чиєсь самопочуття',
      'phrase_ru' => 'интересоваться, спрашивать о чьем-то самочувствии',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 7,
      'phrase_en' => 'to bring around',
      'phrase_uk' => 'приводити до тями',
      'phrase_ru' => 'приводить в сознание',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 7,
      'phrase_en' => 'to bring on',
      'phrase_uk' => 'викликати',
      'phrase_ru' => 'вызывать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 7,
      'phrase_en' => 'to burn off',
      'phrase_uk' => 'спалювати (про калорії)',
      'phrase_ru' => 'сжигать (о калориях)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 7,
      'phrase_en' => 'to come down with',
      'phrase_uk' => 'захворіти/побачити перші симптоми',
      'phrase_ru' => 'заболеть/увидеть первые симптомы',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 7,
      'phrase_en' => 'to cut down',
      'phrase_uk' => 'обмежувати використання',
      'phrase_ru' => 'ограничивать использование',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 7,
      'phrase_en' => 'to disagree with',
      'phrase_uk' => 'погано впливати, шкодити здоров\'ю',
      'phrase_ru' => 'плохо влиять, вредить здоровью',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 7,
      'phrase_en' => 'to doze off',
      'phrase_uk' => 'дрімати',
      'phrase_ru' => 'дремать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 7,
      'phrase_en' => 'to eat away',
      'phrase_uk' => 'знищувати, руйнувати повільно',
      'phrase_ru' => 'уничтожать, разрушать медленно',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 7,
      'phrase_en' => 'to fight back',
      'phrase_uk' => 'відбиватися, захищати себе',
      'phrase_ru' => 'отбиваться, защищать себя',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 7,
      'phrase_en' => 'to flip out',
      'phrase_uk' => 'зірватися, зійти з розуму',
      'phrase_ru' => 'срываться, сходить с ума',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 7,
      'phrase_en' => 'to go down',
      'phrase_uk' => 'знижуватися',
      'phrase_ru' => 'снижаться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 7,
      'phrase_en' => 'to get up',
      'phrase_uk' => 'прокидатися',
      'phrase_ru' => 'просыпаться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 7,
      'phrase_en' => 'to go down with',
      'phrase_uk' => 'захворіти інфекційною хворобою',
      'phrase_ru' => 'заболеть инфекционной болезнью',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 7,
      'phrase_en' => 'to grow up',
      'phrase_uk' => 'рости',
      'phrase_ru' => 'расти',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 7,
      'phrase_en' => 'to keep away',
      'phrase_uk' => 'тримати подалі',
      'phrase_ru' => 'держать подальше',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 7,
      'phrase_en' => 'to keep down',
      'phrase_uk' => 'стримувати рвоту',
      'phrase_ru' => 'сдерживать рвоту',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 7,
      'phrase_en' => 'to leave out',
      'phrase_uk' => 'не включати до складу',
      'phrase_ru' => 'не включать в состав',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 7,
      'phrase_en' => 'to make out',
      'phrase_uk' => 'вдавати, зображати',
      'phrase_ru' => 'делать вид, изображать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 7,
      'phrase_en' => 'to pass out',
      'phrase_uk' => 'втрачати свідомість',
      'phrase_ru' => 'терять сознание',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 7,
      'phrase_en' => 'to put on',
      'phrase_uk' => 'набирати вагу, товстіти',
      'phrase_ru' => 'набирать вес, толстеть',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 7,
      'phrase_en' => 'to slow down',
      'phrase_uk' => 'вести спокійний спосіб життя',
      'phrase_ru' => 'вести спокойный образ жизни',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 7,
      'phrase_en' => 'to stay up',
      'phrase_uk' => 'не лягати спати',
      'phrase_ru' => 'не ложиться спать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 7,
      'phrase_en' => 'to swear off',
      'phrase_uk' => 'зношуватися, поступово зникати',
      'phrase_ru' => 'изнашиваться, постепенно исчезать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 7,
      'phrase_en' => 'to drink up',
      'phrase_uk' => 'допивати',
      'phrase_ru' => 'допивать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 7,
      'phrase_en' => 'to fall over',
      'phrase_uk' => 'падати',
      'phrase_ru' => 'падать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 7,
      'phrase_en' => 'to fight off',
      'phrase_uk' => 'боротися (з хворобою)',
      'phrase_ru' => 'бороться (с болезнью)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 7,
      'phrase_en' => 'to go down',
      'phrase_uk' => 'знижуватися',
      'phrase_ru' => 'снижаться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 7,
      'phrase_en' => 'to pull through',
      'phrase_uk' => 'справитися',
      'phrase_ru' => 'справиться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 7,
      'phrase_en' => 'to be apt to sth',
      'phrase_uk' => 'бути схильним до чогось',
      'phrase_ru' => 'быть склонным к чему-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 7,
      'phrase_en' => 'to build oneself up',
      'phrase_uk' => 'ставати сильнішим, міцніти',
      'phrase_ru' => 'становиться сильнее, крепнуть',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 7,
      'phrase_en' => 'to call sb out',
      'phrase_uk' => 'викликати когось',
      'phrase_ru' => 'вызывать кого-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 7,
      'phrase_en' => 'to do sb in',
      'phrase_uk' => 'вбивати',
      'phrase_ru' => 'убивать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 7,
      'phrase_en' => 'to fix up',
      'phrase_uk' => 'призначати, домовлятися',
      'phrase_ru' => 'назначать, договариваться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 7,
      'phrase_en' => 'to frown on/upon',
      'phrase_uk' => 'засуджувати(ся), не схвалювати',
      'phrase_ru' => 'осуждать(ся), не одобрять',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 7,
      'phrase_en' => 'to know of sb/sth',
      'phrase_uk' => 'знати когось/щось (зовсім трохи)',
      'phrase_ru' => 'знать кого-то/что-то (совсем чуть-чуть)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 7,
      'phrase_en' => 'to loosen/warm up',
      'phrase_uk' => 'розминати(ся)',
      'phrase_ru' => 'разминать(ся)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 7,
      'phrase_en' => 'to phase sth out',
      'phrase_uk' => 'поступово відмовлятися, припиняти',
      'phrase_ru' => 'постепенно отказываться, прекратить',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 7,
      'phrase_en' => 'to step aside',
      'phrase_uk' => 'відходити, поступатися місцем',
      'phrase_ru' => 'отходить, уступить место',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 7,
      'phrase_en' => 'to swear by',
      'phrase_uk' => 'щиро вірити у щось (в ефективність, користь чогось)',
      'phrase_ru' => 'искренне верить во что-то (в эффективность, пользу чего-то)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 7,
      'phrase_en' => 'to waste away',
      'phrase_uk' => 'чахнути, виснажуватися',
      'phrase_ru' => 'чахнуть, истощать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 7,
      'phrase_en' => 'to wear sb out',
      'phrase_uk' => 'стомлювати',
      'phrase_ru' => 'утомлять',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to account for',
      'phrase_uk' => 'пояснювати',
      'phrase_ru' => 'объяснять',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to be left over',
      'phrase_uk' => 'залишатися невикористаним',
      'phrase_ru' => 'оставаться неиспользованным',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to be thrown together',
      'phrase_uk' => 'несподівано зустрітися',
      'phrase_ru' => 'неожиданно встретиться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to blow in',
      'phrase_uk' => 'несподівано з\'являтися, прибувати',
      'phrase_ru' => 'неожиданно появляться, прибывать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to burn down',
      'phrase_uk' => 'згоряти',
      'phrase_ru' => 'сгорать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to burst out',
      'phrase_uk' => 'викрикувати',
      'phrase_ru' => 'выкрикивать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to call off',
      'phrase_uk' => 'скасовувати',
      'phrase_ru' => 'отменять',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to call out',
      'phrase_uk' => 'голосно викрикувати',
      'phrase_ru' => 'громко выкрикивать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to clog up',
      'phrase_uk' => 'засмічувати, забивати',
      'phrase_ru' => 'замусоривать, забивать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to close down',
      'phrase_uk' => 'закривати, припиняти діяльність',
      'phrase_ru' => 'закрывать, прекращать деятельность',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to come across',
      'phrase_uk' => 'випадково знаходити',
      'phrase_ru' => 'случайно найти',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to empty out',
      'phrase_uk' => 'спустошувати, випорожнювати',
      'phrase_ru' => 'опустошать, опорожнять',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to fall apart',
      'phrase_uk' => 'розпадатися, розвалюватися',
      'phrase_ru' => 'распадаться, разваливаться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to fall down',
      'phrase_uk' => 'падати',
      'phrase_ru' => 'падать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to get away with',
      'phrase_uk' => 'обходитися',
      'phrase_ru' => 'обходиться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to get out',
      'phrase_uk' => 'залишати, тікати, покидати',
      'phrase_ru' => 'оставлять, убегать, покидать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to give out',
      'phrase_uk' => 'відмовляти, виходити з ладу, погіршуватися',
      'phrase_ru' => 'отказывать, выходить из строя, ухудшаться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to go around',
      'phrase_uk' => 'вистачати на всіх',
      'phrase_ru' => 'хватать на всех',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to go beyond',
      'phrase_uk' => 'виходити за рамки (межі)',
      'phrase_ru' => 'выходить за рамки (границы)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to hand down',
      'phrase_uk' => 'передавати',
      'phrase_ru' => 'передавать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to head off',
      'phrase_uk' => 'запобігати (щось погане)',
      'phrase_ru' => 'предотвращать (что-то плохое)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to hide out',
      'phrase_uk' => 'ховатися',
      'phrase_ru' => 'прятаться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to keep out',
      'phrase_uk' => 'не заходити, не пропускати',
      'phrase_ru' => 'не заходить, не пропускать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to knock down',
      'phrase_uk' => 'збивати (транспортним засобом)',
      'phrase_ru' => 'сбивать (транспортным средством)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to lead up to',
      'phrase_uk' => 'призводити до чогось, передувати чомусь',
      'phrase_ru' => 'приводить к чему-то, предшествовать чему-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to leave behind',
      'phrase_uk' => 'йти і забувати щось, залишати',
      'phrase_ru' => 'уйти и забыть что-то, оставить',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to lock in',
      'phrase_uk' => 'закривати (когось у якомусь місці)',
      'phrase_ru' => 'закрывать (кого-то в каком-то месте)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to look on',
      'phrase_uk' => 'спостерігати з боку',
      'phrase_ru' => 'наблюдать со стороны',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to luck out',
      'phrase_uk' => 'щастити, мати везіння',
      'phrase_ru' => 'везти, иметь везение',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to make into',
      'phrase_uk' => 'переробляти',
      'phrase_ru' => 'переделать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to run across',
      'phrase_uk' => 'несподівано стикатися (з проблемою)',
      'phrase_ru' => 'неожиданно столкнуться (с проблемой)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to run around',
      'phrase_uk' => 'бути дуже зайнятим, бігати у справах',
      'phrase_ru' => 'быть очень занятым, бегать по делам',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to bump into',
      'phrase_uk' => 'натикатися на когось, врізатися',
      'phrase_ru' => 'напнуться на кого-то, врезаться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to run out (of)',
      'phrase_uk' => 'закінчуватися, не залишатися',
      'phrase_ru' => 'заканчиваться, не оставаться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to set back',
      'phrase_uk' => 'затримувати',
      'phrase_ru' => 'задерживать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to stay away from',
      'phrase_uk' => 'обходити, не наближатися',
      'phrase_ru' => 'обходить, не приближаться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to stay over',
      'phrase_uk' => 'переночувати, залишатися на ніч у когось',
      'phrase_ru' => 'переночевать, оставаться на ночь у кого-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to strike on',
      'phrase_uk' => 'робити несподівані відкриття (в незвичних для цього умовах)',
      'phrase_ru' => 'делать неожиданные откровения (в необычных для этого условиях)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to turn off',
      'phrase_uk' => 'змінювати напрям руху, звернути з дороги',
      'phrase_ru' => 'изменять направление движения, свернуть с дороги',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to watch out',
      'phrase_uk' => 'бути обережним, стежити',
      'phrase_ru' => 'быть осторожным, следить',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to bang into sth',
      'phrase_uk' => 'натикатися, врізатися',
      'phrase_ru' => 'наткнуться, врезаться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to bash sth/sb about',
      'phrase_uk' => 'грубо, не обережно поводитися з кимось',
      'phrase_ru' => 'грубо, неосторожно вести себя с кем-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to blow down',
      'phrase_uk' => 'повалити, знести',
      'phrase_ru' => 'повалить, снести',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to flare up',
      'phrase_uk' => 'спалахнути, вибухнути',
      'phrase_ru' => 'вспыхнуть, взорваться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to leak out',
      'phrase_uk' => 'просочитися (про інформацію)',
      'phrase_ru' => 'просочиться (про информацию)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to lock sb out',
      'phrase_uk' => 'випадково закритися (в приміщенні), не може вийти/зайти',
      'phrase_ru' => 'случайно закрыться (в помещении), не может выйти/зайти',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to pan out',
      'phrase_uk' => 'складатися, розвиватися',
      'phrase_ru' => 'складываться, развиваться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to play up',
      'phrase_uk' => 'погано працювати, глючити',
      'phrase_ru' => 'плохо работать, глючить',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to be riddled with sth',
      'phrase_uk' => 'бути переповненим чимось',
      'phrase_ru' => 'быть переполненным чем-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to bear out',
      'phrase_uk' => 'підтверджувати',
      'phrase_ru' => 'подтверждать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to bear up',
      'phrase_uk' => 'витримувати, справлятися',
      'phrase_ru' => 'выдерживать, справиться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to block out',
      'phrase_uk' => 'блокувати, затіняти',
      'phrase_ru' => 'блокировать, заслонять',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to blunder about/around',
      'phrase_uk' => 'блукати (пробиратися наосліп)',
      'phrase_ru' => 'блуждать (пробираться ощупью)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to catch on',
      'phrase_uk' => 'розуміти, усвідомлювати (через деякий час)',
      'phrase_ru' => 'понимать, осознавать (через некоторое время)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to creep up on sb',
      'phrase_uk' => 'підкрадатися',
      'phrase_ru' => 'подкрадываться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to deprive sb/sth of sth',
      'phrase_uk' => 'позбавляти когось/чогось',
      'phrase_ru' => 'лишать кого-то/чего-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to die out',
      'phrase_uk' => 'вимирати',
      'phrase_ru' => 'вымирать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to doom to',
      'phrase_uk' => 'прирікати на (смерть, крах)',
      'phrase_ru' => 'обрекать на (смерть, крах)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to double back',
      'phrase_uk' => 'повертатися',
      'phrase_ru' => 'возвращаться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to draw back',
      'phrase_uk' => 'відступати',
      'phrase_ru' => 'отступать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to egg sb on',
      'phrase_uk' => 'підбивати (щось зробити)',
      'phrase_ru' => 'подбивать (что-то сделать)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to fade out',
      'phrase_uk' => 'поступово блякнути, стихати',
      'phrase_ru' => 'постепенно блекнуть, стихать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to ferret sb/sth out',
      'phrase_uk' => 'розвідувати, з\'ясовувати (винюхувати)',
      'phrase_ru' => 'разведывать, выяснять (вынюхивать)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to flag sth down',
      'phrase_uk' => 'зупиняти (транспорт)',
      'phrase_ru' => 'останавливать (транспорт)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to flash back',
      'phrase_uk' => 'згадувати, повертатися думками',
      'phrase_ru' => 'вспоминать, возвращаться мыслями',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to freeze up',
      'phrase_uk' => 'застигнути (через страх)',
      'phrase_ru' => 'замирить (из-за страха)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to go beyond',
      'phrase_uk' => 'виходити за рамки',
      'phrase_ru' => 'выходить за рамки',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to hang back',
      'phrase_uk' => 'триматися позаду',
      'phrase_ru' => 'держаться позади',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to hold over',
      'phrase_uk' => 'затримувати(ся)',
      'phrase_ru' => 'задерживать(ся)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to line up',
      'phrase_uk' => 'вишиковуватися',
      'phrase_ru' => 'выстроиться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to lose out',
      'phrase_uk' => 'програвати, поступатися, зазнавати невдачі',
      'phrase_ru' => 'проигрывать, поступаться, терпеть неудачу',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to occur to sb',
      'phrase_uk' => 'приходити в голову',
      'phrase_ru' => 'приходить в голову',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to peter out',
      'phrase_uk' => 'поступово зникати',
      'phrase_ru' => 'постепенно исчезнуть',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to play along',
      'phrase_uk' => 'підігравати, маніпулювати',
      'phrase_ru' => 'подыгрывать, манипулировать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to run over sb/sth',
      'phrase_uk' => 'переїжджати, наїжджати на когось/щось',
      'phrase_ru' => 'переехать, наехать на кого-то/что-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to set sb/sth back',
      'phrase_uk' => 'затримувати, відкладати',
      'phrase_ru' => 'задерживать, откладывать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to squash up',
      'phrase_uk' => 'потіснитися',
      'phrase_ru' => 'потесниться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to stack up',
      'phrase_uk' => 'відповідати дійсності',
      'phrase_ru' => 'соответствовать действительности',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to stow away',
      'phrase_uk' => 'їхати (будь-яким транспортом) без квитка, «зайцем»',
      'phrase_ru' => 'ехать (любым транспортом) без билета, «зайцем»',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to swing around',
      'phrase_uk' => 'розвертатися',
      'phrase_ru' => 'развернуться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to tip sb off',
      'phrase_uk' => 'попереджати (таємно)',
      'phrase_ru' => 'предупреждать (тайно)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to trip over',
      'phrase_uk' => 'спотикатися',
      'phrase_ru' => 'спотыкаться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to turn sb away',
      'phrase_uk' => 'відмовляти в доступі/вході',
      'phrase_ru' => 'отказывать в доступе/входе',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to walk in/on sb',
      'phrase_uk' => '«застукати», застати (когось за чимось)',
      'phrase_ru' => '«застукать», заставать (кого-то за чем-то)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 8,
      'phrase_en' => 'to zip along',
      'phrase_uk' => 'дуже швидко рухатися/йти',
      'phrase_ru' => 'очень быстро двигаться/идти',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to cross out',
      'phrase_uk' => 'викреслювати',
      'phrase_ru' => 'перечеркнуть',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to drop out',
      'phrase_uk' => 'кидати навчання',
      'phrase_ru' => 'бросать учебу',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to get over with',
      'phrase_uk' => 'робити/закінчувати неприємну, але необхідну роботу',
      'phrase_ru' => 'делать/заканчивать неприятную, но необходимую работу',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to get through',
      'phrase_uk' => 'успішно скласти іспит; закінчувати',
      'phrase_ru' => 'успешно сдать экзамен; заканчивать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to give back',
      'phrase_uk' => 'повертати комусь щось',
      'phrase_ru' => 'вернуть кому-то что-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to go over',
      'phrase_uk' => 'переглядати, повторювати',
      'phrase_ru' => 'пересмотреть, повторить',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to hand in',
      'phrase_uk' => 'здавати на перевірку',
      'phrase_ru' => 'сдавать на проверку',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to keep at',
      'phrase_uk' => 'продовжувати виконувати (щось складне)',
      'phrase_ru' => 'продолжать исполнять (что-то сложное)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to let out',
      'phrase_uk' => 'закінчуватися (навчання, урок)',
      'phrase_ru' => 'заканчиваться (учеба, урок)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to look at',
      'phrase_uk' => 'переглядати, щоб оцінити',
      'phrase_ru' => 'просмотреть, чтобы оценить',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to look over',
      'phrase_uk' => 'швидко перевірити/переглянути щось',
      'phrase_ru' => 'быстро проверить/просмотреть что-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to look up',
      'phrase_uk' => 'покращуватися',
      'phrase_ru' => 'улучшиться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to narrow down',
      'phrase_uk' => 'обмежити, звузити',
      'phrase_ru' => 'ограничить, свести к',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to pass around',
      'phrase_uk' => 'роздавати',
      'phrase_ru' => 'раздавать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to put together',
      'phrase_uk' => 'складати, збирати з частин',
      'phrase_ru' => 'составлять, собирать из частей',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to rub up on',
      'phrase_uk' => 'поновлювати знання',
      'phrase_ru' => 'возобновлять знания',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to set up',
      'phrase_uk' => 'засновувати, створювати, відкривати',
      'phrase_ru' => 'основывать, создавать, открывать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to sneak out',
      'phrase_uk' => 'вибиратися, вислизати',
      'phrase_ru' => 'выбираться, ускользнуть',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to take in',
      'phrase_uk' => 'повністю розуміти щось, брати до уваги',
      'phrase_ru' => 'полностью понимать что-то, брать во внимание',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to take sth out',
      'phrase_uk' => 'виймати',
      'phrase_ru' => 'вынимать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to trip up',
      'phrase_uk' => 'робити помилку, збити з пантелику',
      'phrase_ru' => 'сделать ошибку, сбить с толку',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to work at',
      'phrase_uk' => 'докладати зусиль',
      'phrase_ru' => 'прикладывать усилия',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to zone out',
      'phrase_uk' => 'не концентрувати увагу, ігнорувати',
      'phrase_ru' => 'не концентрировать внимание, игнорировать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to crop up',
      'phrase_uk' => 'виникати',
      'phrase_ru' => 'возникать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to dip into sth',
      'phrase_uk' => 'подивитися, перечитати (не повністю)',
      'phrase_ru' => 'посмотреть, перечитать (не полностью)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to flick/flip through',
      'phrase_uk' => 'переглядати, гортати',
      'phrase_ru' => 'просматривать, листать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to polish up',
      'phrase_uk' => 'покращувати, вдосконалювати',
      'phrase_ru' => 'улучшать, совершенствовать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to read out',
      'phrase_uk' => 'читати вголос',
      'phrase_ru' => 'читать вслух',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to beaver away',
      'phrase_uk' => 'працювати старанно, наполегливо',
      'phrase_ru' => 'трудиться, настойчиво работать (на протяжении длительного времени)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to bring up',
      'phrase_uk' => 'піднімати (тему, питання), виносити на обговорення',
      'phrase_ru' => 'поднять (тему, вопрос), вынести на обсуждение',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to carry off',
      'phrase_uk' => 'робити, проводити щось (успішно)',
      'phrase_ru' => 'делать, проводить что-то (успешно)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to cater for sth',
      'phrase_uk' => 'задовольняти (прохання, вимогу)',
      'phrase_ru' => 'удовлетворять (просьбу, требование)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to draw on',
      'phrase_uk' => 'спиратися, базуватися на',
      'phrase_ru' => 'опираться, основываться на',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to leap out at sb',
      'phrase_uk' => 'потрапити на очі комусь',
      'phrase_ru' => 'попасть на глаза кому-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to leave behind',
      'phrase_uk' => 'перевершувати, випереджати',
      'phrase_ru' => 'превосходить, перегонять',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to major in sth',
      'phrase_uk' => 'спеціалізуватися на',
      'phrase_ru' => 'специализироваться на',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to pile into/out of',
      'phrase_uk' => 'заходити/виходити (швидко і неорганізовано)',
      'phrase_ru' => 'заходить/выходить (быстро и неорганизованно)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to pipe down',
      'phrase_uk' => 'замовкати',
      'phrase_ru' => 'замолчать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to plug away',
      'phrase_uk' => 'працювати наполегливо',
      'phrase_ru' => 'настойчиво работать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to point sth out',
      'phrase_uk' => 'зауважувати, вказувати, підкреслювати',
      'phrase_ru' => 'заметить, указать, подчеркнуть',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to pore over',
      'phrase_uk' => 'детально вивчати',
      'phrase_ru' => 'детально выучить',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to put sb through',
      'phrase_uk' => 'оплачувати чиєсь навчання',
      'phrase_ru' => 'оплатить чье-то обучение',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to round off',
      'phrase_uk' => 'успішно завершувати',
      'phrase_ru' => 'успешно завершить',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to screw up',
      'phrase_uk' => 'провалювати(ся), "облажатися"',
      'phrase_ru' => 'провалить(ся), "облажаться"',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to separate out',
      'phrase_uk' => 'виділяти, ділити на групи',
      'phrase_ru' => 'выделить, поделить на группы',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to set out',
      'phrase_uk' => 'мати намір',
      'phrase_ru' => 'иметь намерение',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to show off',
      'phrase_uk' => 'хвалитися',
      'phrase_ru' => 'хвастаться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to sketch out',
      'phrase_uk' => 'накидати план, планувати (приблизно)',
      'phrase_ru' => 'накидать план, спланировать (приблизительно)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 9,
      'phrase_en' => 'to think sth through',
      'phrase_uk' => 'продумувати, детально планувати',
      'phrase_ru' => 'продумывать что-то, детально спланировать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 10,
      'phrase_en' => 'to spread out',
      'phrase_uk' => 'розкладати, розстеляти',
      'phrase_ru' => 'раскидывать, раскладывать, расстилать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 10,
      'phrase_en' => 'to catch on',
      'phrase_uk' => 'ставати популярним',
      'phrase_ru' => 'становиться популярным',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 10,
      'phrase_en' => 'to come across',
      'phrase_uk' => 'справляти враження, здатися',
      'phrase_ru' => 'производить впечатление, показаться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 10,
      'phrase_en' => 'to come up with',
      'phrase_uk' => 'придумати (ідею, рішення)',
      'phrase_ru' => 'придумать (идею, решение)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 10,
      'phrase_en' => 'to eat up',
      'phrase_uk' => 'поглинати, використовувати (час, гроші, простір)',
      'phrase_ru' => 'поглощать, использовать (время, деньги, пространство)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 10,
      'phrase_en' => 'to fall behind',
      'phrase_uk' => 'відставати',
      'phrase_ru' => 'отставать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 10,
      'phrase_en' => 'to follow sth up',
      'phrase_uk' => 'дізнаватися більше',
      'phrase_ru' => 'узнавать (больше)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 10,
      'phrase_en' => 'to get across',
      'phrase_uk' => 'доносити (інформацію)',
      'phrase_ru' => 'доносить (информацию)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 10,
      'phrase_en' => 'to get into',
      'phrase_uk' => 'починати займатися/цікавитися діяльністю',
      'phrase_ru' => 'начинать заниматься/заинтересоваться деятельностью',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 10,
      'phrase_en' => 'to get round to',
      'phrase_uk' => 'змогти, нарешті зробити щось',
      'phrase_ru' => 'смочь суметь, наконец сделать что-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 10,
      'phrase_en' => 'to go through',
      'phrase_uk' => 'переживати (досвід), пройти через щось',
      'phrase_ru' => 'переживать (опыт), пройти через что-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 10,
      'phrase_en' => 'to hurry up',
      'phrase_uk' => 'поспішати, робити щось швидше',
      'phrase_ru' => 'спешить, делать что-то быстрее',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 10,
      'phrase_en' => 'to keep on',
      'phrase_uk' => 'продовжувати (робити щось знову і знову)',
      'phrase_ru' => 'продолжать (делать что-то снова и снова)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 10,
      'phrase_en' => 'to keep up with sth/sb',
      'phrase_uk' => 'встигати за кимось, йти в ногу з кимось, бути в курсі чогось',
      'phrase_ru' => 'успевать за кем-то, идти в ногу с кем-то, быть в курсе чего-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 10,
      'phrase_en' => 'to lose out (on)',
      'phrase_uk' => 'втрачати можливість, шанс',
      'phrase_ru' => 'терять возможность, шанс',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 10,
      'phrase_en' => 'to save up',
      'phrase_uk' => 'економити, відкладати гроші',
      'phrase_ru' => 'экономить, откладывать деньги',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 10,
      'phrase_en' => 'to settle into',
      'phrase_uk' => 'звикати, освоюватися',
      'phrase_ru' => 'привыкать, осваиваться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 10,
      'phrase_en' => 'to think up',
      'phrase_uk' => 'вигадувати, придумувати',
      'phrase_ru' => 'выдумывать, придумывать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 10,
      'phrase_en' => 'to turn into',
      'phrase_uk' => 'змінюватися, перетворюватися, розвиватися',
      'phrase_ru' => 'изменяться, превращаться, развиваться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to back up',
      'phrase_uk' => 'підтримувати',
      'phrase_ru' => 'поддерживать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to beat down',
      'phrase_uk' => 'торгуватися "збивати" ціну',
      'phrase_ru' => 'торговаться "сбивать" цену',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to bring out',
      'phrase_uk' => 'виробляти (випускати щось на продаж)',
      'phrase_ru' => 'производить (выпускать что-то на продажу)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to call at',
      'phrase_uk' => 'наносити короткий візит "забігти"',
      'phrase_ru' => 'нанести короткий визит "забежать"',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to carry on with',
      'phrase_uk' => 'продовжувати діяльність',
      'phrase_ru' => 'продолжать деятельность',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to carry out',
      'phrase_uk' => 'виконувати, робити',
      'phrase_ru' => 'исполнять, делать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to come by',
      'phrase_uk' => 'отримати, дістати щось',
      'phrase_ru' => 'получить, достать что-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to come down',
      'phrase_uk' => 'падати, знижуватися',
      'phrase_ru' => 'падать, снижаться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to come up',
      'phrase_uk' => 'з\'являтися, виходити (про сонце)',
      'phrase_ru' => 'появляться, выходить (о солнце)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to count on',
      'phrase_uk' => 'розраховувати (покладатися на когось)',
      'phrase_ru' => 'рассчитывать (полагаться на кого-то)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to count out',
      'phrase_uk' => 'відраховувати',
      'phrase_ru' => 'отсчитывать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to die for',
      'phrase_uk' => 'дуже сильно хотіти',
      'phrase_ru' => 'очень сильно хотеть',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to do over',
      'phrase_uk' => 'переробляти (роботу, інтер\'єр)',
      'phrase_ru' => 'переделывать (работу, интерьер)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to fall off',
      'phrase_uk' => 'падати, знижуватися (зменшуватися в кількості)',
      'phrase_ru' => 'падать, снижаться (уменьшаться в количестве)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to fall through',
      'phrase_uk' => 'не статися, провалитися',
      'phrase_ru' => 'не произойти, провалиться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to fill in',
      'phrase_uk' => 'заповнювати (форму, анкету)',
      'phrase_ru' => 'заполнять (форму, анкету)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to fill up',
      'phrase_uk' => 'заповнювати, наповнювати',
      'phrase_ru' => 'заполнять, наполнять',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to float around',
      'phrase_uk' => 'бути десь поруч',
      'phrase_ru' => 'быть где-то рядом',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to get ahead',
      'phrase_uk' => 'процвітати, досягати успіху',
      'phrase_ru' => 'процветать, достигать успеха',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to get back',
      'phrase_uk' => 'повертатися (до справ, діяльності)',
      'phrase_ru' => 'возвращаться (к делам, деятельности)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to get out of',
      'phrase_uk' => 'уникати (роботи)',
      'phrase_ru' => 'избегать (работы)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to give off',
      'phrase_uk' => 'виділяти, виробляти (тепло, світло, запах або газ)',
      'phrase_ru' => 'выделять, производить (тепло, свет, запах или газ)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to go about',
      'phrase_uk' => 'приступати до, реалізовувати',
      'phrase_ru' => 'приступать к, реализовывать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to go by',
      'phrase_uk' => 'проходити, минати (про час)',
      'phrase_ru' => 'проходить, истекать (о времени)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to hand out',
      'phrase_uk' => 'роздавати щось (в конкретному місці)',
      'phrase_ru' => 'раздавать что-то (в конкретном месте)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to head up',
      'phrase_uk' => 'очолювати, керувати групою',
      'phrase_ru' => 'возглавлять, руководить группой',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to help out',
      'phrase_uk' => 'допомагати (дати комусь гроші, зробити чиюсь роботу)',
      'phrase_ru' => 'помочь (дать кому-то деньги, сделать чью-то работу)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to hold on',
      'phrase_uk' => 'чекати',
      'phrase_ru' => 'ждать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to jack up',
      'phrase_uk' => 'піднімати важкий об\'єкт, машину (для ремонту)',
      'phrase_ru' => 'поднимать тяжелый объект, машину (для ремонта)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to live on',
      'phrase_uk' => 'жити (на певну суму)',
      'phrase_ru' => 'жить (на определенную сумму)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to look into',
      'phrase_uk' => 'досліджувати, дізнаватися',
      'phrase_ru' => 'исследовать, узнавать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to look through',
      'phrase_uk' => 'переглядати',
      'phrase_ru' => 'просмотреть',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to plate up',
      'phrase_uk' => 'накладати їжу для подачі',
      'phrase_ru' => 'накладывать пищу для подачи',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to print out',
      'phrase_uk' => 'роздрукувати (на принтері)',
      'phrase_ru' => 'распечатать (на принтере)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to pull down',
      'phrase_uk' => 'заробляти',
      'phrase_ru' => 'зарабатывать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to rule out',
      'phrase_uk' => 'виключати когось/щось (вважати невідповідним)',
      'phrase_ru' => 'исключать кого-то/что-то (считать несоответствующим)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to see out',
      'phrase_uk' => 'мати справу/братися за щось',
      'phrase_ru' => 'иметь дело/браться за что-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to sell out',
      'phrase_uk' => 'розпродати',
      'phrase_ru' => 'распродать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to send off',
      'phrase_uk' => 'відправляти, посилати',
      'phrase_ru' => 'отправлять, посылать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to sign sth for sb',
      'phrase_uk' => 'підписувати від чийогось імені',
      'phrase_ru' => 'подписывать от чьего-то имени',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to sign out',
      'phrase_uk' => 'виписуватися при виході',
      'phrase_ru' => 'выписываться при выходе',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to sit down',
      'phrase_uk' => 'садити когось',
      'phrase_ru' => 'посадить кого-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to slip up',
      'phrase_uk' => 'робити помилку, помилятися',
      'phrase_ru' => 'делать ошибку, ошибаться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to sniff at',
      'phrase_uk' => 'зневажати, не схвалювати',
      'phrase_ru' => 'пренебрегать, не одобрять',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to stand up',
      'phrase_uk' => 'стояти, вставати',
      'phrase_ru' => 'стоять, вставать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to stay on',
      'phrase_uk' => 'затримуватися (після уроків, роботи)',
      'phrase_ru' => 'задерживаться (после уроков, работы)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to step up',
      'phrase_uk' => 'посилювати, збільшувати',
      'phrase_ru' => 'усиливать, увеличивать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to stick out',
      'phrase_uk' => 'стирчати',
      'phrase_ru' => 'торчать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to take apart',
      'phrase_uk' => 'розбирати на частини',
      'phrase_ru' => 'разобрать на части',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to take aside',
      'phrase_uk' => 'покликати когось на приватну розмову',
      'phrase_ru' => 'позвать кого-то на частный разговор',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to take on',
      'phrase_uk' => 'брати на себе',
      'phrase_ru' => 'брать на себя',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to take over',
      'phrase_uk' => 'переймати (посаду, керівництво)',
      'phrase_ru' => 'перенимать (должность, руководство)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to take up',
      'phrase_uk' => 'займати (час, місце)',
      'phrase_ru' => 'занимать (время, место)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to work in',
      'phrase_uk' => 'працювати в певній сфері, використовувати певний стиль у мистецтві',
      'phrase_ru' => 'работать в определённой сфере, использовать определённый стиль в искусстве',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to work on',
      'phrase_uk' => 'покращувати, працювати над чимось',
      'phrase_ru' => 'улучшать, работать над чем-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to branch out',
      'phrase_uk' => 'рости, розширюватися',
      'phrase_ru' => 'расти, расширяться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to knock off',
      'phrase_uk' => 'переставати, закінчувати роботу',
      'phrase_ru' => 'перестать, заканчивать работать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to leave sb to sth',
      'phrase_uk' => 'залишати, не торкатися',
      'phrase_ru' => 'оставить, не затрагивать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to move along',
      'phrase_uk' => 'рухатися вперед, просуватися',
      'phrase_ru' => 'двигаться вперед, продвигаться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to brush sb off',
      'phrase_uk' => 'ігнорувати, відшивати когось',
      'phrase_ru' => 'игнорировать, отшивать кого-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to bury oneself in sth',
      'phrase_uk' => 'занурюватися в чомусь',
      'phrase_ru' => 'утопать в чем-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to come across as',
      'phrase_uk' => 'здаватися, виявлятися',
      'phrase_ru' => 'казаться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to draw out',
      'phrase_uk' => 'розтягувати, продовжувати',
      'phrase_ru' => 'растягивать, продолжать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to ease off/up',
      'phrase_uk' => 'знижувати навантаження, послаблювати',
      'phrase_ru' => 'снижать нагрузку, ослаблять',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to factor in sth',
      'phrase_uk' => 'брати до уваги, враховувати',
      'phrase_ru' => 'брать во внимание, учитывать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to fall back on',
      'phrase_uk' => 'покладатися на',
      'phrase_ru' => 'положиться на',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to farm out sth',
      'phrase_uk' => 'передавати щось (для роботи)',
      'phrase_ru' => 'передавать что-то (для работы)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to get bogged down',
      'phrase_uk' => 'загрузнути в, зациклитися на чомусь',
      'phrase_ru' => 'погрязнуть в, зациклиться на чем-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to get in',
      'phrase_uk' => 'вступати на (посаду)',
      'phrase_ru' => 'вступать на (должность)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to hurry sb/sth along',
      'phrase_uk' => 'поспішати, торопити (ся) когось/щось',
      'phrase_ru' => 'торопить (ся) кого-то/что-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to preside over sth',
      'phrase_uk' => 'очолювати щось',
      'phrase_ru' => 'возглавлять что-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to put back',
      'phrase_uk' => 'відкладати, переносити',
      'phrase_ru' => 'откладывать, переносить',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to round up',
      'phrase_uk' => 'збирати',
      'phrase_ru' => 'собирать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to run over sth',
      'phrase_uk' => 'перевіряти, переглядати',
      'phrase_ru' => 'проверять, пересматривать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to see sth through',
      'phrase_uk' => 'доводити щось до кінця',
      'phrase_ru' => 'доводить что-то до конца',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 11,
      'phrase_en' => 'to spin out',
      'phrase_uk' => 'затягувати',
      'phrase_ru' => 'затягивать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to allow for',
      'phrase_uk' => 'враховувати',
      'phrase_ru' => 'брать во внимания, учитывать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'back down',
      'phrase_uk' => 'поступатися, відмовлятися від своєї позиції',
      'phrase_ru' => 'уступать, отказываться от своей позиции',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to back out',
      'phrase_uk' => 'передумати',
      'phrase_ru' => 'передумывать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to bargain for/on',
      'phrase_uk' => 'очікувати (бути готовим до чогось)',
      'phrase_ru' => 'ожидать (быть готовым к чему-то)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to blend in/into',
      'phrase_uk' => 'зливатися (з людьми, речами)',
      'phrase_ru' => 'сливаться (с людьми, вещами)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to build on',
      'phrase_uk' => 'розвивати, покращувати',
      'phrase_ru' => 'развивать, улучшать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to club together',
      'phrase_uk' => '"скидатися" (грошима)',
      'phrase_ru' => '"сбрасываться" (деньгами)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to do away with',
      'phrase_uk' => 'скасовувати, позбавлятися',
      'phrase_ru' => 'отменять, избавляться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to end up',
      'phrase_uk' => 'опинитися; в кінцевому рахунку (стати, зробити і т.д.)',
      'phrase_ru' => 'очутиться; в конечном счёте (стать, сделать и т.д.)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to head for',
      'phrase_uk' => 'слідувати, рухатися до',
      'phrase_ru' => 'следовать, двигаться к',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to jump at',
      'phrase_uk' => 'хапатися за можливості',
      'phrase_ru' => 'ухватиться за возможность(и)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to lay down',
      'phrase_uk' => 'встановлювати/затверджувати (правила, процедури)',
      'phrase_ru' => 'устанавливать/утверждать (правила, процедуры)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to lay out',
      'phrase_uk' => 'розміщувати, встановлювати',
      'phrase_ru' => 'размещать, устанавливать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to look ahead',
      'phrase_uk' => 'розмірковувати про майбутнє, думати наперед',
      'phrase_ru' => 'размышлять о будущем, думать наперед',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to look out',
      'phrase_uk' => 'бути обережним, стежити',
      'phrase_ru' => 'быть осмотрительным, следить',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to look up to',
      'phrase_uk' => 'поважати',
      'phrase_ru' => 'уважать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to pick out',
      'phrase_uk' => 'відбирати',
      'phrase_ru' => 'отбивать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to stand by',
      'phrase_uk' => 'підтримувати',
      'phrase_ru' => 'поддерживать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to stand out',
      'phrase_uk' => 'бути дуже помітним, виділятися',
      'phrase_ru' => 'быть очень заметным, выделяться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to talk into',
      'phrase_uk' => 'переконувати',
      'phrase_ru' => 'уговаривать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to talk out of',
      'phrase_uk' => 'відмовляти від чогось',
      'phrase_ru' => 'убедить не делать что-то, отговаривать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to match up',
      'phrase_uk' => 'збігатися, відповідати',
      'phrase_ru' => 'стекаться, совпадать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to throw out',
      'phrase_uk' => 'виганяти, відхиляти',
      'phrase_ru' => 'выгонять, отклонять',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to turn around',
      'phrase_uk' => 'змінювати на краще',
      'phrase_ru' => 'менять к лучшему',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to water down',
      'phrase_uk' => 'розбавляти водою, пом\'якшувати, послаблювати',
      'phrase_ru' => 'разбавлять водой, смягчать, ослаблять',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to weigh up',
      'phrase_uk' => 'оцінювати, зважувати',
      'phrase_ru' => 'оценивать, взвешивать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to yield to',
      'phrase_uk' => 'поступатися, піддаватися',
      'phrase_ru' => 'уступить, поддаться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to check up on sth/sb',
      'phrase_uk' => 'перевіряти, навідуватися',
      'phrase_ru' => 'проверять, наведываться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to opt out',
      'phrase_uk' => 'відмовлятися',
      'phrase_ru' => 'отказаться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to abide by/adhere to',
      'phrase_uk' => 'дотримуватися',
      'phrase_ru' => 'соблюдать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to accede to sth',
      'phrase_uk' => 'погоджуватися на/з',
      'phrase_ru' => 'соглашаться на/с',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to bow to',
      'phrase_uk' => 'підкорятися, піддаватися',
      'phrase_ru' => 'подчиняться, поддаваться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to build (sth) up',
      'phrase_uk' => 'зміцнювати, створювати, накопичувати',
      'phrase_ru' => 'укреплять, создавать, накапливать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to change sth around/round',
      'phrase_uk' => 'переставляти, міняти місцями',
      'phrase_ru' => 'переставлять, менять местами',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to come round to',
      'phrase_uk' => 'передумати, змінити думку',
      'phrase_ru' => 'передумать, изменить мнение',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to descend to sth',
      'phrase_uk' => 'опускатися до чогось',
      'phrase_ru' => 'опускаться до чего-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to free up',
      'phrase_uk' => 'вивільняти',
      'phrase_ru' => 'высвобождать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to gather up',
      'phrase_uk' => 'збирати',
      'phrase_ru' => 'собирать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to give in',
      'phrase_uk' => 'погоджуватися (після первинної відмови)',
      'phrase_ru' => 'соглашаться (после первоначального отказа)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to hammer out',
      'phrase_uk' => 'досягати згоди, домовлятися',
      'phrase_ru' => 'достигать согласия, договориться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to hold off',
      'phrase_uk' => 'почекати, відкладати',
      'phrase_ru' => 'подождать, откладывать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to lean towards',
      'phrase_uk' => 'схилятися до',
      'phrase_ru' => 'склоняться к',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to make into',
      'phrase_uk' => 'переробляти',
      'phrase_ru' => 'переделать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to move on',
      'phrase_uk' => 'рухатися далі (після складної ситуації)',
      'phrase_ru' => 'двигаться дальше (после сложной ситуации)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to mull sth over',
      'phrase_uk' => 'обдумувати',
      'phrase_ru' => 'обдумывать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to opt for',
      'phrase_uk' => 'зробити вибір на користь, вибрати щось',
      'phrase_ru' => 'сделать выбор в пользу, выбрать что-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to press on',
      'phrase_uk' => 'продовжувати щось робити "піднатиснути"',
      'phrase_ru' => 'продолжать что-то делать "поднажать"',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to put sth behind sb',
      'phrase_uk' => 'залишити позаду',
      'phrase_ru' => 'оставить позади',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to resign oneself to',
      'phrase_uk' => 'миритися з',
      'phrase_ru' => 'смириться с',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to rise above',
      'phrase_uk' => 'бути вище чогось (критики, знущань), не звертати уваги на',
      'phrase_ru' => 'быть выше чего-то (критики, издевательств), не обращать внимание на',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to settle on',
      'phrase_uk' => 'визначатися з',
      'phrase_ru' => 'определиться с',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to side with',
      'phrase_uk' => 'стати на бік, розділити чиюсь думку',
      'phrase_ru' => 'встать на сторону, разделить чьё-то мнение',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to size up',
      'phrase_uk' => 'оцінювати',
      'phrase_ru' => 'оценивать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to skirt around',
      'phrase_uk' => 'уникати',
      'phrase_ru' => 'избегать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to sleep sth off',
      'phrase_uk' => 'відіспатися, відпочити',
      'phrase_ru' => 'отоспаться, проспаться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to space out',
      'phrase_uk' => 'розміщувати, розставляти',
      'phrase_ru' => 'размещать, расставлять',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to stand for',
      'phrase_uk' => 'відстоювати, виступати за',
      'phrase_ru' => 'отстаивать, выступать за',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to tighten sth up',
      'phrase_uk' => 'посилювати',
      'phrase_ru' => 'усиливать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to vote down',
      'phrase_uk' => 'відхиляти шляхом голосування',
      'phrase_ru' => 'отклонять путем голосования',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to win sb round',
      'phrase_uk' => 'переконувати, схиляти когось на свій бік',
      'phrase_ru' => 'уговаривать, склонять кого-то на свою сторону',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 12,
      'phrase_en' => 'to work sth out',
      'phrase_uk' => 'вирішувати, виходити з ситуації',
      'phrase_ru' => 'решать, выходить из ситуации',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 13,
      'phrase_en' => 'to bring about',
      'phrase_uk' => 'породжувати, призводити до',
      'phrase_ru' => 'порождать, приводить к',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 13,
      'phrase_en' => 'to bring off',
      'phrase_uk' => 'успішно справлятися',
      'phrase_ru' => 'успешно справиться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 13,
      'phrase_en' => 'to get around to',
      'phrase_uk' => 'нарешті дістатися до чогось, зробити щось',
      'phrase_ru' => 'наконец добраться до чего-то, сделать что-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 13,
      'phrase_en' => 'to get in',
      'phrase_uk' => 'прибувати, вступати (до університету)',
      'phrase_ru' => 'прибывать, поступать (в университет)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 13,
      'phrase_en' => 'to let up',
      'phrase_uk' => 'покращуватися, закінчуватися (про дощ)',
      'phrase_ru' => 'улучшаться, заканчиваться (о дожде)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 13,
      'phrase_en' => 'to pull in',
      'phrase_uk' => 'приваблювати, збирати',
      'phrase_ru' => 'привлекать, собирать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 13,
      'phrase_en' => 'to put in',
      'phrase_uk' => 'встановлювати',
      'phrase_ru' => 'устанавливать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 13,
      'phrase_en' => 'to tear down',
      'phrase_uk' => 'зносити (будівлі)',
      'phrase_ru' => 'сносить (здания)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 13,
      'phrase_en' => 'to be packed out',
      'phrase_uk' => 'бути заповненим, забитим (людьми)',
      'phrase_ru' => 'быть заполненным, забитым (людьми)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 13,
      'phrase_en' => 'to cram in/into',
      'phrase_uk' => 'втискатися, поміщатися, влізати',
      'phrase_ru' => 'втиснуться, поместиться, влезть',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 13,
      'phrase_en' => 'to freshen up',
      'phrase_uk' => 'освіжитися, освіжати',
      'phrase_ru' => 'освежиться, освежить',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 13,
      'phrase_en' => 'to mill about/around',
      'phrase_uk' => 'слонятися, блукати',
      'phrase_ru' => 'слоняться, блуждать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to aim at/for',
      'phrase_uk' => 'цілитися, бажати',
      'phrase_ru' => 'нацеливаться, желать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to bring up sth',
      'phrase_uk' => 'порушувати (тему), говорити про щось',
      'phrase_ru' => 'затрагивать (тему), говорить о чем-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to come off',
      'phrase_uk' => 'ставати успішним',
      'phrase_ru' => 'становиться успешным',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to draw up',
      'phrase_uk' => 'готувати документи',
      'phrase_ru' => 'готовить документы',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to drop off',
      'phrase_uk' => 'поступово зменшуватися; підвозити',
      'phrase_ru' => 'постепенно уменьшаться; подвозить',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to get over',
      'phrase_uk' => 'знаходити рішення, відчувати себе краще',
      'phrase_ru' => 'найти решение, чувствовать себя лучше',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to go ahead',
      'phrase_uk' => 'продовжувати (рухатися за планом)',
      'phrase_ru' => 'продолжать (двигаться по плану)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to keep to',
      'phrase_uk' => 'дотримуватися чогось',
      'phrase_ru' => 'придерживаться чего-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to look back',
      'phrase_uk' => 'думати про минуле, озиратися в минуле',
      'phrase_ru' => 'думать о прошлом, оглядываться в прошлое',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to make for',
      'phrase_uk' => 'робити можливим, призводити до',
      'phrase_ru' => 'делать возможным, приводить к',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to miss out on',
      'phrase_uk' => 'втрачати шанс, не досягати',
      'phrase_ru' => 'терять шанс, не достигать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to pull out',
      'phrase_uk' => 'відлучати, відстороняти',
      'phrase_ru' => 'отлучать, отстранять',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to put forward',
      'phrase_uk' => 'висувати, пропонувати',
      'phrase_ru' => 'выдвигать, предлагать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to put into',
      'phrase_uk' => 'вкладати у щось, присвячувати багато зусиль/часу',
      'phrase_ru' => 'вкладывать во что-то, посвящать чему-то много усилий/времени',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to put up',
      'phrase_uk' => 'висувати ідею/кандидата',
      'phrase_ru' => 'выдвигать идею/кандидата',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to run over',
      'phrase_uk' => 'перевищувати ліміт, затримуватися',
      'phrase_ru' => 'превышать лимит, задерживаться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to see through',
      'phrase_uk' => 'завершувати',
      'phrase_ru' => 'завершать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to set out',
      'phrase_uk' => 'упорядковувати, викладати, освітлювати',
      'phrase_ru' => 'упорядовачивать, излагать, освещать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to sort out',
      'phrase_uk' => 'налагоджувати щось, розбиратися в чомусь',
      'phrase_ru' => 'наладить что-то, разобраться в чем-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to sound out',
      'phrase_uk' => 'розпитувати, дізнаватися чиєсь думку',
      'phrase_ru' => 'расспрашивать, узнавать чьё-то мнение',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to stand for',
      'phrase_uk' => 'представляти',
      'phrase_ru' => 'представлять',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to stand up for',
      'phrase_uk' => 'підтримувати, захищати',
      'phrase_ru' => 'поддерживать, защищать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to start out',
      'phrase_uk' => 'мати намір',
      'phrase_ru' => 'иметь намерение',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to start up',
      'phrase_uk' => 'відкривати бізнес',
      'phrase_ru' => 'открывать бизнес',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to think through',
      'phrase_uk' => 'обмірковувати',
      'phrase_ru' => 'обдумывать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to throw up',
      'phrase_uk' => 'створювати, виробляти',
      'phrase_ru' => 'создавать, производить',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to turn out',
      'phrase_uk' => 'випускати, виробляти',
      'phrase_ru' => 'выпускать, производить',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to weed out',
      'phrase_uk' => 'позбавлятися, видаляти',
      'phrase_ru' => 'избавляться, удалять',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to wind up',
      'phrase_uk' => 'закривати (підприємство, організацію, бізнес)',
      'phrase_ru' => 'закрывать (предприятие, организацию, бизнес)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to wipe off',
      'phrase_uk' => 'видаляти, стирати',
      'phrase_ru' => 'удалять, стирать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to wise up',
      'phrase_uk' => 'усвідомлювати, розумнішати',
      'phrase_ru' => 'осознавать, умнеть',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to go up',
      'phrase_uk' => 'збільшуватися, рости',
      'phrase_ru' => 'увеличиваться, рости',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to muddle through',
      'phrase_uk' => 'викручуватися, як-небудь довести справу до кінця',
      'phrase_ru' => 'выкарабкаться, кое-как довести дело до конца',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to pull off',
      'phrase_uk' => 'реалізовувати, провернути, здійснити',
      'phrase_ru' => 'реализовать, провернуть, совершить',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to account for',
      'phrase_uk' => 'пояснювати',
      'phrase_ru' => 'объяснять',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to bottom out',
      'phrase_uk' => 'досягати критичної точки',
      'phrase_ru' => 'достичь критической точки',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to bring sb/sth in',
      'phrase_uk' => 'приваблювати',
      'phrase_ru' => 'привлекать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to buoy up',
      'phrase_uk' => 'підтримувати (фінансово)',
      'phrase_ru' => 'поддерживать (финансово)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to buy out',
      'phrase_uk' => 'викупати',
      'phrase_ru' => 'выкупать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to deal in sth',
      'phrase_uk' => 'торгувати чимось',
      'phrase_ru' => 'торговать чем-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to drop back',
      'phrase_uk' => 'падати, повертатися назад',
      'phrase_ru' => 'падать, возвращаться назад',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to dry up',
      'phrase_uk' => 'висихати, зникати',
      'phrase_ru' => 'иссякать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to hinge on sth',
      'phrase_uk' => 'залежати від чогось',
      'phrase_ru' => 'зависеть от чего-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to provide for',
      'phrase_uk' => 'передбачати щось, враховувати',
      'phrase_ru' => 'предсказать что-то, учитывать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to roll out',
      'phrase_uk' => 'впроваджувати',
      'phrase_ru' => 'внедрять',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to round sth up',
      'phrase_uk' => 'округлювати (числа)',
      'phrase_ru' => 'округлять (числа)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to turn sth out',
      'phrase_uk' => 'виготовляти, випускати щось',
      'phrase_ru' => 'изготовлять, выпускать что-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to vouch for',
      'phrase_uk' => 'ручатися, запевняти',
      'phrase_ru' => 'поручать, уверять',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to win back',
      'phrase_uk' => 'відвойовувати, повертати',
      'phrase_ru' => 'отвоевать, вернуть',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 14,
      'phrase_en' => 'to win',
      'phrase_uk' => 'перемагати',
      'phrase_ru' => 'побеждать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 15,
      'phrase_en' => 'to charge up',
      'phrase_uk' => 'заряджати',
      'phrase_ru' => 'заряжать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 15,
      'phrase_en' => 'to hack into',
      'phrase_uk' => 'зламати, проникнути в',
      'phrase_ru' => 'взломать, проникнуть в',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 15,
      'phrase_en' => 'to listen in',
      'phrase_uk' => 'підслуховувати',
      'phrase_ru' => 'подслушивать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 15,
      'phrase_en' => 'to load up',
      'phrase_uk' => 'завантажувати',
      'phrase_ru' => 'загружать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 15,
      'phrase_en' => 'to log in/on',
      'phrase_uk' => 'авторизовуватися, входити',
      'phrase_ru' => 'авторизоваться, входить',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 15,
      'phrase_en' => 'to log off/out',
      'phrase_uk' => 'виходити з системи',
      'phrase_ru' => 'выходить из системы',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 15,
      'phrase_en' => 'to measure out',
      'phrase_uk' => 'відміряти',
      'phrase_ru' => 'отмерять',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 15,
      'phrase_en' => 'to plug in/into',
      'phrase_uk' => 'підключати',
      'phrase_ru' => 'подключать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 15,
      'phrase_en' => 'to pump up',
      'phrase_uk' => 'накачувати, качати',
      'phrase_ru' => 'накачивать, качать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 16,
      'phrase_en' => 'to be pressed for sth',
      'phrase_uk' => 'бути обмеженим у часі',
      'phrase_ru' => 'быть ограниченными во времени',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 16,
      'phrase_en' => 'to bring forward',
      'phrase_uk' => 'переносити',
      'phrase_ru' => 'переносить',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 16,
      'phrase_en' => 'to date back',
      'phrase_uk' => 'датуватися',
      'phrase_ru' => 'датироваться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 16,
      'phrase_en' => 'to drag on',
      'phrase_uk' => 'затягуватися, тривати довше',
      'phrase_ru' => 'затянуться, длиться дольше',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 16,
      'phrase_en' => 'to hang on',
      'phrase_uk' => 'чекати',
      'phrase_ru' => 'подождать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 16,
      'phrase_en' => 'to knock about/around together',
      'phrase_uk' => 'проводити багато часу з кимось',
      'phrase_ru' => 'проводить много времени с кем-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 16,
      'phrase_en' => 'to lie ahead',
      'phrase_uk' => 'чекати попереду',
      'phrase_ru' => 'ждать впереди',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 16,
      'phrase_en' => 'to pass by',
      'phrase_uk' => 'промайнути, проходити',
      'phrase_ru' => 'промелькнуть, проходить',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 17,
      'phrase_en' => 'to bail out',
      'phrase_uk' => 'виручати, допомагати (грошима)',
      'phrase_ru' => 'выручать, помогать (деньгами)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 17,
      'phrase_en' => 'to count out',
      'phrase_uk' => 'відраховувати',
      'phrase_ru' => 'отсчитывать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 17,
      'phrase_en' => 'to pay for',
      'phrase_uk' => 'заплатити за щось',
      'phrase_ru' => 'заплатить за что-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 17,
      'phrase_en' => 'to pay in',
      'phrase_uk' => 'вносити гроші за щось (в банку)',
      'phrase_ru' => 'внести деньги за что-то (в банке)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 17,
      'phrase_en' => 'to pay off',
      'phrase_uk' => 'виплатити борг',
      'phrase_ru' => 'выплатить долг',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 17,
      'phrase_en' => 'to pay back',
      'phrase_uk' => 'повернути гроші',
      'phrase_ru' => 'вернуть деньги',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 17,
      'phrase_en' => 'to plough sth back',
      'phrase_uk' => 'вкладати, реінвестувати',
      'phrase_ru' => 'вкладывать, реинвестировать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 17,
      'phrase_en' => 'to put sth by',
      'phrase_uk' => 'відкладати (гроші)',
      'phrase_ru' => 'откладывать (деньги)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 17,
      'phrase_en' => 'to puzzle sth out',
      'phrase_uk' => 'розібратися',
      'phrase_ru' => 'разобраться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 17,
      'phrase_en' => 'to run through sth',
      'phrase_uk' => 'витрачати (дуже швидко)',
      'phrase_ru' => 'тратить (очень быстро)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 17,
      'phrase_en' => 'to square up',
      'phrase_uk' => 'повертати гроші, виплачувати борг',
      'phrase_ru' => 'возвращать деньги, выплачивать долг',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 17,
      'phrase_en' => 'to work off',
      'phrase_uk' => 'відпрацьовувати',
      'phrase_ru' => 'отрабатывать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 17,
      'phrase_en' => 'to empty out',
      'phrase_uk' => 'спорожняти',
      'phrase_ru' => 'опустошать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 18,
      'phrase_en' => 'to bawl out',
      'phrase_uk' => 'сварити, кричати на когось',
      'phrase_ru' => 'ругать, кричать на кого-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 18,
      'phrase_en' => 'to blow over',
      'phrase_uk' => 'стихати (про скандал)',
      'phrase_ru' => 'затихать (о скандале)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 18,
      'phrase_en' => 'to boil down to',
      'phrase_uk' => 'зводитися до',
      'phrase_ru' => 'сводиться к',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 18,
      'phrase_en' => 'to catch up with',
      'phrase_uk' => 'викликати, доставляти проблеми',
      'phrase_ru' => 'вызывать, доставлять проблемы',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 18,
      'phrase_en' => 'to come out',
      'phrase_uk' => 'з\'являтися, ставати відомим',
      'phrase_ru' => 'появляться, становиться известным',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 18,
      'phrase_en' => 'to come to',
      'phrase_uk' => 'доходити до чогось',
      'phrase_ru' => 'доходить до чего-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 18,
      'phrase_en' => 'to crack down',
      'phrase_uk' => 'приймати суворі міри',
      'phrase_ru' => 'принимать суровые меры',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 18,
      'phrase_en' => 'to fall out',
      'phrase_uk' => 'сперечатися і сваритися',
      'phrase_ru' => 'спорить и ругаться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 18,
      'phrase_en' => 'to figure out',
      'phrase_uk' => 'зрозуміти, розібратися',
      'phrase_ru' => 'понять, разобраться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 18,
      'phrase_en' => 'to get behind',
      'phrase_uk' => 'затримувати',
      'phrase_ru' => 'задерживать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 18,
      'phrase_en' => 'to get sb down',
      'phrase_uk' => 'робити нещасним, пригнічувати когось',
      'phrase_ru' => 'делать несчастным, угнетать кого-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 18,
      'phrase_en' => 'to give in',
      'phrase_uk' => 'поступатися, визнавати поразку',
      'phrase_ru' => 'уступать, признавать поражение',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 18,
      'phrase_en' => 'to go away',
      'phrase_uk' => 'йти',
      'phrase_ru' => 'уходить',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 18,
      'phrase_en' => 'to kick out',
      'phrase_uk' => 'виганяти',
      'phrase_ru' => 'выгонять',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 18,
      'phrase_en' => 'to look down on',
      'phrase_uk' => 'зневажати, дивитися звисока',
      'phrase_ru' => 'пренебрегать, смотреть свысока',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 18,
      'phrase_en' => 'to own up',
      'phrase_uk' => 'зізнаватися',
      'phrase_ru' => 'признаваться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 18,
      'phrase_en' => 'to run down',
      'phrase_uk' => 'критикувати',
      'phrase_ru' => 'критиковать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 18,
      'phrase_en' => 'to set off',
      'phrase_uk' => 'провокувати',
      'phrase_ru' => 'провоцировать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 18,
      'phrase_en' => 'to shut up',
      'phrase_uk' => 'закривати, "затикати рота"',
      'phrase_ru' => 'закрывать, "затыкать рот"',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 18,
      'phrase_en' => 'to talk down to',
      'phrase_uk' => 'говорити свисока',
      'phrase_ru' => 'говорить свысока',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 18,
      'phrase_en' => 'to work out',
      'phrase_uk' => 'налагоджувати, владнати',
      'phrase_ru' => 'налаживать, уладить',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 18,
      'phrase_en' => 'to bank on sth',
      'phrase_uk' => 'сподіватися, покладатися на когось',
      'phrase_ru' => 'надеяться, полагаться на кого-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 18,
      'phrase_en' => 'to break away',
      'phrase_uk' => 'відділятися',
      'phrase_ru' => 'отделяться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 18,
      'phrase_en' => 'to bring sth in',
      'phrase_uk' => 'впроваджувати',
      'phrase_ru' => 'внедрять',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 18,
      'phrase_en' => 'to go against sth/sb',
      'phrase_uk' => 'йти проти чогось (на перекор)',
      'phrase_ru' => 'идти против чего-то (на перекор)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 18,
      'phrase_en' => 'to muddle up',
      'phrase_uk' => 'плутати',
      'phrase_ru' => 'путать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 18,
      'phrase_en' => 'to press sb for sth',
      'phrase_uk' => 'наполягати, добиватися',
      'phrase_ru' => 'настаивать, добиваться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 18,
      'phrase_en' => 'to bring out',
      'phrase_uk' => 'виявляти',
      'phrase_ru' => 'выявлять',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 18,
      'phrase_en' => 'to climb down',
      'phrase_uk' => 'визнавати неправоту, змінювати думку',
      'phrase_ru' => 'признавать неправоту, менять мнение',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 18,
      'phrase_en' => 'to come at',
      'phrase_uk' => 'підходити до (теми питання проблеми), налетіти на когось (з претензіями)',
      'phrase_ru' => 'подходить к (темы вопроса проблемы), налететь на кого-то (с претензиями)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 18,
      'phrase_en' => 'to get by',
      'phrase_uk' => 'виживати, зводити кінці з кінцями',
      'phrase_ru' => 'выживать, сводить концы с концами',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 18,
      'phrase_en' => 'to harp on (about sth)',
      'phrase_uk' => 'скаржитися (постійно та багато)',
      'phrase_ru' => 'жаловаться (постоянно и много)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 18,
      'phrase_en' => 'to impose on',
      'phrase_uk' => 'нав\'язувати',
      'phrase_ru' => 'навязывать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 18,
      'phrase_en' => 'to paper over sth',
      'phrase_uk' => 'завуалювати',
      'phrase_ru' => 'завуалировать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 18,
      'phrase_en' => 'to reason with sb',
      'phrase_uk' => 'переконувати',
      'phrase_ru' => 'убеждать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 18,
      'phrase_en' => 'to round on sb',
      'phrase_uk' => 'злісно кричати на когось',
      'phrase_ru' => 'злостно кричать на кого-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 18,
      'phrase_en' => 'to separate off',
      'phrase_uk' => 'відокремлювати(ся)',
      'phrase_ru' => 'выделять(ся)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 18,
      'phrase_en' => 'to side against sb',
      'phrase_uk' => 'виступати проти когось',
      'phrase_ru' => 'выступать против кого-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to answer back',
      'phrase_uk' => 'грубіянити, сперечатися',
      'phrase_ru' => 'грубиянить, спорить',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to back off',
      'phrase_uk' => 'відступати',
      'phrase_ru' => 'отступать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to back into/in',
      'phrase_uk' => 'вламуватися',
      'phrase_ru' => 'вламываться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to break off',
      'phrase_uk' => 'розривати відносини',
      'phrase_ru' => 'разрывать отношения',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to break out',
      'phrase_uk' => 'починати (конфлікт, війну)',
      'phrase_ru' => 'начинать (конфликт, войну)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to break up',
      'phrase_uk' => 'розходитися, розривати відносини',
      'phrase_ru' => 'расходиться, разрывать отношения',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to burst in/into',
      'phrase_uk' => 'вриватися, заходити без попередження',
      'phrase_ru' => 'врываться, заходить без предупреждения',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to close off',
      'phrase_uk' => 'перекривати, блокувати вхід',
      'phrase_ru' => 'перекрывать, блокировать вход',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to come between',
      'phrase_uk' => 'псувати відносини, заважати',
      'phrase_ru' => 'портить отношения, мешать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to coop up',
      'phrase_uk' => 'замикати когось, утримувати',
      'phrase_ru' => 'закрывать кого-то, удерживать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to cut off',
      'phrase_uk' => 'від\'єднувати, вимикати',
      'phrase_ru' => 'отключать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to feel up',
      'phrase_uk' => 'чіпати когось (в сексуальному сенсі)',
      'phrase_ru' => 'щупать кого-то (в сексуальном значении)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to get away',
      'phrase_uk' => 'тікати',
      'phrase_ru' => 'убегать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to get back at',
      'phrase_uk' => 'мститися',
      'phrase_ru' => 'мстить',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to get by',
      'phrase_uk' => 'проходити повз',
      'phrase_ru' => 'проходить мимо',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to get up to',
      'phrase_uk' => 'задумувати, замишляти',
      'phrase_ru' => 'затевать, замышлять',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to go after',
      'phrase_uk' => 'переслідувати, гнатися',
      'phrase_ru' => 'преследовать, гнаться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to go back on',
      'phrase_uk' => 'не дотримуватися обіцянки',
      'phrase_ru' => 'не сдерживать обещание',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to hand over',
      'phrase_uk' => 'передавати',
      'phrase_ru' => 'передавать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to hold out',
      'phrase_uk' => 'чинити опір, протистояти',
      'phrase_ru' => 'сопротивляться, противостоять',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to hold up',
      'phrase_uk' => 'грабувати',
      'phrase_ru' => 'ограбить',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to keep back',
      'phrase_uk' => 'триматися подалі',
      'phrase_ru' => 'держаться подальше',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to knock out',
      'phrase_uk' => 'вибивати',
      'phrase_ru' => 'вырубить',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to lay off',
      'phrase_uk' => 'звільняти',
      'phrase_ru' => 'увольнять',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to let off',
      'phrase_uk' => 'обійтися без покарання',
      'phrase_ru' => 'обойтись без наказания',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to make off with',
      'phrase_uk' => 'красти і тікати',
      'phrase_ru' => 'украсть и убежать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to make up for',
      'phrase_uk' => 'компенсувати',
      'phrase_ru' => 'компенсировать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to pass away',
      'phrase_uk' => 'помирати',
      'phrase_ru' => 'умирать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to point to',
      'phrase_uk' => 'свідчити про, вказувати на',
      'phrase_ru' => 'свидетельствовать о, указывать на',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to pull over',
      'phrase_uk' => 'зупиняти (машину)',
      'phrase_ru' => 'остановить (машину)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to put down',
      'phrase_uk' => 'класти, опускати',
      'phrase_ru' => 'класть, опускать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to rip off',
      'phrase_uk' => 'обманювати, шахраювати',
      'phrase_ru' => 'обманывать, жульничать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to rub out',
      'phrase_uk' => 'позбуватися від, вбивати',
      'phrase_ru' => 'избавляться от, убивать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to run away',
      'phrase_uk' => 'тікати',
      'phrase_ru' => 'убегать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to screw up',
      'phrase_uk' => 'зминати',
      'phrase_ru' => 'сжимать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to slug it out',
      'phrase_uk' => 'битися',
      'phrase_ru' => 'биться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to swing at',
      'phrase_uk' => 'замахуватися на когось',
      'phrase_ru' => 'замахиваться на кого-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to track down',
      'phrase_uk' => 'розшукувати',
      'phrase_ru' => 'разыскивать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to turn on',
      'phrase_uk' => 'атакувати',
      'phrase_ru' => 'атаковать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to wipe out',
      'phrase_uk' => 'знищувати повністю, вымирать (про населении)',
      'phrase_ru' => 'уничтожать полностью, вымирать (о населении)',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to lead on sb',
      'phrase_uk' => 'вводити в обману',
      'phrase_ru' => 'вводить в обман',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to lean on sb',
      'phrase_uk' => 'покладатися на когось',
      'phrase_ru' => 'положиться на кого-то',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to botch up',
      'phrase_uk' => 'псувати',
      'phrase_ru' => 'испортить',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to capitalise on',
      'phrase_uk' => 'мати вигоду, наживатися на',
      'phrase_ru' => 'иметь выгоду, наживаться на',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to cave in',
      'phrase_uk' => 'піддаватися',
      'phrase_ru' => 'поддаваться',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to clean sb out',
      'phrase_uk' => 'обкрадати',
      'phrase_ru' => 'обворовывать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to hush up',
      'phrase_uk' => 'замовчувати',
      'phrase_ru' => 'умолчать',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to kick out',
      'phrase_uk' => 'виганяти',
      'phrase_ru' => 'выгонять',
      'created_at' => now(),
  ],
]);

DB::table('phrases')->insert([
  [
      'course_id' => 1,
      'section_id' => 19,
      'phrase_en' => 'to resort to',
      'phrase_uk' => 'вдаватися до',
      'phrase_ru' => 'прибегать к',
      'created_at' => now(),
  ],
]);

    }
}
