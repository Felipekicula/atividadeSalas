<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista de Reservas</title>
</head>
<body>
    <h1>Reservas Ativas</h1>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <a href="{{ route('reservas.create') }}">Criar nova reserva</a>

    <ul>
        @foreach ($reservas as $reserva)
            <li>
                {{ $reserva->usuario }} reservou a sala {{ $reserva->sala->nome }}
                para o dia {{ $reserva->data }} às {{ $reserva->horario }}.
            </li>
        @endforeach
    </ul>
</body>
</html>
