@php
    $navlinks = ['characters', 'comics', 'movies', 'tv', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'];
@endphp

<header class=" flex justify-between items-center">
    <a href="#" class="max-w-20 cursor-pointer">
        <img width=80 src="/assets/img/dc-logo.png" alt="dc-logo">
    </a>
    <nav>
        <ul class="flex space-x-10 [&_li]:scale-95 [&_li]:hover:scale-100 [&_li]:transition-all [&_li]:cursor-pointer">
            @php
                $count = 0;
            @endphp
            @foreach ($navlinks as $link)
                @if ($count == 1)
                    <li class="uppercase font-semibold text-lg py-8 border-b-12 border-b-blue-600 text-blue-600">
                        <a href="#">{{ $link }}</a>
                    </li>
                @else
                    <li class="uppercase font-semibold text-lg py-8 border-b-12 border-b-transparent">
                        <a href="#">{{ $link }}</a>
                    </li>
                @endif
                @php
                    $count++;
                @endphp
            @endforeach

        </ul>
    </nav>
</header>
