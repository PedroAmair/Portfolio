<div>
  @switch($project)
    @case(1)
      <section class="px-10 py-8 bg-zinc-900">
        <button class="absolute top-0 right-0 z-10 py-2 px-3 bg-red-500 hover:bg-red-600 rounded-sm font-serif font-bold" wire:click="$dispatch('closeModal')">X</button>
        <div class="max-w-lg mx-auto relative">
    
          <input id="image-01" type="radio" name="slider" class="sr-only peer/01">
          <input id="image-02" type="radio" name="slider" class="sr-only peer/02">
          <input id="image-03" type="radio" name="slider" class="sr-only peer/03" checked>
          <input id="image-04" type="radio" name="slider" class="sr-only peer/04">
          <input id="image-05" type="radio" name="slider" class="sr-only peer/05">
    
          <div class="
            absolute inset-0 scale-[67.5%] z-20 transition-all duration-500 ease-[cubic-bezier(0.25,1,0.5,1)]
            peer-focus-visible/01:[&_image]:ring
          peer-focus-visible/01:[&_image]:ring-indigo-300
            peer-checked/01:relative
            peer-checked/01:z-50
            peer-checked/01:translate-x-0
            peer-checked/01:scale-100
            peer-checked/01:[&>label]:pointer-events-none
            peer-checked/02:-translate-x-20
            peer-checked/02:scale-[83.75%]
            peer-checked/02:z-40
            peer-checked/03:-translate-x-40
            peer-checked/03:z-30
            peer-checked/04:-translate-x-40                    
            peer-checked/04:opacity-0
            peer-checked/05:-translate-x-40
            ">
            <label class="absolute inset-0" for="image-01"><span class="sr-only"></span></label>
              <div class="w-full">
                <img loading="eager" class="rounded-lg" src="{{asset('img/projects/project'.$project.'/1.webp')}}" alt="image1">
              </div>
          </div>
    
          <div class="
            absolute inset-0 scale-[67.5%] z-20 transition-all duration-500 ease-[cubic-bezier(0.25,1,0.5,1)]
            peer-focus-visible/02:[&_image]:ring
            peer-focus-visible/02:[&_image]:ring-indigo-300                        
            peer-checked/01:translate-x-20
            peer-checked/01:scale-[83.75%]
            peer-checked/01:z-40
            peer-checked/02:relative
            peer-checked/02:z-50
            peer-checked/02:translate-x-0
            peer-checked/02:scale-100
            peer-checked/02:[&>label]:pointer-events-none
            peer-checked/03:-translate-x-20
            peer-checked/03:scale-[83.75%]
            peer-checked/03:z-40
            peer-checked/04:-translate-x-40
            peer-checked/04:z-30
            peer-checked/05:-translate-x-40 
            peer-checked/05:opacity-0
            ">
            <label class="absolute inset-0" for="image-02"><span class="sr-only"></span></label>
              <div class="w-full">
                <img loading="eager" class="rounded-lg" src="{{asset('img/projects/project'.$project.'/2.webp')}}" alt="image2">
              </div>
          </div>
    
          <div class="
            absolute inset-0 scale-[67.5%] z-20 transition-all duration-500 ease-[cubic-bezier(0.25,1,0.5,1)]
            peer-focus-visible/03:[&_image]:ring
            peer-focus-visible/03:[&_image]:ring-indigo-300                          
            peer-checked/01:translate-x-40
            peer-checked/01:z-30
            peer-checked/02:translate-x-20
            peer-checked/02:scale-[83.75%]
            peer-checked/02:z-40
            peer-checked/03:relative
            peer-checked/03:z-50
            peer-checked/03:translate-x-0
            peer-checked/03:scale-100
            peer-checked/03:[&>label]:pointer-events-none
            peer-checked/04:-translate-x-20
            peer-checked/04:scale-[83.75%]
            peer-checked/04:z-40
            peer-checked/05:-translate-x-40
            peer-checked/05:z-30                  
            ">
            <label class="absolute inset-0" for="image-03"><span class="sr-only"></span></label>
              <div class="w-full">
                <img loading="eager" class="rounded-lg" src="{{asset('img/projects/project'.$project.'/3.webp')}}" alt="image3">
              </div>
          </div>
    
          <div class="
            absolute inset-0 scale-[67.5%] z-20 transition-all duration-500 ease-[cubic-bezier(0.25,1,0.5,1)]
            peer-focus-visible/04:[&_image]:ring
            peer-focus-visible/04:[&_image]:ring-indigo-300                          
    
            peer-checked/01:translate-x-40 
            peer-checked/01:opacity-0
            
            peer-checked/02:translate-x-40
            peer-checked/02:z-30
            
            peer-checked/03:translate-x-20
            peer-checked/03:scale-[83.75%]
            peer-checked/03:z-40
    
            peer-checked/04:relative
            peer-checked/04:z-50
            peer-checked/04:translate-x-0
            peer-checked/04:scale-100
            peer-checked/04:[&>label]:pointer-events-none
            
            peer-checked/05:-translate-x-20
            peer-checked/05:scale-[83.75%]
            peer-checked/05:z-40
            ">
            <label class="absolute inset-0" for="image-04"><span class="sr-only"></span></label>
              <div class="w-full">
                <img loading="eager" class="rounded-lg" src="{{asset('img/projects/project'.$project.'/4.webp')}}" alt="image4">
              </div>
          </div>  
    
          <div class="
            absolute inset-0 scale-[67.5%] z-20 transition-all duration-500 ease-[cubic-bezier(0.25,1,0.5,1)]
            peer-focus-visible/05:[&_image]:ring
            peer-focus-visible/05:[&_image]:ring-indigo-300                          
            peer-checked/01:translate-x-40 
            peer-checked/02:translate-x-40 
            peer-checked/02:opacity-0
            peer-checked/03:translate-x-40
            peer-checked/03:z-30
            peer-checked/04:translate-x-20
            peer-checked/04:scale-[83.75%]
            peer-checked/04:z-40
            peer-checked/05:relative
            peer-checked/05:z-50
            peer-checked/05:translate-x-0
            peer-checked/05:scale-100
            peer-checked/05:[&>label]:pointer-events-none
            ">
            <label class="absolute inset-0" for="image-05"><span class="sr-only"></span></label>
              <div class="w-full">
                <img loading="eager" class="rounded-lg" src="{{asset('img/projects/project'.$project.'/5.webp')}}" alt="image5">
              </div>
          </div>                  
        </div>
      </section>
    
      <div class="bg-gray-200">
        <div class="flex flex-col gap-2 mx-4 mb-8 pt-3">
          <p class="font-serif text-xl">
            {{__('messages.project1Content1')}}
          </p>
          <p class="font-serif text-xl">
            {{__('messages.project1Content2')}}
          </p>
          <p class="font-serif text-xl">
            {{__('messages.project1Content3')}}
          </p>
        </div>
      
        <div class="flex justify-around pb-3">
          <div class="mb-6">
            <a class="bg-green-500 py-5 px-7 font-presentation text-lg rounded-full" href="https://polar-springs-50867-129959116230.herokuapp.com/" target="_blank">{{__('messages.webpageButton')}}</a>
          </div>
          <div class="mb-6">
            <a class="bg-blue-500 p-5 font-presentation text-lg rounded-full" href="https://github.com/PedroAmair/Pagina_autos" target="_blank">{{__('messages.repositoryButton')}}</a>
          </div>
        </div>
      </div>
      @break
    @case(2)
      <section class="px-10 py-8 bg-zinc-900">
        <button class="absolute top-0 right-0 z-10 py-2 px-3 bg-red-500 hover:bg-red-600 rounded-sm font-serif font-bold" wire:click="$dispatch('closeModal')">X</button>
        <div class="max-w-lg mx-auto relative">
    
          <input id="image-01" type="radio" name="slider" class="sr-only peer/01">
          <input id="image-02" type="radio" name="slider" class="sr-only peer/02">
          <input id="image-03" type="radio" name="slider" class="sr-only peer/03" checked>
          <input id="image-04" type="radio" name="slider" class="sr-only peer/04">
          <input id="image-05" type="radio" name="slider" class="sr-only peer/05">
    
          <div class="
            absolute inset-0 scale-[67.5%] z-20 transition-all duration-500 ease-[cubic-bezier(0.25,1,0.5,1)]
            peer-focus-visible/01:[&_image]:ring
          peer-focus-visible/01:[&_image]:ring-indigo-300
            peer-checked/01:relative
            peer-checked/01:z-50
            peer-checked/01:translate-x-0
            peer-checked/01:scale-100
            peer-checked/01:[&>label]:pointer-events-none
            peer-checked/02:-translate-x-20
            peer-checked/02:scale-[83.75%]
            peer-checked/02:z-40
            peer-checked/03:-translate-x-40
            peer-checked/03:z-30
            peer-checked/04:-translate-x-40                    
            peer-checked/04:opacity-0
            peer-checked/05:-translate-x-40
            ">
            <label class="absolute inset-0" for="image-01"><span class="sr-only"></span></label>
              <div class="w-full">
                <img loading="eager" class="rounded-lg" src="{{asset('img/projects/project'.$project.'/1.webp')}}" alt="image1">
              </div>
          </div>
    
          <div class="
            absolute inset-0 scale-[67.5%] z-20 transition-all duration-500 ease-[cubic-bezier(0.25,1,0.5,1)]
            peer-focus-visible/02:[&_image]:ring
            peer-focus-visible/02:[&_image]:ring-indigo-300                        
            peer-checked/01:translate-x-20
            peer-checked/01:scale-[83.75%]
            peer-checked/01:z-40
            peer-checked/02:relative
            peer-checked/02:z-50
            peer-checked/02:translate-x-0
            peer-checked/02:scale-100
            peer-checked/02:[&>label]:pointer-events-none
            peer-checked/03:-translate-x-20
            peer-checked/03:scale-[83.75%]
            peer-checked/03:z-40
            peer-checked/04:-translate-x-40
            peer-checked/04:z-30
            peer-checked/05:-translate-x-40 
            peer-checked/05:opacity-0
            ">
            <label class="absolute inset-0" for="image-02"><span class="sr-only"></span></label>
              <div class="w-full">
                <img loading="eager" class="rounded-lg" src="{{asset('img/projects/project'.$project.'/2.webp')}}" alt="image2">
              </div>
          </div>
    
          <div class="
            absolute inset-0 scale-[67.5%] z-20 transition-all duration-500 ease-[cubic-bezier(0.25,1,0.5,1)]
            peer-focus-visible/03:[&_image]:ring
            peer-focus-visible/03:[&_image]:ring-indigo-300                          
            peer-checked/01:translate-x-40
            peer-checked/01:z-30
            peer-checked/02:translate-x-20
            peer-checked/02:scale-[83.75%]
            peer-checked/02:z-40
            peer-checked/03:relative
            peer-checked/03:z-50
            peer-checked/03:translate-x-0
            peer-checked/03:scale-100
            peer-checked/03:[&>label]:pointer-events-none
            peer-checked/04:-translate-x-20
            peer-checked/04:scale-[83.75%]
            peer-checked/04:z-40
            peer-checked/05:-translate-x-40
            peer-checked/05:z-30                  
            ">
            <label class="absolute inset-0" for="image-03"><span class="sr-only"></span></label>
              <div class="w-full">
                <img loading="eager" class="rounded-lg" src="{{asset('img/projects/project'.$project.'/3.webp')}}" alt="image3">
              </div>
          </div>
    
          <div class="
            absolute inset-0 scale-[67.5%] z-20 transition-all duration-500 ease-[cubic-bezier(0.25,1,0.5,1)]
            peer-focus-visible/04:[&_image]:ring
            peer-focus-visible/04:[&_image]:ring-indigo-300                          
    
            peer-checked/01:translate-x-40 
            peer-checked/01:opacity-0
            
            peer-checked/02:translate-x-40
            peer-checked/02:z-30
            
            peer-checked/03:translate-x-20
            peer-checked/03:scale-[83.75%]
            peer-checked/03:z-40
    
            peer-checked/04:relative
            peer-checked/04:z-50
            peer-checked/04:translate-x-0
            peer-checked/04:scale-100
            peer-checked/04:[&>label]:pointer-events-none
            
            peer-checked/05:-translate-x-20
            peer-checked/05:scale-[83.75%]
            peer-checked/05:z-40
            ">
            <label class="absolute inset-0" for="image-04"><span class="sr-only"></span></label>
              <div class="w-full">
                <img loading="eager" class="rounded-lg" src="{{asset('img/projects/project'.$project.'/4.webp')}}" alt="image4">
              </div>
          </div>  
    
          <div class="
            absolute inset-0 scale-[67.5%] z-20 transition-all duration-500 ease-[cubic-bezier(0.25,1,0.5,1)]
            peer-focus-visible/05:[&_image]:ring
            peer-focus-visible/05:[&_image]:ring-indigo-300                          
            peer-checked/01:translate-x-40 
            peer-checked/02:translate-x-40 
            peer-checked/02:opacity-0
            peer-checked/03:translate-x-40
            peer-checked/03:z-30
            peer-checked/04:translate-x-20
            peer-checked/04:scale-[83.75%]
            peer-checked/04:z-40
            peer-checked/05:relative
            peer-checked/05:z-50
            peer-checked/05:translate-x-0
            peer-checked/05:scale-100
            peer-checked/05:[&>label]:pointer-events-none
            ">
            <label class="absolute inset-0" for="image-05"><span class="sr-only"></span></label>
              <div class="w-full">
                <img loading="eager" class="rounded-lg" src="{{asset('img/projects/project'.$project.'/5.webp')}}" alt="image5">
              </div>
          </div>                  
        </div>
      </section>
    
      <div class="bg-gray-200">
        <div class="flex flex-col gap-2 mx-4 mb-8 pt-3">
          <p class="font-serif text-xl">
            {{__('messages.project2Content1')}}
          </p>
          <p class="font-serif text-xl">
            {{__('messages.project2Content2')}}
          </p>
          <p class="font-serif text-xl">
            {{__('messages.project2Content3')}}
          </p>
          <p class="font-serif text-xl">
            {{__('messages.project2Content4')}}
          </p>
        </div>
      
        <div class="flex justify-around pb-3">
          <div class="mb-6">
            <a class="bg-green-500 py-5 px-7 font-presentation text-lg rounded-full" href="https://web-festejos.up.railway.app/" target="_blank">{{__('messages.webpageButton')}}</a>
          </div>
          <div class="mb-6">
            <a class="bg-blue-500 p-5 font-presentation text-lg rounded-full" href="https://github.com/PedroAmair/Pagina_festejos" target="_blank">{{__('messages.repositoryButton')}}</a>
          </div>
        </div>
      </div>
      @break
  
    @case(3)
      <section class="px-10 py-8 bg-zinc-900">
        <button class="absolute top-0 right-0 z-10 py-2 px-3 bg-red-500 hover:bg-red-600 rounded-sm font-serif font-bold" wire:click="$dispatch('closeModal')">X</button>
        <div class="max-w-lg mx-auto relative">
    
          <input id="image-01" type="radio" name="slider" class="sr-only peer/01">
          <input id="image-02" type="radio" name="slider" class="sr-only peer/02">
          <input id="image-03" type="radio" name="slider" class="sr-only peer/03" checked>
          <input id="image-04" type="radio" name="slider" class="sr-only peer/04">
          <input id="image-05" type="radio" name="slider" class="sr-only peer/05">
    
          <div class="
            absolute inset-0 scale-[67.5%] z-20 transition-all duration-500 ease-[cubic-bezier(0.25,1,0.5,1)]
            peer-focus-visible/01:[&_image]:ring
          peer-focus-visible/01:[&_image]:ring-indigo-300
            peer-checked/01:relative
            peer-checked/01:z-50
            peer-checked/01:translate-x-0
            peer-checked/01:scale-100
            peer-checked/01:[&>label]:pointer-events-none
            peer-checked/02:-translate-x-20
            peer-checked/02:scale-[83.75%]
            peer-checked/02:z-40
            peer-checked/03:-translate-x-40
            peer-checked/03:z-30
            peer-checked/04:-translate-x-40                    
            peer-checked/04:opacity-0
            peer-checked/05:-translate-x-40
            ">
            <label class="absolute inset-0" for="image-01"><span class="sr-only"></span></label>
              <div class="w-full">
                <img loading="eager" class="rounded-lg" src="{{asset('img/projects/project'.$project.'/1.webp')}}" alt="image1">
              </div>
          </div>
    
          <div class="
            absolute inset-0 scale-[67.5%] z-20 transition-all duration-500 ease-[cubic-bezier(0.25,1,0.5,1)]
            peer-focus-visible/02:[&_image]:ring
            peer-focus-visible/02:[&_image]:ring-indigo-300                        
            peer-checked/01:translate-x-20
            peer-checked/01:scale-[83.75%]
            peer-checked/01:z-40
            peer-checked/02:relative
            peer-checked/02:z-50
            peer-checked/02:translate-x-0
            peer-checked/02:scale-100
            peer-checked/02:[&>label]:pointer-events-none
            peer-checked/03:-translate-x-20
            peer-checked/03:scale-[83.75%]
            peer-checked/03:z-40
            peer-checked/04:-translate-x-40
            peer-checked/04:z-30
            peer-checked/05:-translate-x-40 
            peer-checked/05:opacity-0
            ">
            <label class="absolute inset-0" for="image-02"><span class="sr-only"></span></label>
              <div class="w-full">
                <img loading="eager" class="rounded-lg" src="{{asset('img/projects/project'.$project.'/2.webp')}}" alt="image2">
              </div>
          </div>
    
          <div class="
            absolute inset-0 scale-[67.5%] z-20 transition-all duration-500 ease-[cubic-bezier(0.25,1,0.5,1)]
            peer-focus-visible/03:[&_image]:ring
            peer-focus-visible/03:[&_image]:ring-indigo-300                          
            peer-checked/01:translate-x-40
            peer-checked/01:z-30
            peer-checked/02:translate-x-20
            peer-checked/02:scale-[83.75%]
            peer-checked/02:z-40
            peer-checked/03:relative
            peer-checked/03:z-50
            peer-checked/03:translate-x-0
            peer-checked/03:scale-100
            peer-checked/03:[&>label]:pointer-events-none
            peer-checked/04:-translate-x-20
            peer-checked/04:scale-[83.75%]
            peer-checked/04:z-40
            peer-checked/05:-translate-x-40
            peer-checked/05:z-30                  
            ">
            <label class="absolute inset-0" for="image-03"><span class="sr-only"></span></label>
              <div class="w-full">
                <img loading="eager" class="rounded-lg" src="{{asset('img/projects/project'.$project.'/3.webp')}}" alt="image3">
              </div>
          </div>
    
          <div class="
            absolute inset-0 scale-[67.5%] z-20 transition-all duration-500 ease-[cubic-bezier(0.25,1,0.5,1)]
            peer-focus-visible/04:[&_image]:ring
            peer-focus-visible/04:[&_image]:ring-indigo-300                          
    
            peer-checked/01:translate-x-40 
            peer-checked/01:opacity-0
            
            peer-checked/02:translate-x-40
            peer-checked/02:z-30
            
            peer-checked/03:translate-x-20
            peer-checked/03:scale-[83.75%]
            peer-checked/03:z-40
    
            peer-checked/04:relative
            peer-checked/04:z-50
            peer-checked/04:translate-x-0
            peer-checked/04:scale-100
            peer-checked/04:[&>label]:pointer-events-none
            
            peer-checked/05:-translate-x-20
            peer-checked/05:scale-[83.75%]
            peer-checked/05:z-40
            ">
            <label class="absolute inset-0" for="image-04"><span class="sr-only"></span></label>
              <div class="w-full">
                <img loading="eager" class="rounded-lg" src="{{asset('img/projects/project'.$project.'/4.webp')}}" alt="image4">
              </div>
          </div>  
    
          <div class="
            absolute inset-0 scale-[67.5%] z-20 transition-all duration-500 ease-[cubic-bezier(0.25,1,0.5,1)]
            peer-focus-visible/05:[&_image]:ring
            peer-focus-visible/05:[&_image]:ring-indigo-300                          
            peer-checked/01:translate-x-40 
            peer-checked/02:translate-x-40 
            peer-checked/02:opacity-0
            peer-checked/03:translate-x-40
            peer-checked/03:z-30
            peer-checked/04:translate-x-20
            peer-checked/04:scale-[83.75%]
            peer-checked/04:z-40
            peer-checked/05:relative
            peer-checked/05:z-50
            peer-checked/05:translate-x-0
            peer-checked/05:scale-100
            peer-checked/05:[&>label]:pointer-events-none
            ">
            <label class="absolute inset-0" for="image-05"><span class="sr-only"></span></label>
              <div class="w-full">
                <img loading="eager" class="rounded-lg" src="{{asset('img/projects/project'.$project.'/5.webp')}}" alt="image5">
              </div>
          </div>                  
        </div>
      </section>
    
      <div class="bg-gray-200">
        <div class="flex flex-col gap-2 mx-4 mb-8 pt-3">
          <p class="font-serif text-xl">
            {{__('messages.project3Content1')}}
          </p>
        </div>
      
        <div class="flex justify-around pb-3">
          <div class="mb-6">
            <a class="bg-green-500 py-5 px-7 font-presentation text-lg rounded-full" href="https://ancient-wave-28600-daae42fca558.herokuapp.com/" target="_blank">{{__('messages.webpageButton')}}</a>
          </div>
          <div class="mb-6">
            <a class="bg-blue-500 p-5 font-presentation text-lg rounded-full" href=" https://github.com/PedroAmair/Pagina_comercio" target="_blank">{{__('messages.repositoryButton')}}</a>
          </div>
        </div>
      </div>
      @break

      @case(4)
      <section class="px-10 py-8 bg-zinc-900">
        <button class="absolute top-0 right-0 z-10 py-2 px-3 bg-red-500 hover:bg-red-600 rounded-sm font-serif font-bold" wire:click="$dispatch('closeModal')">X</button>
        <div class="max-w-lg mx-auto relative">
    
          <input id="image-01" type="radio" name="slider" class="sr-only peer/01">
          <input id="image-02" type="radio" name="slider" class="sr-only peer/02">
          <input id="image-03" type="radio" name="slider" class="sr-only peer/03" checked>
          <input id="image-04" type="radio" name="slider" class="sr-only peer/04">
          <input id="image-05" type="radio" name="slider" class="sr-only peer/05">
    
          <div class="
            absolute inset-0 scale-[67.5%] z-20 transition-all duration-500 ease-[cubic-bezier(0.25,1,0.5,1)]
            peer-focus-visible/01:[&_image]:ring
          peer-focus-visible/01:[&_image]:ring-indigo-300
            peer-checked/01:relative
            peer-checked/01:z-50
            peer-checked/01:translate-x-0
            peer-checked/01:scale-100
            peer-checked/01:[&>label]:pointer-events-none
            peer-checked/02:-translate-x-20
            peer-checked/02:scale-[83.75%]
            peer-checked/02:z-40
            peer-checked/03:-translate-x-40
            peer-checked/03:z-30
            peer-checked/04:-translate-x-40                    
            peer-checked/04:opacity-0
            peer-checked/05:-translate-x-40
            ">
            <label class="absolute inset-0" for="image-01"><span class="sr-only"></span></label>
              <div class="w-full">
                <img loading="eager" class="rounded-lg" src="{{asset('img/projects/project'.$project.'/1.webp')}}" alt="image1">
              </div>
          </div>
    
          <div class="
            absolute inset-0 scale-[67.5%] z-20 transition-all duration-500 ease-[cubic-bezier(0.25,1,0.5,1)]
            peer-focus-visible/02:[&_image]:ring
            peer-focus-visible/02:[&_image]:ring-indigo-300                        
            peer-checked/01:translate-x-20
            peer-checked/01:scale-[83.75%]
            peer-checked/01:z-40
            peer-checked/02:relative
            peer-checked/02:z-50
            peer-checked/02:translate-x-0
            peer-checked/02:scale-100
            peer-checked/02:[&>label]:pointer-events-none
            peer-checked/03:-translate-x-20
            peer-checked/03:scale-[83.75%]
            peer-checked/03:z-40
            peer-checked/04:-translate-x-40
            peer-checked/04:z-30
            peer-checked/05:-translate-x-40 
            peer-checked/05:opacity-0
            ">
            <label class="absolute inset-0" for="image-02"><span class="sr-only"></span></label>
              <div class="w-full">
                <img loading="eager" class="rounded-lg" src="{{asset('img/projects/project'.$project.'/2.webp')}}" alt="image2">
              </div>
          </div>
    
          <div class="
            absolute inset-0 scale-[67.5%] z-20 transition-all duration-500 ease-[cubic-bezier(0.25,1,0.5,1)]
            peer-focus-visible/03:[&_image]:ring
            peer-focus-visible/03:[&_image]:ring-indigo-300                          
            peer-checked/01:translate-x-40
            peer-checked/01:z-30
            peer-checked/02:translate-x-20
            peer-checked/02:scale-[83.75%]
            peer-checked/02:z-40
            peer-checked/03:relative
            peer-checked/03:z-50
            peer-checked/03:translate-x-0
            peer-checked/03:scale-100
            peer-checked/03:[&>label]:pointer-events-none
            peer-checked/04:-translate-x-20
            peer-checked/04:scale-[83.75%]
            peer-checked/04:z-40
            peer-checked/05:-translate-x-40
            peer-checked/05:z-30                  
            ">
            <label class="absolute inset-0" for="image-03"><span class="sr-only"></span></label>
              <div class="w-full">
                <img loading="eager" class="rounded-lg" src="{{asset('img/projects/project'.$project.'/3.webp')}}" alt="image3">
              </div>
          </div>

          <div class="
            absolute inset-0 scale-[67.5%] z-20 transition-all duration-500 ease-[cubic-bezier(0.25,1,0.5,1)]
            peer-focus-visible/04:[&_image]:ring
            peer-focus-visible/04:[&_image]:ring-indigo-300                          
    
            peer-checked/01:translate-x-40 
            peer-checked/01:opacity-0
            
            peer-checked/02:translate-x-40
            peer-checked/02:z-30
            
            peer-checked/03:translate-x-20
            peer-checked/03:scale-[83.75%]
            peer-checked/03:z-40
    
            peer-checked/04:relative
            peer-checked/04:z-50
            peer-checked/04:translate-x-0
            peer-checked/04:scale-100
            peer-checked/04:[&>label]:pointer-events-none
            
            peer-checked/05:-translate-x-20
            peer-checked/05:scale-[83.75%]
            peer-checked/05:z-40
            ">
            <label class="absolute inset-0" for="image-04"><span class="sr-only"></span></label>
              <div class="w-full">
                <img loading="eager" class="rounded-lg" src="{{asset('img/projects/project'.$project.'/4.webp')}}" alt="image4">
              </div>
          </div>  
    
          <div class="
            absolute inset-0 scale-[67.5%] z-20 transition-all duration-500 ease-[cubic-bezier(0.25,1,0.5,1)]
            peer-focus-visible/05:[&_image]:ring
            peer-focus-visible/05:[&_image]:ring-indigo-300                          
            peer-checked/01:translate-x-40 
            peer-checked/02:translate-x-40 
            peer-checked/02:opacity-0
            peer-checked/03:translate-x-40
            peer-checked/03:z-30
            peer-checked/04:translate-x-20
            peer-checked/04:scale-[83.75%]
            peer-checked/04:z-40
            peer-checked/05:relative
            peer-checked/05:z-50
            peer-checked/05:translate-x-0
            peer-checked/05:scale-100
            peer-checked/05:[&>label]:pointer-events-none
            ">
            <label class="absolute inset-0" for="image-05"><span class="sr-only"></span></label>
              <div class="w-full">
                <img loading="eager" class="rounded-lg" src="{{asset('img/projects/project'.$project.'/5.webp')}}" alt="image5">
              </div>
          </div>            
        </div>
      </section>
    
      <div class="bg-gray-200">
        <div class="flex flex-col gap-2 mx-4 mb-8 pt-3">
          <p class="font-serif text-xl">
            {{__('messages.project4Content1')}}
          </p>
          <p class="font-serif text-xl">
            {{__('messages.project4Content2')}}
          </p>
        </div>
      
        <div class="flex justify-around pb-3">
          <div class="mb-6">
            <a class="bg-green-500 py-5 px-7 font-presentation text-lg rounded-full" href="https://dev-hakunamatatasite.pantheonsite.io/" target="_blank">{{__('messages.webpageButton')}}</a>
          </div>
        </div>
      </div>
      @break
  @endswitch
</div>