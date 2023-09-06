<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <h1>Formulario de Contacto</h1>
    <form action="alvaro" method="GET">
        <h3>Nombre</h3>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre">
        <h3>Correo</h3>
            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo" placeholder="Correo electrónico">
        <h3>Genero</h3>
            <label for="genero">Genero:</label>
        <br>
            <label for="masculino">
            <input type="radio" id="masculino" name="genero" value="masculino">Masculino</label>
        <br>
            <label for="femenino">
            <input type="radio" id="femenino" name="genero" value="femenino">Femenino</label>
        <br>
            <label for="otro">
            <input type="radio" id="otro" name="genero" value="otro">Otro</label>
        <br>
            <label for="especifique">Especifique:</label>
            <input type="text" id="especifique" name="especifique" placeholder="Especifique su género">
        <br>
        <h3>Contraseña</h3>
            <label for="contraseña">Contraseña:
            <input type="password" id="contraseña" name="contraseña" placeholder="Contraseña" pattern=".{6,}"> <em><strong>No se permiten menos de seis caracteres</strong></em> </label>
            
        <h3>Comentario</h3>
            <label for="comentarios">Comentarios:</label>
        <br>
            <textarea id="comentarios" name="comentarios" placeholder="Comentarios" rows="3" cols="40"></textarea>
        <br>
        <h3>Ciudad</h3>
            <label for="ciudad">Seleccione una ciudad:</label>
            <select name="ciudad" id="ciudad">
            <option value="" disabled selected>Selecciona una opción</option>
            <option value="Guadalajara">Guadalajara</option>
            <option value="Zapopan">Zapopan</option>
            <option value="Tonalá">Tonalá</option>
            <option value="Otra">Otra</option>
            </select>
        <h3>Me interesa contratarte</h3>
            <label for="interesa">Me interesa contratarte:</label>
            <input type="checkbox" name="interesa" value="interesa">
        <h3>Enviar</h3>
            <label for="enviar">Enviar:</label>
            <input type="submit" id="enviar" name="enviar">
</body>
</html>