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
    width: 40%; /* Ancho del formulario */
    margin: 0 auto; /* Centrar horizontalmente */
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


input[type="number"] {
    width: calc(100% - 20px);
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="submit"] {
    width: 50%; /* Ancho del botón */
    margin: 0 auto; /* Centrar horizontalmente */
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}


.button-container {
    text-align: center; /* Centra horizontalmente el contenido */
}

input[type="submit"] {
    width: 50%; /* Ancho del botón */
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

<h2>Alta Nuevo Equipo</h2>
<form action="{{ route('crearEquipo') }}" method="POST">
    @csrf
    <fieldset>
    <legend>Creacion de Equipo</legend>
   
    Nombre: <input type="text" name="nombre_Equipo"><br><br>
    @error('nombre_Equipo')
    <div style='color:red;'>
    {{ $message }}
    </div>
    @enderror
    <br>
    Pais: <input type="text" name="pais_Equipo" ><br><br>
    @error('pais_Equipo')
    <div style='color:red;'>
    {{ $message }}
    </div>
    @enderror
    <br>

    Ciudad: <input type="text" name="ciudad_Equipo" ><br><br>
    @error('ciudad_Equipo')
    <div style='color:red;'>
    {{ $message }}
    </div>
    @enderror
    <br>

    Numero Plantilla: <input type="number" name="numero_plantilla" ><br><br>
    @error('numero_plantilla')
    <div style='color:red;'>
    {{ $message }}
    </div>
    @enderror
    <br>

    Abreviacion: <input type="text" name="abreviacion" ><br><br>
    @error('abreviacion')
    <div style='color:red;'>
    {{ $message }}
    </div>
    @enderror
    <br>


    Id Competicion: <input type="number" name="competicion_id" ><br><br>
    @error('competicion_id')
    <div style='color:red;'>
    {{ $message }}
    </div>
    @enderror
    <br>


    Id Estadio: <input type="text" name="estadio_id" ><br><br>
    @error('estadio_id')
    <div style='color:red;'>
    {{ $message }}
    </div>
    @enderror
    <br>




    <input type="submit" name='Modificar' value='Modificar Equipo'>
    </fieldset>
    </form>
    @if (session('mensaje'))
    <div style="background-color:moccasin;">
 {{ session('mensaje') }}
 </div>
 @endif

 <a href="{{ route('principal') }}" class="back-button"><button>Volver</button></a><br>

        </body>
    </html>
