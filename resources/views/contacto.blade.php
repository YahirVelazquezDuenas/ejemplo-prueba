<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <h1>Formulario de Contacto</h1>
    <form action="contacto" method="POST"> 

    <h3>{{ $tipo }}</h3>

        @csrf
        <h3>Nombre</h3>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre">
        <h3>Correo</h3>
            <label for="correo">Correo:</label>
            <input 
                type="email" 
                id="correo" 
                name="correo"
                @if ($tipo == 'alumno')
                    value = "@alumnos.udg.mx"
                @else
                    value = "@gmail.com"
                @endif 
                ><br>
        <h3>Comentario</h3>
            <label for="comentarios">Comentarios:</label>
        <br>
            <textarea id="comentario" name="comentario" placeholder="Comentarios" rows="3" cols="40"></textarea>
        <br>
        <h3>Enviar</h3>
            <label for="enviar">Enviar:</label>
            <input type="submit" id="enviar" name="enviar">
</body>
</html>