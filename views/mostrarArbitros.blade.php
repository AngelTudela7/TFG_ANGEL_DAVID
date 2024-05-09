<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mostrar Arbitros</title>
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
    </style>
</head>
<body>
    <h1>LISTADO ARBITROS</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>APELLIDOS</th>
                <th>NACIONALIDAD</th>
                <th colspan="3" style="text-align: center">ACCIONES</th>
                
            </tr>
        </thead>
        <tbody>
            @forelse($arbts as $arbt)
            <tr>
                <td>{{ $arbt->id }}</td>
                <td>{{ $arbt->nombre_Arbitro }}</td>
                <td>{{ $arbt->apellidos_Arbitro }}</td>
                <td>{{ $arbt->nacionalidad}}</td>
                <td class="actions" > 
                    <a href="{{ route('verArbitro',$arbt->id) }}"><button>VER</button></a></td>
                    <td class="actions"> <a href="{{ route('editarArbitro',$arbt->id) }}"><button>Editar</button></a></td>
                    <td class="actions"> <form action="{{ route('eliminarArbitro', $arbt->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <input type="submit" name="Eliminar" value="ELIMINAR">
                    </form></td>
                
            </tr>
            @empty
            <tr><td colspan='5'>No hay arbitros</td></tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
