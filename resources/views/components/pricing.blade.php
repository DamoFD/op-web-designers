@php
    $table1 = [
        'Unlimited Revisions',
        'Hands-free from start to finish',
        'Basic Site (5pages)',
        'Fully custom code',
        'SEO optimized',
        'Hosting, domain, and custom email',
        'Google My Business/Google maps listings',
        'Professionally maintained',
    ];

    $table2 = [
        'Everything from basic',
        'Unlimited pages*',
        'Optimize your blog posts',
        'Back link building strategies',
        'Positive Review Builiding Strategies',
        'Interactive websites',
        'Ecommerce',
        'Email list building strategies',
        'Rank for many keywords',
        'A/B Testing',
        'Forms/Surveys',
        'Full backend and database solutions',
    ];

    $table3 = [
        'Everything from Premium',
        'Employee Management',
        'Customer Portals',
        'SAAS solutions',
        'Custom API endpoints',
        'Custom CRM',
        'Inventory Management',
        'Scheduled SEO optimized blog posts',
    ];
@endphp
<section class="pt-10" id="pricing">
    <h2 class="uppercase bg-gradient-to-r from-brand-primary-300 via-brand-primary-400 to-brand-primary-500 text-transparent bg-clip-text font-extrabold font-inter text-2xl text-center md:text-5xl lg:text-7xl">
        Pricing Plans
    </h2>
    <p class="text-brand-white font-inter px-8 py-4 text-center max-w-7xl md:text-xl md:mt-6 lg:text-3xl">Join our expanding community today! Avail our exclusive Premium plan and secure a lifetime subscription at an <strong class="uppercase text-brand-primary-500">Exceptional discount of 70%</strong>. Act now, as this incredible offer is valid for this month only!</p>
    <div class="w-full flex justify-between space-x-2">
        <div class="mt-24 bg-brand-gray-500 border-2 border-brand-gray-600 rounded-xl flex flex-col justify-between p-4 w-1/3">
            <div>
                <h3 class="text-3xl text-brand-white font-inter font-extrabold">Basic</h3>
                <p class="text-brand-gray-300 font-inter">I just want to get online.</p>
                <p class="text-3xl text-brand-white font-inter font-extrabold">$99.99/Mo</p>
                <ul>
                    @foreach($table1 as $item)
                    <li class="flex items-center space-x-2 mt-2">
                        <img src="{{asset('svg/check.svg')}}" alt="check mark" />
                        <p class="text-brand-gray-300 font-inter">{{$item}}</p>
                    @endforeach
                    </li>
                </ul>
            </div>
            <a class="w-full block text-center font-extrabold text-brand-white bg-gradient-to-r from-brand-gray-400 to-brand-gray-900 px-4 py-2 rounded-xl" href="#">Get Basic</a>
        </div>
        <div class="w-5/12 flex flex-col justify-between rounded-xl bg-brand-primary-500 p-4">
            <div>
                <div class="flex w-full justify-between">
                    <h3 class="text-3xl text-brand-white font-inter font-extrabold">Premium</h3>
                    <div class="rounded-xl flex bg-brand-white bg-opacity-20 items-center px-2">
                        <img class="w-4 h-4" src="{{asset('svg/star.svg')}}" alt="star">
                        <p class="text-brand-white font-inter">Most Popular</p>
                    </div>
                </div>
                <p class="text-brand-white font-inter">I need functional software.</p>
                <p class="text-brand-gray-300 font-inter"><del>$599.99</del>/Mo</p>
                <p class="text-brand-white font-inter font-extrabold text-3xl">$199.99/Mo</p>
                <ul>
                    @foreach ($table2 as $item)
                    <li class="flex items-center space-x-2 mt-2">
                        <img class="text-brand-white" src="{{asset('svg/check-white.svg')}}" alt="check mark">
                        <p class="text-brand-white font-inter">{{$item}}</p>
                    </li>
                    @endforeach
                </ul>
            </div>
            <a class="mt-8 bg-brand-white bg-opacity-20 w-full block rounded-xl text-center py-2 text-brand-white font-extrabold" href="#">Get Premium</a>
        </div>
        <div class="mt-24 flex flex-col justify-between bg-brand-gray-500 border-2 border-brand-gray-600 rounded-xl p-4 w-1/3">
            <div>
                <h3 class="text-3xl text-brand-white font-inter font-extrabold">Enterprise</h3>
                <p class="text-brand-gray-300 font-inter">I need a full business solution.</p>
                <p class="text-3xl text-brand-white font-inter font-extrabold">Contact for Price</p>
                <ul>
                    @foreach($table3 as $item)
                    <li class="flex items-center space-x-2 mt-2">
                        <img src="{{asset('svg/check.svg')}}" alt="check mark" />
                        <p class="text-brand-gray-300 font-inter">{{$item}}</p>
                    @endforeach
                    </li>
                </ul>
            </div>
            <a class="text-center font-extrabold text-brand-white bg-gradient-to-r from-brand-gray-400 to-brand-gray-900 px-4 py-2 rounded-xl" href="#">Get Basic</a>
        </div>
    </div>
</section>
