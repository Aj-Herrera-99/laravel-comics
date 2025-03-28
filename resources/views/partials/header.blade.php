@php
    $navlinks = ['characters', 'comics', 'movies', 'tv', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'];
@endphp

<header class=" flex justify-between items-center">
    <div class="max-w-20">
        <img width=80 src="/assets/img/dc-logo.png" alt="dc-logo">
    </div>
    <nav>
        <ul class="flex space-x-10">
            @php
                $count = 0;
            @endphp
            @foreach ($navlinks as $link)
                @if ($count == 1)
                    <li class="uppercase font-semibold text-lg py-8 border-b-12 border-b-blue-500 text-blue-500">
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
