@php
    $socials = [
        'footer-facebook.png',
        'footer-twitter.png',
        'footer-youtube.png',
        'footer-pinterest.png',
        'footer-periscope.png',
    ];
@endphp

<footer style="background-image: url('/assets/img/footer-bg.jpg')" class="bg-blue-300 bg-no-repeat bg-cover">
    <div class="top-footer flex justify-between relative overflow-hidden py-8">
        <div class="grid grid-cols-3 w-[30vw] gap-12 [&_li]:capitalize">
            <div class="space-y-4">
                <h5 class="uppercase text-white text-2xl font-bold mb-3">dc comics</h5>
                <ul class="text-neutral-300">
                    <li><a href="#">characters</a></li>
                    <li><a href="#">comics</a></li>
                    <li><a href="#">movies</a></li>
                    <li><a href="#">tv</a></li>
                    <li><a href="#">games</a></li>
                    <li><a href="#">videos</a></li>
                    <li><a href="#">news</a></li>
                </ul>
                <h5 class="uppercase text-white text-2xl font-bold mb-3">shop</h5>
                <ul class="text-neutral-300">
                    <li><a href="#">shop DC</a></li>
                    <li><a href="#">shop DC collection</a></li>
                </ul>
            </div>
            <div>
                <h5 class="uppercase text-white text-2xl font-bold mb-3">dc</h5>
                <ul class="text-neutral-300">
                    <li><a href="#">terms of use</a></li>
                    <li><a href="#">privacy policy</a></li>
                    <li><a href="#">ad choices</a></li>
                    <li><a href="#">advertising</a></li>
                    <li><a href="#">jobs</a></li>
                    <li><a href="#">subscriptions</a></li>
                    <li><a href="#">talent workshops</a></li>
                    <li><a href="#">certificates</a></li>
                    <li><a href="#">ratings</a></li>
                    <li><a href="#">shop help</a></li>
                    <li><a href="#">contact us</a></li>
                </ul>
            </div>
            <div>
                <h5 class="uppercase text-white text-2xl font-bold mb-3">sites</h5>
                <ul class="text-neutral-300">
                    <li><a href="#">dc</a></li>
                    <li><a href="#">MAD magazine</a></li>
                    <li><a href="#">DC kids</a></li>
                    <li><a href="#">DC universe</a></li>
                    <li><a href="#">DC power visa</a></li>
                </ul>
            </div>
        </div>
        <img class="absolute -top-24 right-64" src="/assets/img/dc-logo-bg.png" alt="dc-logo-bg">
    </div>
    <div class="bottom-footer bg-[#303030] flex justify-between py-12">
        {{-- sign-up btn --}}
        <x-sign-up-btn>
            <x-slot:label>
                sign-up now!
            </x-slot:label>
        </x-sign-up-btn>
        {{-- social media links --}}
        <div class="flex items-center space-x-6">
            <span class="uppercase text-2xl text-blue-600 font-semibold">follow us</span>
            <ul class="flex gap-6">
                @foreach ($socials as $social)
                    <li class="scale-95 hover:scale-110 cursor-pointer transition-all">
                        <img src={{ '/assets/img/' . $social }} alt={{$social}}>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</footer>
