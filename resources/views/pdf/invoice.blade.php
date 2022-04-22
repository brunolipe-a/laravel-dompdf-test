<x-layouts.pdf class="m-8 mb-16" :pdf="$pdf ?? true">
  <x-pdf.header :title="$extraData->title" :info="[$extraData->subTitle, $extraData->contacts]" />

  <h1 class="p-2 text-2xl font-bold text-center">RELATÓRIO DE PRODUTOS EM DEPÓSITO</h1>
  <div class="py-3 text-xl font-bold text-center rounded-md border-1" style="border-color: #7d7d7d">
    TODOS OS DEPÓSITOS
  </div>

  <table class="w-full border-separate striped" style="border-spacing: 0 .25em">
    <thead class="italic">
      <tr class="border-dotted rounded-corners">
        <th>CÓDIGO</th>
        <th style="width: 35%">NOME</th>
        <th>LOTE</th>
        <th style="width: 20%">Qtd. Unid. Primaria</th>
        <th style="width: 20%">Qtd. Unid. Secundaria</th>
      </tr>
    </thead>
    <tbody class="text-sm">
      @foreach ($data as $item)
        <tr class="text-center rounded-corners">
          <td>{{ $item->codigo }}</td>
          <td class="h-12 px-2 text-left">{{ $item->nome }}</td>
          <td class="text-base italic">LOTE</td>
          <td>{{ $item->quantity }}</td>
          <td>{{ $item->quantitySecondary }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</x-layouts.pdf>
