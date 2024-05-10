<x-layout title="Sorteio de amigo secreto" class="justify-content-between text-center">

  <div class="mt-2 mb-2">
    <label for="email" class="form-label">Buscar Amigo</label>
    <div class="col-3">
      <input type="text" name="email" id="email" class="form-control">
    </div>
  </div>

<div class="mt-6">
  <p>Lista de Amigos no sorteio:</p>
  <ul class="list-group">
    @foreach ($series as $serie)
    <li class="list-group-item d-flex justify-content-between">
      <span>{{ $serie->name }}</span>
      <div>
        <a href="/edit/?id:{{ $serie->id }}" class="bi bi-pencil me-2"></a>
        <a href="/delete/{{ $serie->id }}" class="bi bi-trash "></a>
      </div>
    </li>
    @endforeach
  </ul>
</div>



  <div class="d-flex justify-content-between mt-5">
    <a href="/sorteio" class="btn btn-dark">Sortear</a>
    <a href="/criar" class="btn btn-dark">Adicionar</a>
  </div>

</x-layout>