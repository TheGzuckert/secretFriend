<x-layout title="Editar amigo">
  <form action="/amigos/{{ $amigo->id }}" method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
       <label for="name" class="form-label">Nome:</label>
       <div class="col-3">
         <input type="text" name="name" id="name" class="form-control" value="{{ $amigo->name }}">
       </div>
       <label for="email" class="form-label mt-2">E-mail:</label>
       <div class="col-3 mt-2">
         <input type="text" name="email" id="email" class="form-control" value="{{ $amigo->email }}">
       </div>
    </div>
    <button type="submit" class="btn btn-dark" style="width: 320px;" id="submitButton">Adicionar</button>
  </form>
</x-layout>