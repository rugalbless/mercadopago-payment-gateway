<div
    @class([
        "flex items-center justify-between",
        "border-t border-white border-opacity-10 pt-6 text-white" => $isLast ?? false,
    ])
>
    {{--    colocando variaveis para passar condições para formatação/estilização do texto --}}
    <dt class="text-green-600 text-2xl font-extrabold @if($issubInfo)text-base font-normal text-neutral-200  @endif ">{{ $title }}</dt>
    <dd class="text-secondary-300 text-2xl font-bold @if($isUnderlined) text-sm text-slate-300 underline  @endif ">@money($value)</dd>
</div>
