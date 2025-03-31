@props(['comic'])

<div class="max-w-72 aspect-[11/12] cursor-pointer">
    <div class="aspect-square overflow-hidden">
        <img class="object-cover object-top" src={{ $comic['thumb'] }} alt={{ $comic['title'] }}>
    </div>
    <div>
        <h4 title={{ $comic['series'] }} class="text-xl mt-2 uppercase line-clamp-2">{{ $comic['series'] }}</h4>
    </div>
</div>
