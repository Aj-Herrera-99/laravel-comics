@php
    $navlinks = [
        ['label' => 'digital comics', 'img' => '/assets/img/buy-comics-digital-comics.png'],
        ['label' => 'dc merchandise', 'img' => '/assets/img/buy-comics-merchandise.png'],
        ['label' => 'subscription', 'img' => '/assets/img/buy-comics-subscriptions.png'],
        ['label' => 'comic shop locator', 'img' => '/assets/img/buy-comics-shop-locator.png'],
        ['label' => 'dc power visa', 'img' => '/assets/img/buy-dc-power-visa.svg'],
    ];
@endphp

<div class="subfooter bg-blue-600 text-white py-12">
    <nav class="flex justify-between items-center">
        @foreach ($navlinks as $link)
            <a href="#" class="scale-95 hover:scale-100 transition-all">
                <div class="flex items-center space-x-3">
                    <div class="aspect-square w-16">
                        <img class="object-contain w-full h-full" src={{ $link['img'] }} alt={{ $link['label'] }}>
                    </div>
                    <h4 class="uppercase text-xl">{{ $link['label'] }}</h4>
                </div>
            </a>
        @endforeach
    </nav>
</div>
