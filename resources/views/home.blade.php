
@extends('layout.app')

@section('content')
    <header>
        <link rel="shortcut icon" type="image/png" href="{{ asset('/img/favicon.png') }}">
        <link rel="shortcut icon" sizes="192x192" href="{{ asset('/img/favicon.png') }}">

        <div class="absolute top-[2%] right-[10%] md:right-[12%] xl:right-[14.5%] 2xl:right-[13.5%] 3xl:right-[13%] 4xl:right-[40.5%] z-10 4xl:z-40 font-serif">
        
            <div class="relative" data-te-dropdown-ref>
                <button
                class="flex items-center whitespace-nowrap rounded px-3 md:px-6 pb-2 pt-2.5 text-xs md:text-base 3xl:text-xl 4xl:text-2xl font-serif mr-4 md:mr-0 uppercase leading-normal text-zinc-900 hover:bg-zinc-300"
                type="button"
                id="dropdownMenuButton1h"
                data-te-dropdown-toggle-ref
                aria-expanded="false"
                data-te-ripple-init
                data-te-ripple-color="light">
                {{__('messages.languagePage')}}
                <span class="ml-2 w-2">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    class="h-5 w-5">
                    <path
                        fill-rule="evenodd"
                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                        clip-rule="evenodd" />
                    </svg>
                </span>
                </button>
                <ul
                class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-clip-padding text-left text-base dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
                aria-labelledby="dropdownMenuButton1h"
                data-te-dropdown-menu-ref>
                <li>
                    <a
                    class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-md 3xl:text-lg 4xl:text-xl font-serif text-zinc-900 hover:bg-zinc-300"
                    href="{{url('Locale/es')}}"
                    data-te-dropdown-item-ref
                    >{{__('messages.languageSelection1')}}</a
                    >
                </li>
                <li>
                    <a
                    class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-md 3xl:text-lg 4xl:text-xl font-serif text-zinc-900 hover:bg-zinc-300 "
                    href="{{url('Locale/en')}}"
                    data-te-dropdown-item-ref
                    >{{__('messages.languageSelection2')}}</a
                    >
                </li>
                </ul>
            </div>
        </div>

        <div class="principal rounded-lg min-h-screen flex items-center justify-center xl:justify-end">
            <div class="mb-[10%] flex flex-col items-center justify-center xl:items-end xl:justify-end">
                <h1 id="sideMovement" class="sideMovement text-zinc-900 text-[3rem] xs:text-[4rem] md:text-[5rem] 2xl:text-[8rem] font-presentation uppercase font-bold xl:mx-16">
                    Pedro Amair
               </h1>
               <p class="imagen text-transparent text-[2.5rem] xs:text-[3rem] 2xl:text-[5rem] font-presentation uppercase font-bold xl:mx-32 2xl:mx-36 mt-[-1.5rem] xs:mt-[-2rem] 2xl:mt-[-3rem]">
                    Web developer
               </p>
            </div>
        </div> 
        <div class="absolute hidden md:inline-block bottom-[5%] md:start-[30%] lg:start-[47%] lg:bottom-[12%] xl:start-[38%]">
            <p id="appearingMovement" class="font-personalWords text-black text-2xl xl:text-3xl 2xl:text-4xl 3xl:text-5xl">
                {{__('messages.myWords')}}
            </p>
        </div>
    </header>

    <main class="my-28">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 bg-gray-300 p-8 rounded-lg">
            <div class="flex flex-col justify-center items-center lg:items-start gap-2 lg:ml-4">
               <h2 class="text-zinc-900 text-3xl 2xl:text-4xl 3xl:text-5xl font-presentation">
                {{__('messages.intro')}}
                </h2>

                <p class="font-serif text-center lg:text-left text-black text-2xl lg:text-lg xl:text-2xl 3xl:text-4xl">
                    {{__('messages.introContent')}}
                </p>
            </div>
            
            <div class="flex flex-col gap-3 items-center">
                <div>
                    <h2 class="techBg bg-center shadow-md shadow-gray-400 text-zinc-900 text-3xl 2xl:text-4xl 3xl:text-5xl font-presentation text-center mb-5 lg:mb-0 lg:mt-[-5rem] bg-white p-5 rounded-lg">{{__('messages.progLanguages')}}</h2>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-3 justify-items-center items-center mb-5 lg:mb-0 gap-x-5">
                    <img loading="lazy" class="w-28" src="{{asset('img/icons/php.png')}}" alt="php logo">
                    <img loading="lazy" class="w-28" src="{{asset('img/icons/html.png')}}" alt="html5 logo">
                    <img loading="lazy" class="w-28" src="{{asset('img/icons/css3.png')}}" alt="css3 logo">
                    <img loading="lazy" class="w-28" src="{{asset('img/icons/javascript.png')}}" alt="javascript logo">
                    <img loading="lazy" class="w-28" src="{{asset('img/icons/sql.png')}}" alt="sql logo">
                </div>
            </div>

            <div class="flex flex-col items-center">
                <div>
                    <h2 class="techBg bg-center shadow-md shadow-gray-400 text-zinc-900 text-3xl 2xl:text-4xl 3xl:text-5xl font-presentation text-center lg:mb-3 xl:mb-5 lg:mt-[-5rem] bg-white p-5 rounded-lg">{{__('messages.progTools')}}</h2>
                </div>

                <div class="grid grid-rows-2 grid-cols-2 justify-items-center items-center">
                    <img loading="lazy" class="w-40 mr-5 sm:mr-0" src="{{asset('img/icons/Laravel.png')}}" alt="laravel logo">
                    <img loading="lazy" class="w-60" src="{{asset('img/icons/Tailwind.png')}}" alt="tailwind logo">
                    <img loading="lazy" class="w-44 self-start 2xl:self-auto" src="{{asset('img/icons/Sass.png')}}" alt="Sass logo">
                    <img loading="lazy" class="w-16 md:w-20 lg:w-16 xl:w-20 2xl:w-24 self-start 2xl:self-auto" src="{{asset('img/icons/Livewire.png')}}" alt="livewire logo">
                </div>
            </div>
        </div>
    </main>

    <section class="mb-28">
        <div class="flex flex-col gap-16">
            <div class="bg-gray-300 text-zinc-900 text-center font-presentation p-5 text-2xl md:text-3xl 2xl:text-4xl 3xl:text-5xl w-full lg:w-2/3 xl:w-1/3 mx-auto rounded-full">
                <h2>{{__('messages.projects')}}</h2>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 justify-items-center">
                <div>
                    <button onclick="Livewire.dispatch('openModal', { component: 'projects-show', arguments: { 'project': 1 }})">
                        <img class="rounded-lg hover:animate-pulse" src="{{asset('img/projects/CarDealership.webp')}}" alt="project1 image">
                    </button>
                </div>

                <div>
                    <button onclick="Livewire.dispatch('openModal', { component: 'projects-show', arguments: { 'project': 2 }})">
                        <img class="rounded-lg hover:animate-pulse" src="{{asset('img/projects/PartyClub.webp')}}" alt="project2 image">
                    </button>
                </div>

                <div>
                    <button onclick="Livewire.dispatch('openModal', { component: 'projects-show', arguments: { 'project': 3 }})">
                        <img class="rounded-lg hover:animate-pulse" src="{{asset('img/projects/PCStore.webp')}}" alt="project2 image">
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection