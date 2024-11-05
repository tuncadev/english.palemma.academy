@php
$locale = session('locale', 'uk');
@endphp
@extends('layouts.layout')
    @section('navigation')

        <div class="relative w-full bg-top_bar shadow-md">
            <x-nav :locale="$locale" />
        </div>

    @endsection
    @section('content')
        <div class="p-8 bg-gray-100 text-gray-800">
            <h1 class="text-3xl font-bold mb-6">ОФЕРТА</h1>
            <p class="mb-4">Ця Оферта є офіційною пропозицією <strong>ФОП Пальчевська Емма Артурівна (далі – "Ми")</strong> укласти договір на надання освітніх послуг з вивчення англійської мови на умовах, зазначених нижче. Прийняття умов цієї Оферти означає вашу згоду з її положеннями.</p>

            <div class="mb-6">
                <h2 class="text-2xl font-semibold mb-2">1. Загальні положення</h2>
                <p class="mb-2">1.1. Ця Оферта є публічним договором і вважається акцептованою з моменту оплати послуг.</p>
                <p>1.2. Інформація про послуги та їхню вартість доступна на Сайті.</p>
            </div>

            <div class="mb-6">
                <h2 class="text-2xl font-semibold mb-2">2. Предмет договору</h2>
                <p>2.1. Ми зобов'язуємося надати вам доступ до онлайн-курсів з вивчення англійської мови відповідно до обраного вами пакету послуг.</p>
            </div>

            <div class="mb-6">
                <h2 class="text-2xl font-semibold mb-2">3. Порядок оплати</h2>
                <p class="mb-2">3.1. Оплата здійснюється онлайн через платіжну систему <strong>Liqpay.</strong></p>
                <p>3.2. Оплачуючи послуги, ви підтверджуєте свою згоду з умовами цієї Оферти.</p>
            </div>

            <div class="mb-6">
                <h2 class="text-2xl font-semibold mb-2">4. Права та обов'язки сторін</h2>
                <p class="mb-2">4.1. Ми зобов'язуємося надати вам доступ до матеріалів курсу після підтвердження оплати.</p>
                <p>4.2. Ви зобов'язуєтеся не передавати доступ до матеріалів третім особам.</p>
            </div>

            <div class="mb-6">
                <h2 class="text-2xl font-semibold mb-2">5. Відповідальність сторін</h2>
                <p class="mb-2">5.1. Ми не несемо відповідальності за перебої в роботі Сайту з причин, що не залежать від нас.</p>
                <p>5.2. У випадку порушення правил користування Сайтом ми залишаємо за собою право обмежити доступ до послуг.</p>
            </div>

            <div class="mb-6">
                <h2 class="text-2xl font-semibold mb-2">6. Зміни умов Оферти</h2>
                <p>6.1. Ми залишаємо за собою право змінювати умови цієї Оферти в будь-який час, публікуючи нову редакцію на Сайті.</p>
            </div>

            <div class="mb-6 ">
                <h2 class="text-2xl font-semibold mb-4">7. Реквізити</h2>
                <p class="mb-4"><strong>Сайт:</strong> <strong class="text-sky-600">https://english.palemma.academy</strong></p>
                <div class="border border-gray-300 p-4 rounded-lg max-w-xl">
                    <p class="mb-4">ФОП Пальчевська Емма Артурівна</p>
                    <p><strong>Реєстраційний номер:</strong> 2010350000000677290</p>
                    <p><strong>IBAN: </strong>UA183220010000026009350000585</p>
                    <p><strong>ЄДРПОУ: </strong>3198013663</p>
                </div>
                <div class="mt-6 border border-gray-300 p-4 rounded-lg max-w-xl">
                    <p>Акціонерне Товариство УНІВЕРСАЛ БАНК</p>
                    <p><strong>МФО: </strong> 322001</p>
                    <p><strong>ЄДРПОУ Банку: </strong> 21133352</p>
                </div>

            </div>
        </div>
    @endsection
