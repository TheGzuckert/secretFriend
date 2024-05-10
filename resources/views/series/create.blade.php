<x-layout title="Nova Série">
  <form action="/series" method="post">
    @csrf
    <div class="mb-3">
       <label for="name" class="form-label">name:</label>
       <input type="text" name="name" id="name" class="form-control">
       <label for="email" class="form-label">email:</label>
       <input type="text" name="email" id="email" class="form-control">
    </div>
    <button type="submit" class="btn btn-dark">Adicionar</button>
  </form>
</x-layout>