<x-layout title="Sorteio de Amigos">
  <div class="mt-3">
  </div>
  <div class="input-group-append d- mt-3 mb-3">
    <a href="/criar" class="btn btn-dark">Adicionar novo amigo</a>
    <a href="/sorteio" class="btn btn-dark">Sortear novamente</a>
  </div>
  <div style="max-width: 320px;">
    <ul class="list-group">
      <li class="list-group-item d-flex justify-content-center">
        <strong>Amigos sorteados</strong>
      </li>
      @foreach ($sorteio as $par)
        <li class="list-group-item d-flex justify-content-center">{{ $par['amigo1'] }} x {{ $par['amigo2'] }}</li>
      @endforeach
    </ul>
  </div>
  <a href="/amigos" class="btn btn-dark mt-3" style="width: 320px;">Voltar a pagina principal</a>
</x-layout>