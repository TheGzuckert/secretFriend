<x-layout title="Sorteio de Amigo Secreto" class="justify-content-between text-center">

  <form action="/buscar-amigo" method="GET" class="mt-2 mb-2">
      <label for="busca" class="form-label">Buscar Amigo</label>
      <div class="row">
          <div class="col-md-6">
              <input type="text" name="busca" id="busca" class="form-control" placeholder="Digite o nome ou e-mail do amigo">
          </div>
          <div class="col-md-6">
              <div class="input-group-append d-flex justify-content-end">
                  <button type="submit" class="btn btn-dark">Buscar</button>
                  <a href="/criar" class="btn btn-dark ms-2">Adicionar</a>
                  <a href="/sorteio" class="btn btn-dark ms-2">Sortear</a>
              </div>
          </div>
      </div>
  </form>


  <div class="mt-6">
    <p>Lista de Amigos no sorteio</p>
    <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <strong>Nome</strong>
            <strong>E-mail</strong>
            <strong>Opções</strong>
        </li>
        @foreach ($amigos as $amigo)
            <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                    <span>{{ $amigo->name }}</span>
                    <span>{{ $amigo->email }}</span>
                    <div>
                        <a href="/amigos/{{ $amigo->id }}/edit" class="bi bi-pencil me-2"></a>                  
                        <form action="/amigos/{{ $amigo->id }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bi bi-trash btn btn-link"></button>
                        </form>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
  </div>

</x-layout>