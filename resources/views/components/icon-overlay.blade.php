<div class="relative w-[150px] h-[150px]">
    <div class="
        bg-gradient-to-r
        @if ($color === 'red')
            from-[#FF7293]
            to-[#FF3565]
        @elseif ($color === 'orange')
            from-[#FE9A8A]
            to-[#F56940]
        @elseif ($color === 'blue')
            from-[#64ACFF]
            to-[#272ABB]
        @else
            from-[#AD3391]
            to-[#6A1983]
        @endif
        w-[100px]
        h-[100px]
        rounded-xl"
         ></div>
        <div class="
            bg-brand-white
            backdrop-blur-md
            bg-opacity-30
            w-[100px]
            h-[100px]
            rounded-xl
            absolute
            right-0
            bottom-0
            flex
            justify-center
            items-center"
        >
            <img src="{{ asset('svg/' . $icon . '.svg') }}" alt="{{$icon}}">
        </div>
</div>
