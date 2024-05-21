<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Ver Equipo</title>
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
    <a href="{{ route('mostrarEquipos') }}" class="back-button"><button>Volver</button></a><br>
    <h1>DETALLES EQUIPO</h1>
    <table border="1">
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>PAIS</th>
        <th>CIUDAD</th>
        <th>NUMERO PLANTILLA</th>
        <th>ABREVIACION</th>
        <th>ID COMPETICION</th>
        <th>ID ESTADIO</th>
    </tr>
    
    <tr>
        <td>{{ $equipo->id }}</td>
                <td>{{ $equipo->nombre_Equipo }}</td>
                <td>{{ $equipo->pais_Equipo }}</td>
                <td>{{ $equipo->ciudad_Equipo}}</td>
                <td>{{ $equipo->numero_plantilla}}</td>
                <td>{{ $equipo->abreviacion}}</td>
                <td>{{ $equipo->competicion_id}}</td>
                <td>{{ $equipo->estadio_id}}</td></tr>
    </table>
    <br><hr>
    <h1>JUGADORES DEL EQUIPO</h1>
    <table border="1">
    <tr>
    <th>ID</th>
    <th>NOMBRE</th>
    <th>APELLIDOS</th>
    <th>NACIONALIDAD</th>
    <th>POSICION</th>
    <th>EDAD</th>
    <th>GOLES</th>
    <th>ASISTENCIAS</th>
 
    
    </tr>

    @if($jugadores)
    @forelse($jugadores as $jugador)
    <tr>
    <td>{{ $jugador->id }}</td>
    <td>{{ $jugador->nombre_Jugador }}</td>
    <td>{{ $jugador->apellidos_Jugador}}</td>
    <td>{{ $jugador->nacionalidad}}</td>
    <td>{{ $jugador->posicion}}</td>
    <td>{{ $jugador->edad}}</td>
    <td>{{ $jugador->goles}}</td>
    <td>{{ $jugador->asistencias}}</td>
   
   
    @empty
    <tr><td colspan='5'>Este equipo no tiene jugadores </td></tr>
    @endforelse
    @else
    <p>No se encontraron jugadores para este equipo.</p>
@endif
    </table>

<br><hr>

<h1>ESTADIO DEL EQUIPO</h1>
<table border="1">
<tr>
<th>ID</th>
<th>NOMBRE</th>
<th>PAIS</th>
<th>CIUDAD</th>
<th>AFORO</th>

</tr>

@if($estadio)

<tr>
<td>{{ $estadio->id }}</td>
<td>{{ $estadio->nombre_Estadio }}</td>
<td>{{ $estadio->pais}}</td>
<td>{{ $estadio->ciudad}}</td>
<td>{{ $estadio->aforo}}</td>




@else
<p>Este equipo no tiene asociado ningun estadio.</p>
@endif

    </body>
    </html>