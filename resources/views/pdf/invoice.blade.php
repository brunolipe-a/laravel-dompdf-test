@php
$pdf ??= true;
@endphp

<x-layouts.pdf margin="2em" :font-size="$pdf ? '12px' : '16px'">
  <div class="pb-3 border-b-1" style="border-color: #000">
    <div class="absolute">
      <img src="logo_grupo_saga.png" alt="Grupo Saga Logo" class="h-9" />
    </div>
    <div class="text-xs text-center">
      <p class="mb-2 text-xl font-bold">{{ $extraData->title }}</p>
      <p class="mb-1">{{ $extraData->subTitle }}</p>
      <p>{{ $extraData->contacts }}</p>
    </div>
    <div class="absolute top-0 right-0 text-sm text-right">
      <p>{{ now()->format('d/m/Y') }}</p>
      <p>{{ now()->format('H:i') }}</p>
    </div>
  </div>
  <h1 class="p-2 text-2xl font-bold text-center">RELATÓRIO DE PRODUTOS EM DEPÓSITO</h1>
  <div class="py-3 text-xl font-bold text-center rounded-md border-1" style="border-color: #7d7d7d">
    TODOS OS DEPÓSITOS
  </div>
  <table class="w-full mt-2 border-separate" style="border-spacing: 0px">
    <thead class="italic">
      <tr class="border-dashed rounded-corners">
        <th>CÓDIGO</th>
        <th style="width: 40%">NOME</th>
        <th>LOTE</th>
        <th style="width: 18%">Qtd. Unid. Primaria</th>
        <th style="width: 18%">Qtd. Unid. Secundaria</th>
      </tr>
    </thead>
    <tbody class="text-sm">
      @foreach ($data as $item)
        <tr class="text-center">
          <td>{{ $item->codigo }}</td>
          <td class="text-left">{{ $item->nome }}</td>
          <td>LOTE</td>
          <td>{{ $item->quantity }}</td>
          <td>{{ $item->quantitySecondary }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>

</x-layouts.pdf>
