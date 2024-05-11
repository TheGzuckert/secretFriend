<x-layout title="Sorteio de Amigo Secreto">
    <ul class="list-group">
        @foreach ($sorteio as $par)
            <li class="list-group-item">{{ $par['amigo1'] }} x {{ $par['amigo2'] }}</li>
        @endforeach
    </ul>
    <a href="{{ url('/amigos') }}" class="btn btn-dark mt-3">Voltar</a>
</x-layout>