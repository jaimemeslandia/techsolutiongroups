<div class="api-uf">
    @if ($error)
        <span>UF no esta disponible</span>
    @else
        <span>UF!</span>
        <span>${{ $valor }}</span>
        <span>({{ $fecha }})</span>
    @endif
</div>