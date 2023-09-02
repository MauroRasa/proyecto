<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anuel</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <style>
        .grid-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* Tres columnas de igual tamaño */
            grid-template-rows: auto; /* Filas automáticas */
            gap: 10px; /* Espacio entre las celdas */
            justify-content: center; /* Centrar horizontalmente */
            align-items: center; /* Centrar verticalmente */
        }

        .profile-item {
            text-align: center;
        }

        .profile-image {
            width: 100px; /* Ancho de la imagen de perfil */
            height: 100px; /* Alto de la imagen de perfil */
            border-radius: 50%; /* Hacer la imagen redonda (perfil) */
        }

        .title {
            font-weight: bold;
            font-size: 24px; /* Tamaño del título */
        }

        .description {
            font-size: 16px; /* Tamaño de la descripción */
        }
    </style>
</head>
<body>
    <div class="grid-container">
        <div class="profile-item">
            <img src="imagen_de_perfil1.jpg" alt="Imagen de perfil" class="profile-image">
            <div class="title">Nombre de Usuario 1</div>
            <div class="description">Descripción breve del usuario 1.</div>
        </div>
        <div class="profile-item">
            <img src="imagen_de_perfil2.jpg" alt="Imagen de perfil" class="profile-image">
            <div class="title">Nombre de Usuario 2</div>
            <div class="description">Descripción breve del usuario 2.</div>
        </div>
        <div class="profile-item">
            <img src="imagen_de_perfil3.jpg" alt="Imagen de perfil" class="profile-image">
            <div class="title">Nombre de Usuario 3</div>
            <div class="description">Descripción breve del usuario 3.</div>
        </div>
    </div>
</body>
</html>

</body>
</html>