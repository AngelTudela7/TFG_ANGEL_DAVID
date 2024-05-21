<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mostrar Estadios</title>
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
</head>
<body>
    <h1>LISTADO ESTADIOS</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>PAIS</th>
                <th colspan="3" style="text-align: center">ACCIONES</th>
                
            </tr>
        </thead>
        <tbody>
            @forelse($estadios as $estadio)
            <tr>
                <td>{{ $estadio->id }}</td>
                <td>{{ $estadio->nombre_Estadio }}</td>
                <td>{{ $estadio->pais}}</td>
                <td class="actions" > 
                    <a  href= "{{ route('verEstadio',$estadio->id) }}"><button>VER</button></a></td>
                    <td class="actions"> <a href="{{ route('editarEstadio',$estadio->id)}}"><button>Editar</button></a></td>
                    <td class="actions"> <form action="{{ route('eliminarEstadio',$estadio->id) }}" method="POST">
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
    <center>{{ $estadios->links() }}</center>
    <a href="{{ route('principal') }}" class="back-button" ><button>VOLVER A INICIO</button></a>
</body>
</html>
