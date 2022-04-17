<x-layouts.pdf>
  <x-slot name="styles">
    <style>
      @page {
        size: a4;
        margin: 20mm
      }

    </style>
  </x-slot>

  @if ($reproved)
    <div class="font-bold text-8xl absolute top-half left-half opacity-70 transform-center-rotate-315"
      style="color: red;">
      REPROVADA
    </div>
  @endif

  <aside class="float-right w-40 border-collapse">
    <img src="https://www.princexml.com/howcome/2016/samples/invoice/plogo.png">
    <address class="whitespace-pre pb-4 not-italic">
      YesLogic Pty. Ltd.
      7 / 39 Bouverie St
      Carlton VIC 3053
      Australia
    </address>
    www.yeslogic.com<br>ABN 32 101 193 560
  </aside>

  <h1 class="font-bold text-5xl pb-12">Invoice</h1>

  <address class="whitespace-pre pb-4 not-italic">
    Customer Name
    Street
    Postcode City
    Country
  </address>

  <table class="w-full mb-4 border-none">
    <tr>
      <td>Invoice date:
      <td colspan=3>Nov 26, 2016
    <tr>
      <td>Invoice number:
      <td colspan=3>161126

    <tr>
      <td>Payment due:
      <td colspan=3>30 days after invoice date
    <tr class=head>
      <td>Description
      <td>From
      <td>Until
      <td class="text-right">Amount
    <tr class=item>
      <td>Prince Upgrades &amp; Support
      <td>Nov 26, 2016
      <td>Nov 26, 2017
      <td class="text-right currency">950.00

    <tr class=total>
      <td colspan=3>Total
      <td class="text-right currency">950.00

    <tr>
      <td class="pt-12 pb-4" colspan=4>Please transfer amount to:
    <tr>
      <td>Bank account name:
      <td colspan=3><a href="http://www.princexml.com">Yes Logic Pty Ltd</a>
    <tr>
      <td>Name of Bank:
      <td colspan=3><a href="https://www.commbank.com.au/">Commonwealth Bank of Australia (CBA)</a>

    <tr>
      <td class=usd>Bank State Branch (BSB):
      <td colspan=3>063010
    <tr>
      <td class=eur>Bank State Branch (BSB):
      <td colspan=3>063010
    <tr>
      <td class=aud>Bank State Branch (BSB):
      <td colspan=3>063019

    <tr class=usd>
      <td>Bank account number:
      <td colspan=3>13201652
    <tr class=eur>
      <td>Bank account number:
      <td colspan=3>13201679
    <tr class=aud>
      <td>Bank account number:
      <td colspan=3>10182543

    <tr>
      <td>Bank SWIFT code:
      <td colspan=3>CTBAAU2S
    <tr>
      <td>Bank address:
      <td colspan=3>231 Swanston St, Melbourne, VIC 3000, Australia
  </table>

  <p>
    <small>
      The BSB number identifies a branch of a financial institution in Australia. When transferring money to
      Australia, the BSB number is used together with the bank account number and the SWIFT code. Australian banks do
      not use IBAN numbers.
    </small>
  </p>

  <footer class="text-center">www.yeslogic.com</footer>
</x-layouts.pdf>
