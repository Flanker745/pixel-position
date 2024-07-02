@props(["employer" ,'width' => 90])
<img class="w-[{{ $width }}px] rounded-lg hover:scale-105 duration-300" src="{{ Storage::url($employer->logo) }}"  alt="">
