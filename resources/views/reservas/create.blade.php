<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nova Reserva</title>
</head>
<body>
    <h1>Nova Reserva</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('reservas.store') }}" method="POST">
        @csrf

        <label for="sala_id">Sala:</label>
        <select name="sala_id" id="sala_id">
            @foreach ($salas as $sala)
                <option value="{{ $sala->id }}">{{ $sala->nome }} (Capacidade: {{ $sala->capacidade }})</option>
            @endforeach
        </select>

        <br>

        <label for="usuario">Seu nome:</label>
        <input type="text" name="usuario" id="usuario">

        <br>

        <label for="data">Data:</label>
        <input type="date" name="data" id="data">

        <br>

        <label for="horario">Horário:</label>
        <input type="time" name="horario" id="horario">

        <br><br>

        <button type="submit">Reservar</button>
    </form>
</body>
</html>
