<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Alta arbitros</title>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f2f2f2;
    justify-content: center;
    align-items: center;
    align-content: center;
    height: 100vh;
}

.container {
    width: 80%;
    padding: 20px;
}

h2 {
    text-align: center;
}

form {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

fieldset {
    border: none;
}

legend {
    font-weight: bold;
    font-size: 1.2em;
    margin-bottom: 10px;
}

input[type="text"] {
    width: calc(100% - 20px);
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

.error {
    color: red;
}

.success {
    background-color: #d4edda;
    color: #155724;
    padding: 10px;
    border-radius: 5px;
    margin-top: 10px;
}

@media (max-width: 768px) {
    .container {
        width: 90%;
    }
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

<h2>Alta Nuevo Arbitro</h2>
<form action="{{ route('crearArbitro') }}" method="POST">
    @csrf
    <fieldset style="width:40%;">
        <legend>Nueva Arbitro</legend>
            Nombre: <input type="text" name="nombre_Arbitro"><br><br>
                @error('nombre_Arbitro')
                    <div style='color:red;'>
                        {{ $message }}
                    </div>
                @enderror
        <br>
            Apellidos: <input type="text" name="apellidos_Arbitro" ><br><br>
                @error('apellidos_Arbitro')
                    <div style='color:red;'>
                        {{ $message }}
                    </div>
                @enderror
        <br>
            Nacionalidad: <input type="text" name="nacionalidad"><br><br>
                @error('nacionalidad')
                    <div style='color:red;'>
                        {{ $message }}
                    </div>
                @enderror
        <br>
            Asignacion: <input type="text" name="asignacion" ><br><br>
                @error('asignacion')
                    <div style='color:red;'>
                        {{ $message }}
                    </div>
                @enderror
        <br>
            <input type="submit" name='Insertar' value='Crear Arbitro'>
        </fieldset>
    </form>
        @if (session('mensaje'))
            <div style='background-color:moccasin;'>
                {{ session('mensaje') }}
            </div>
        @endif
    <a href="{{ route('mostrarArbitros') }}" class="back-button"><button>Volver</button></a><br>
        </body>
    </html>
