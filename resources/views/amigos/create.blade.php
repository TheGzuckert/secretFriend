<x-layout title="Adicionar novo amigo">
  <form action="/amigos" method="post">
    @csrf
    <div class="mb-3">
       <label for="name" class="form-label">Nome:</label>
       <div class="col-3">
         <input type="text" name="name" id="name" class="form-control">
       </div>
       <label for="email" class="form-label mt-2">E-mail:</label>
       <div class="col-3 mt-2">
         <input type="text" name="email" id="email" class="form-control">
       </div>
    </div>
    <button type="submit" class="btn btn-dark">Adicionar</button>
  </form>
</x-layout>
