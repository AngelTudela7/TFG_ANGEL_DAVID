<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Ver Arbitro</title>
</head>

<style>

body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
            color: #333;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        .actions {
            text-align: center;
        }
        .actions button, .actions input[type="submit"] {
            padding: 8px 15px;
            border: none;
            cursor: pointer;
            background-color: #4CAF50;
            color: white;
            border-radius: 4px;
            transition: background-color 0.3s ease;
            margin-right: 5px;
        }
        
        .actions a {
            display: inline-block;
        }

        a.back-button {
    display: block;
    width: 150px;
    margin: 20px auto;
    text-align: center;
    text-decoration: none;
}

a.back-button button {
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    background-color: #337ab7; /* Cambia el color de fondo según tus preferencias */
    color: white;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

a.back-button button:hover {
    background-color: #23527c; /* Cambia el color de fondo al pasar el mouse */
}





</style>


<body>
    <a href="{{ route('mostrarArbitros') }}" class="back-button"><button>Volver</button></a><br>
    <h1>VER INFORMACIÓN DE ARBITROS</h1>
    <table border="1">
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>APELLIDOS</th>
        <th>NACIONALIDAD</th>
    </tr>
    <tr>
        <td>{{ $arbt->id }}</td>
        <td>{{ $arbt->nombre_Arbitro }}</td>
        <td>{{ $arbt->apellidos_Arbitro }}</td>
        <td>{{ $arbt->nacionalidad}}</td>
    </table>
    <br><hr>
    <h1>PARTIDOS ARBITRO</h1>
    <table border="1">
    <tr>
    <th>ID</th>
    <th>DURACION</th>
    <th>TIPO</th>
    <th>JORNADA</th>
    <th>FECHA</th>
    <th>RESULTADO</th>
 
    </tr>

    @if($parts)
    @forelse($parts as $part)
    <tr>
    <td>{{ $part->id }}</td>
    <td>{{ $part->duracion }}</td>
    <td>{{ $part->tipo}}</td>
    <td>{{ $part->jornada}}</td>
    <td>{{ $part->fecha}}</td>
    <td>{{ $part->resultado}}</td>
   
    @empty
    <tr><td colspan='5'>Este grupo no tiene alumnos</td></tr>
    @endforelse
    @else
    <p>No se encontraron partidos para este árbitro.</p>
@endif

    </body>
    </html>