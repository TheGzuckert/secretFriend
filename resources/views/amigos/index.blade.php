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
    @foreach ($amigos as $amigo)
        <li class="list-group-item d-flex justify-content-between ">
            <span>{{ $amigo->name }}</span>
            <div>
                <a href="/edit/?id={{ $amigo->id }}" class="bi bi-pencil me-2"></a>
                <form action="/amigos/{{ $amigo->id }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bi bi-trash btn btn-link"></button>
                </form>
            </div>
        </li>
    @endforeach
</ul>
</div>



  <div class="d-flex justify-content-between mt-5">
    <a href="/criar" class="btn btn-dark">Adicionar</a>
    <a href="/sorteio" class="btn btn-dark">Sortear</a>
  </div>

</x-layout>