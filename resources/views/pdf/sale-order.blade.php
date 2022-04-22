<x-layouts.pdf class="m-10 mb-16" size="a4 landscape" :pdf="$pdf ?? true">
  <x-pdf.header :title="$extraData->title" :info="[$extraData->subTitle, $extraData->contacts]" />

  <div class="mx-3">
    <h1 class="p-3 text-2xl font-bold text-center">PEDIDO DE VENDA - nº <i>{{ $order->order_code }}</i></h1>
    <div class="px-2 py-1 rounded-md border-1" style="border-color: #8a8a8a">
      <table class="w-full text-sm">
        <tbody>
          <tr>
            <td class="pb-2 border-dotted border-b-1 border-default">
              <strong>Vendedor(a): </strong> {{ $order->seller->name }}
            </td>
            <td class="pb-2 border-dotted border-b-1 border-default">
              <strong>Representante: </strong> {{ $order->representative }}
            </td>
            <td class="pb-2 border-dotted border-b-1 border-default">
              <strong>Data do Pedido: </strong> {{ $order->order_date }}
            </td>
            <td class="pb-2 border-dotted border-b-1 border-default">
              <strong>Previsão de expedição: </strong> {{ $order->data_expedicao }}
            </td>
          </tr>
          <tr>
            <td class="pt-2">
              <strong>Cliente nº: </strong> <i>{{ $order->client->id }}</i>
            </td>
            <td class="pt-2">
              <strong>Nome / Razão Social: </strong> <i>{{ $order->client->name }}</i>
            </td>
            <td class="pt-2">
              <strong>CPF / CNPJ: </strong> {{ $order->client->identifier }}
            </td>
            <td class="pt-2">
              <strong>IE: </strong> {{ $order->client->inscricao_estadual }}
            </td>
          </tr>
          <tr>
            <td class="pt-2 text-xs" colspan="4">
              <strong>Endereço Faturamento: </strong> {{ $order->addresses->billing_address }}
            </td>
          </tr>
          <tr>
            <td class="pt-1 text-xs" colspan="4">
              <strong>Endereço Entrega: </strong> {{ $order->addresses->delivery_address }}
            </td>
          </tr>
          <tr>
            <td class="pt-1 pb-2 text-xs border-dotted border-b-1 border-default" colspan="4">
              <strong>Endereço Cobrança: </strong> {{ $order->addresses->collection_address }}
            </td>
          </tr>
          <tr>
            <td class="pt-2" colspan="2">
              <strong>Plano de Venda: </strong> {{ $order->sales_plan }}
            </td>
            <td class="pt-2" colspan="2">
              <strong>Tabela de Preço: </strong> {{ $order->price_table }}
            </td>
          </tr>
          <tr>
            <td class="pt-2" colspan="2">
              <strong>Tipo de Cobrança: </strong> {{ $order->collection_type }}
            </td>
            <td class="pt-2" colspan="2">
              <strong>Tipo de Frete: </strong> {{ $order->freight_type }}
            </td>
          </tr>
          <tr>
            <td class="pt-2" colspan="4">
              <strong>Transportadora: </strong> {{ $order->shipping_company }}
            </td>
          </tr>
          <tr>
            <td class="pt-2" colspan="4">
              <strong>Movimentação Contábil: </strong> {{ $order->accounting_drive }}
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <h2 class="mt-4 mb-1 text-xl italic font-bold text-center">Itens do Pedido</h2>

    <table class="w-full border-separate" style="border-spacing: 0">
      <thead class="text-xs italic">
        <tr class="border-dotted rounded-corners with-lines">
          <th class="h-6">Código</th>
          <th style="width: 25%">Produto</th>
          <th>NCM</th>
          <th>CFOP</th>
          <th>Qtd. Restante</th>
          <th>Und. Medida</th>
          <th>Quant.</th>
          <th>Preço Unit.</th>
          <th>Frete</th>
          <th>IPI (%)</th>
          <th>IPI (R$)</th>
          <th>BC ICMS-ST</th>
          <th>ICMS-ST</th>
          <th>Desconto</th>
          <th style="width: 10%">Total</th>
        </tr>
      </thead>
      <tbody class="text-xss">
        @foreach ($products as $product)
          <tr class="text-center rounded-corners">
            <td>{{ $product->cod }}</td>
            <td class="h-8 text-left">{{ $product->name }}</td>
            <td>{{ $product->ncm }}</td>
            <td>{{ $product->CFOP }}</td>
            <td>{{ $product->remaining_quantity }}</td>
            <td>{{ $product->unit_of_measurement }}</td>
            <td>{{ $product->quantity }}</td>
            <td>{{ money($product->unit_price) }}</td>
            <td>{{ money($product->freight) }}</td>
            <td>{{ percentage($product->ipi_percent) }}</td>
            <td>{{ money($product->ipi_monetary) }}</td>
            <td>{{ money($product->BC_ICMS_ST) }}</td>
            <td>{{ money($product->ICMS_ST) }}</td>
            <td>{{ money($product->subtotal) }}</td>
            <td>{{ money($product->total) }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <p class="mt-2 text-sm">
      <strong>Observação Fiscal: </strong> {{ $order->tax_observation }}
    </p>
  </div>

  {{-- <div class="w-full" style="background: red; height: 100%; page-break-before: avoid">
  </div> --}}

  <x-pdf.last-page-footer class="mx-3 mt-16">
    <p class="italic">Totais do Pedido:</p>
    <div class="px-2 py-1 border-dashed rounded-md border-1" style="border-color: #8a8a8a">
      <table class="w-full text-sm border-separate" style="border-spacing: 0">
        <tbody>
          <tr>
            <td>
              <strong>Seguro: </strong> {{ money($order->vSafe) }}
            </td>
            <td>
              <strong>Outras Desp.: </strong> {{ money($order->vOthers) }}
            </td>
            <td>
              <strong>IPI Total: </strong> {{ money($order->vIPI_total) }}
            </td>
            <td>
              <strong>Sub. Total: </strong> {{ money($order->subtotal) }}
            </td>

            <td class="px-1 text-lg">
              <strong><em class="mr-16">Total Geral:</em> {{ money($order->total) }}</strong>
            </td>
          </tr>
          <tr>
            <td>
              <strong>Desc. Total: </strong> {{ money($order->discount_total) }}
            </td>
            <td>
              <strong>Frete Total: </strong> {{ money($order->freight_total) }}
            </td>
            <td colspan="2">
              <strong>ST Total: </strong> {{ money($order->total_icms_st) }}
            </td>
            <td class="px-1 text-lg rounded-lg border-1 border-default">
              <strong><em class="mr-8">Total a Faturar:</em> {{ money($order->invoice_total) }}</strong>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="px-24 pt-8 text-justify container-between">
      <x-pdf.signature class="inline-block" :name="$order->seller->name"
        info="{{ $order->seller->email ? $order->seller->phone . ' - ' . $order->seller->email : $order->seller->phone }}" />
      <x-pdf.signature class="inline-block" :name="$order->client->name" :info="$order->client->identifier" />
    </div>
  </x-pdf.last-page-footer>

</x-layouts.pdf>
