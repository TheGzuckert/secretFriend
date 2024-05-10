<x-layout title="Sorteio de amigo secreto">

  <a href="/criar" class="btn btn-dark">Adicionar</a> 

  <div class="mt-6">
      <ul class="list-group mt-2">
        @foreach ($series as $serie)
          <li class="list-group-item">{{ $serie->name }}</li>
        @endforeach
    </ul>
  </div>
</x-layout>
