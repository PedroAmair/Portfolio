
@extends('layout.app')

@section('content')
    <header>
        <link rel="shortcut icon" type="image/png" href="{{ asset('/img/favicon.png') }}">
        <link rel="shortcut icon" sizes="192x192" href="{{ asset('/img/favicon.png') }}">

        <div class="absolute top-[2%] right-[10%] md:right-[12%] xl:right-[14.5%] 2xl:right-[13.5%] 3xl:right-[13%] 4xl:right-[40.5%] z-30 4xl:z-40 font-serif">
        
            <div class="relative" data-te-dropdown-ref>
                <button
                class="flex items-center whitespace-nowrap rounded px-3 md:px-6 pb-2 pt-2.5 text-xs md:text-base 3xl:text-xl 4xl:text-2xl font-serif mr-[-2rem] md:mr-0 uppercase leading-normal text-zinc-900 hover:bg-zinc-300"
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
                class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border border-zinc-200 bg-white text-left text-base shadow-lg [&[data-te-dropdown-show]]:block"
                aria-labelledby="dropdownMenuButton1h"
                data-te-dropdown-menu-ref>
                <li>
                    <a
                    class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-md 3xl:text-lg 4xl:text-xl font-serif text-zinc-900 hover:bg-accent hover:text-black"
                    href="{{url('Locale/es')}}"
                    data-te-dropdown-item-ref
                    >{{__('messages.languageSelection1')}}</a
                    >
                </li>
                <li>
                    <a
                    class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-md 3xl:text-lg 4xl:text-xl font-serif text-zinc-900 hover:bg-accent hover:text-black"
                    href="{{url('Locale/en')}}"
                    data-te-dropdown-item-ref
                    >{{__('messages.languageSelection2')}}</a
                    >
                </li>
                </ul>
            </div>
        </div>

        <div class="principal rounded-lg min-h-screen flex items-center justify-center">
            <video class="principal-video" src="{{ asset('videos/fondo.mp4') }}" autoplay muted loop playsinline preload="metadata"></video>
            <div class="principal-overlay" aria-hidden="true"></div>
            <div class="mb-[10%] relative z-10 flex flex-col items-center justify-center">
                <h1 id="sideMovement" class="vanish sideMovement text-zinc-900 text-[3rem] xs:text-[4rem] md:text-[5rem] 2xl:text-[8rem] font-presentation uppercase font-bold">
                    Pedro Amair
               </h1>
               <div class="flex flex-col items-center mt-[-1rem]">
                    <p class="vanish imagen text-transparent text-[2rem] xs:text-[2.5rem] md:text-[3.5rem] 2xl:text-[5rem] font-presentation uppercase font-bold">
                        Web developer
                    </p>
                </div>
            </div>
        </div> 
        <div class="absolute hidden md:inline-block bottom-[15%] left-1/2 -translate-x-1/2 lg:bottom-[18%] z-10">
            <p id="appearingMovement" class="font-personalWords text-zinc-900 text-2xl xl:text-3xl 2xl:text-4xl 3xl:text-5xl">
                {{__('messages.myWords')}}
            </p>
        </div>
        <div class="absolute bottom-4 left-1/2 -translate-x-1/2 z-10">
            <button type="button" onclick="scrollPastHero()" aria-label="Bajar" class="scroll-indicator text-zinc-900 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
        </div>
    </header>

    <main class="my-28">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 bg-gray-300 p-8 rounded-lg">
            <div class="reveal flex flex-col justify-center items-center lg:items-start gap-2 lg:ml-4">
               <h2 class="text-zinc-900 text-3xl 2xl:text-4xl 3xl:text-5xl font-presentation">
                {{__('messages.intro')}}
                </h2>

                <p class="font-body text-center lg:text-left text-black text-2xl lg:text-lg xl:text-2xl 3xl:text-4xl">
                    {{__('messages.introContent')}}
                </p>
            </div>
            
            <div class="reveal reveal-delay-1 flex flex-col gap-3 items-center">
                <div>
                    <h2 class="techBg bg-center shadow-md shadow-gray-400 text-zinc-900 text-3xl 2xl:text-4xl 3xl:text-5xl font-presentation text-center mb-5 lg:mb-0 lg:mt-[-5rem] bg-white p-5 rounded-lg">{{__('messages.progLanguages')}}</h2>
                </div>

                <div class="grid grid-cols-3 gap-4 my-4">
                    <div class="tech-icon">
                        <img class="h-20 w-20 object-contain self-center justify-self-center" src="{{asset('img/icons/php.png')}}" />
                        </div>
                    <div class="tech-icon">
                        <img class="h-16 w-16 object-contain self-center justify-self-center" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/html5/html5-original.svg" />
                        </div>
                    <div class="tech-icon">
                        <img class="h-16 w-16 object-contain self-center justify-self-center" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/css3/css3-original.svg" />
                        </div>
                    <div class="tech-icon">
                        <img class="h-16 w-16 object-contain self-center justify-self-center" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/javascript/javascript-original.svg" />
                        </div>
                    <div class="tech-icon col-start-3">
                        <img class="h-16 w-16 object-contain self-center justify-self-center" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/azuresqldatabase/azuresqldatabase-original.svg" />
                        </div>
                </div>
            </div>

            <div class="reveal reveal-delay-2 flex flex-col gap-3 items-center">
                <div>
                    <h2 class="techBg bg-center shadow-md shadow-gray-400 text-zinc-900 text-3xl 2xl:text-4xl 3xl:text-5xl font-presentation text-center mb-5 lg:mb-0 lg:mt-[-5rem] bg-white p-5 rounded-lg">{{__('messages.progTools')}}</h2>
                </div>

                <div class="grid grid-cols-3 gap-5 my-4">
                    <div class="tech-icon">
                        <img class="w-16 h-16 object-contain self-center justify-self-center" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/laravel/laravel-original.svg" />
                        </div>
                    <div class="tech-icon">
                        <img class="w-16 h-16 object-contain self-center justify-self-center" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/vuejs/vuejs-original.svg" />
                        </div>
                    <div class="tech-icon">
                        <img class="w-16 h-16 object-contain self-center justify-self-center" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/tailwindcss/tailwindcss-original.svg" />
                        </div>
                    <div class="tech-icon">
                        <img class="w-16 h-16 object-contain self-center justify-self-center" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/sass/sass-original.svg" />
                        </div>
                    <div class="tech-icon">
                        <img class="w-16 h-16 object-contain self-center justify-self-center" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/livewire/livewire-original.svg" />
                        </div>
                    <div class="tech-icon">
                        <img class="w-16 h-16 object-contain self-center justify-self-center" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/wordpress/wordpress-plain.svg" />
                        </div>
                </div>
            </div>
        </div>
    </main>

@php
    $projects = [
    ['id' => 7, 'title' => 'project7Title', 'subtitle' => 'project7SubTitle', 'image' => 'img/projects/bomberos.webp'],
    ['id' => 6, 'title' => 'project6Title', 'subtitle' => 'project6SubTitle', 'image' => 'img/projects/zackServices.webp'],
    ['id' => 5, 'title' => 'project5Title', 'subtitle' => 'project5SubTitle', 'image' => 'img/projects/fanal.webp'],
    ['id' => 4, 'title' => 'project1Title', 'subtitle' => 'project1SubTitle', 'image' => 'img/projects/hakunamatata.webp'],
    ['id' => 3, 'title' => 'project2Title', 'subtitle' => 'project2SubTitle', 'image' => 'img/projects/PCStore.webp'],
    ['id' => 1, 'title' => 'project3Title', 'subtitle' => 'project3SubTitle', 'image' => 'img/projects/CarDealership.webp'],
    ['id' => 2, 'title' => 'project4Title', 'subtitle' => 'project4SubTitle', 'image' => 'img/projects/PartyClub.webp'],
    ];

    $pageSize = 3;
    $currentPage = max(1, (int) request()->get('page', 1));
    $totalItems = count($projects);
    $totalPages = (int) ceil($totalItems / $pageSize);

    if ($totalPages < 1) {
        $totalPages = 1;
    }

    if ($currentPage > $totalPages) {
        $currentPage = $totalPages;
    }

    $start = ($currentPage - 1) * $pageSize;
    $pagedProjects = array_slice($projects, $start, $pageSize);

    $baseUrl = request()->url();
    $queryWithPage = function($p) use ($baseUrl) {
        return "{$baseUrl}?" . http_build_query(array_merge(request()->except('page'), ['page' => $p]));
    };

    $prevPage = max(1, $currentPage - 1);
    $nextPage = min($totalPages, $currentPage + 1);
@endphp

    <section class="mb-28">
        <div class="flex flex-col gap-16">
            <div class="reveal bg-gray-300 text-zinc-900 text-center font-presentation p-5 text-2xl md:text-3xl 2xl:text-4xl 3xl:text-5xl w-4/5 md:w-2/3 xl:w-1/3 mx-auto rounded-lg">
                <h2>{{__('messages.projects')}}</h2>
            </div>
            
            <div id="list-container">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 justify-items-center">
                 @foreach ($pagedProjects as $p)
                    <div class="containere w-11/12 md:w-full reveal @if($loop->iteration === 1) reveal-delay-1 @elseif($loop->iteration === 2) reveal-delay-2 @elseif($loop->iteration === 3) reveal-delay-3 @endif">
                    <button class="card relative" onclick="Livewire.dispatch('openModal', { component: 'projects-show', arguments: { 'project': {{ $p['id'] }} }})" aria-label="Ver proyecto">
                        <!-- Capa de texto visible por defecto -->
                        <div class="card-face text-layer absolute inset-0 flex items-center justify-center p-4 pointer-events-none">
                        <div class="text-center">
                            <h3 class="text-lg font-semibold mb-1">{{ __('messages.' . $p['title']) }}</h3>
                            <p class="text-sm">{{ __('messages.' . $p['subtitle']) }}</p>
                        </div>
                        </div>
                        <!-- Capa de imagen oculta por defecto -->
                        <div class="card-face image-layer absolute inset-0 opacity-0 pointer-events-none">
                        <img class="w-full h-full object-cover border-2 border-double p-2 border-gray-300" src="{{ asset($p['image']) }}" alt="project{{ $p['id'] }} image">
                        </div>
                    </button>
                    </div>
                @endforeach
            </div>

            <!-- Paginación simple -->
            @if ($totalPages > 1)
            <div id="paginacion" class="flex flex-wrap justify-center gap-2 mt-16">
                <a href="?page={{ $prevPage }}" aria-label="@lang('pagination.previous')" class="px-4 py-2 border rounded transition-colors duration-200 {{ $currentPage == 1 ? 'pointer-events-none opacity-40 cursor-not-allowed bg-gray-300' : 'bg-gray-300 hover:bg-white hover:text-black' }}">
                    @lang('pagination.previous')
                </a>
                @for ($i = 1; $i <= $totalPages; $i++)
                    <a href="?page={{ $i }}" class="px-4 py-2 border rounded transition-colors duration-200 {{ $i == $currentPage ? 'bg-accent text-black border-accent font-semibold' : 'bg-gray-300 hover:bg-white hover:text-black' }}">
                        {{ $i }}
                    </a>
                @endfor
                <a href="?page={{ $nextPage }}" aria-label="@lang('pagination.next')" class="px-4 py-2 border rounded transition-colors duration-200 {{ $currentPage == $totalPages ? 'pointer-events-none opacity-40 cursor-not-allowed bg-gray-300' : 'bg-gray-300 hover:bg-white hover:text-black' }}">
                    @lang('pagination.next')
                </a>
            </div>
            @endif
        </div>
    </section>

    <script>
        function scrollPastHero() {
            var main = document.querySelector('main');
            if (main) {
                main.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }
    </script>
@endsection