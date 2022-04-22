@props(['name', 'info' => null])

<div {{ $attributes->class('italic text-center') }}>
  <div class="h-10 w-80 border-b-1" style="border-color: #000"></div>
  <p>{{ $name }}</p>
  <p class="text-sm">{{ $info }}</p>
</div>
