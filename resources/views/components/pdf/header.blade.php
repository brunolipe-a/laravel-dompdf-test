@props(['title', 'info' => [], 'logo' => 'logo_grupo_saga.png'])

<div class="pb-3 border-b-1" style="border-color: #000">
  <div class="absolute">
    <img src="{{ $logo }}" alt="Grupo Saga Logo" class="h-9" />
  </div>
  <div class="text-xs text-center">
    <p class="mb-2 text-xl font-bold">{{ $title }}</p>
    @foreach ($info as $text)
      <p class="mb-1">{{ $text }}</p>
    @endforeach
  </div>
  <div class="absolute top-0 right-0 text-sm text-right">
    <p>{{ now()->format('d/m/Y') }}</p>
    <p>{{ now()->format('H:i') }}</p>
  </div>
</div>
