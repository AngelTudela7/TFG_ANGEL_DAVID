<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Editar Arbitros</title>
<style >

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f7f7f7;
    
}

h2 {
    color: #333;
    text-align: center;
}

fieldset {
    width: 50%;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #fff;
}

fieldset input[type="submit"] {
    display: block; /* Cambia la visualización del botón a bloque */
    margin: 20px auto; /* Centra el botón horizontalmente */
}

legend {
    font-size: 1.2em;
    font-weight: bold;
    color: #333;
}




input[type="text"],
input[type="number"] {
    width: calc(100% - 20px);
    padding: 8px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type="submit"] {
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    background-color: #4CAF50;
    color: white;
    cursor: pointer;
    transition: background-color 0.3s ease;
    align-items: center;

}

input[type="submit"]:hover {
    background-color: #45a049;
}

.error-message {
    color: red;
    margin-top: 5px;
}

.success-message {
    background-color: moccasin;
    padding: 10px;
    margin-top: 20px;
}

/* Agrega este código al final de tu estilo CSS */

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
    
    <h2>Editar Arbitro</h2>
    <form action="{{ route('actualizarArbitro', $arbitro->id) }}" method="POST">
    @method('PUT')
    @csrf
    <fieldset>
    <legend>Edición de Arbitro</legend>
    ID: <input type='number' name="id" value="{{ $arbitro->id }}" readonly><br><br>
    Nombre: <input type="text" name="nombre_Arbitro" value="{{ $arbitro->nombre_Arbitro }}"><br><br>
    @error('nombre_Arbitro')
    <div style='color:red;'>
    {{ $message }}
    </div>
    @enderror
    <br>
    Apellidos: <input type="text" name="apellidos_Arbitro" value="{{ $arbitro->apellidos_Arbitro }}"><br><br>
    @error('apellidos_Arbitro')
    <div style='color:red;'>
    {{ $message }}
    </div>
    @enderror
    <br>

    Nacionalidad: <input type="text" name="nacionalidad" value="{{ $arbitro->nacionalidad }}"><br><br>
    @error('nacionalidad')
    <div style='color:red;'>
    {{ $message }}
    </div>
    @enderror
    <br>

    Asignacion: <input type="text" name="asignacion" value="{{ $arbitro->asignacion }}"><br><br>
    @error('asignacion')
    <div style='color:red;'>
    {{ $message }}
    </div>
    @enderror
    <br>

    <input type="submit" name='Modificar' value='Modificar Cita'>
    </fieldset>
    </form>
    @if (session('mensaje'))
 <div style="background-color:moccasin;">
 {{ session('mensaje') }}
 </div>
 @endif

 <a href="{{ route('mostrarArbitros') }}" class="back-button"><button>Volver</button></a><br>


</body>
</html>