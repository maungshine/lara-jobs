@props(['size' => 'base', 'tag'])

@php
    $classes ="bg-white/10 font-bold hover:bg-white/20 rounded-xl transition-colors duration-300";

    if($size == 'base') {
        $classes .= " px-5 py-1 text-sm";
    }
    if($size == 'small') {
        $classes .= " px-3 py-1 text-2xs";
    }
@endphp

<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $classes }}" >{{ $tag->name }}</a>