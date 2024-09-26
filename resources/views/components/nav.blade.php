<nav {{$attributes->merge(['class'=>''])}}>
    <x-navigation-wrap>
        <div class="flex flex-nowrap justify-between w-full">
            <x-top-logo />
            <x-user-menu :currentLocale="$locale" />
        </div>
        <x-menu class="md:absolute md:left-1/2 md:transform md:-translate-x-1/2"/>
    </x-navigation-wrap>
</nav>
