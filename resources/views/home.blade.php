<x-app-layout>
    <section class="w-full flex flex-col items-center mt-24 relative h-[calc(100vh-10rem)] overflow-hidden" id="hero">
        <h1 class="uppercase bg-gradient-to-r from-brand-primary-300 via-brand-primary-400 to-brand-primary-500 text-transparent bg-clip-text font-extrabold font-inter text-2xl text-center leading-[3rem] lg:text-3xl">
            <span>OP Web Designers</span>
            <span>Transforming The Digital</span>
            <span>Landscape In Reno NV</span>
        </h1>
        <ul class="flex text-brand-gray-200 space-x-4 font-inter">
            <li class="flex">
                <p>SEO</p>
            </li>
            <li class="flex">
                <img class="mr-4" src="{{asset('svg/dot.svg')}}" alt="dot" />
                <p>Design</p>
            </li>
            <li class="flex">
                <img class="mr-4" src="{{asset('svg/dot.svg')}}" alt="dot" />
                <p>Develop</p>
            </li>
        </ul>
        <p class="text-brand-white font-inter px-8 py-4 text-center">In the <strong class="uppercase">heart</strong> of Nevada, a collective of <em>creative minds</em> is reshaping the digital world. We at OP Web Designers, are <strong class="uppercase">pushing</strong> the boundaries of the web design industry.</p>
        <div class="flex space-x-4 items-center">
            <a href="{{route('contact')}}" class="bg-brand-primary-500 text-brand-white font-extrabold font-inter py-2 px-4 rounded-full hover:bg-brand-primary-600 uppercase">Contact Now</a>
            <a href="#pricing" class="border-2 border-brand-white text-brand-white font-extrabold font-inter py-2 px-4 rounded-full hover:text-brand-primary-500 uppercase">View Pricing</a>
        </div>
        <img class="mt-8" src="{{asset('svg/slipstream.svg')}}" alt="slipstream" />
        <p class="text-brand-gray-400 text-4xl mt-4">BiddingFans.</p>
        <p class="text-brand-gray-400 text-4xl mt-4">Jibbr.</p>
        <div class="absolute -bottom-[800px]">
            <x-sphere />
        </div>
    </section>
    <section id="pricing">

    </section>
</x-app-layout>
