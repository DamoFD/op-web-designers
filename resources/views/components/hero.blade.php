<section class="w-full flex flex-col items-center mt-24 relative h-[calc(100vh-10rem)] overflow-hidden lg:mt-16 lg:h-[calc(100vh-8rem)]" id="hero">
    <h1 class="uppercase bg-gradient-to-r from-brand-primary-300 via-brand-primary-400 to-brand-primary-500 text-transparent bg-clip-text font-extrabold font-inter text-2xl text-center leading-[3rem] flex flex-col md:leading-[5rem] md:text-5xl lg:leading-[7rem] lg:text-7xl">
        <span>OP Web Designers</span>
        <span>Transforming The Digital</span>
        <span>Landscape In Reno NV</span>
    </h1>
    <ul class="flex text-brand-gray-200 space-x-4 font-inter md:text-3xl lg:text-4xl">
        <li>
            <p>SEO</p>
        </li>
        <li class="flex items-center">
            <img class="mr-4 md:w-6 md:h-6" src="{{asset('svg/dot.svg')}}" alt="dot" />
            <p>Design</p>
        </li>
        <li class="flex items-center">
            <img class="mr-4 md:w-6 md:h-6" src="{{asset('svg/dot.svg')}}" alt="dot" />
            <p>Develop</p>
        </li>
    </ul>
    <p class="text-brand-white font-inter px-8 py-4 text-center max-w-7xl md:text-xl md:mt-6 lg:text-3xl">In the <strong class="uppercase">heart</strong> of Nevada, a collective of <em>creative minds</em> is reshaping the digital world. We at OP Web Designers, are <strong class="uppercase">pushing</strong> the boundaries of the web design industry.</p>
    <div class="flex space-x-4 items-center md:space-x-6 md:mt-6 lg:space-x-44">
        <a href="{{route('contact')}}" class="bg-brand-primary-500 text-brand-white font-extrabold font-inter py-2 px-4 rounded-full hover:bg-brand-primary-600 uppercase md:text-xl lg:text-2xl lg:px-8 lg:py-4">Contact Now</a>
        <a href="#pricing" class="border-2 border-brand-white text-brand-white font-extrabold font-inter py-2 px-4 rounded-full hover:text-brand-primary-500 uppercase md:text-xl lg:text-2xl lg:px-8 lg:py-4">View Pricing</a>
    </div>
    <div class="flex flex-col items-center mt-8 md:mt-12 lg:flex-row lg:justify-between lg:w-3/4 lg:text-center">
        <div class="lg:w-1/3">
            <img class="md:w-96" src="{{asset('svg/slipstream.svg')}}" alt="slipstream" />
        </div>
        <p class="text-brand-gray-400 text-5xl mt-4 lg:mt-0 lg:w-1/3">BiddingFans.</p>
        <p class="text-brand-gray-400 text-5xl mt-4 lg:w-1/3">Jibbr.</p>
    </div>
    <div class="absolute -bottom-[800px]">
        <x-sphere />
    </div>
</section>
