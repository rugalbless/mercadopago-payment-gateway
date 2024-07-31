<div
    @class([
        "flex items-center justify-between",
        "border-t border-white border-opacity-10 pt-6 text-white" => $isLast ?? false,
    ])
>
    <dt class="text-primary-200">{{ $title }}</dt>
{{--    colocando condição para formtação/estilização do texto --}}
    <dd class="text-secondary-300 text-2xl font-bold @if($isUnderlined) text-base underline  @endif {{ $valueColor }}">{{ $value }}</dd>
</div>
