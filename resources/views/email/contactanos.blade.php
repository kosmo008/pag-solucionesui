
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correo Electrónico</title>
    <!-- Estilos de Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos personalizados */
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px auto;
            max-width: 600px;
        }
        h2 {
            color: #333;
        }
        .info-box {
            background-color: #ffeeba; /* Amarillo */
            color: #856404; /* Color de texto oscuro para resaltar */
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .info-box p {
            margin: 0;
        }
        .footer {
            margin-top: 20px;
            padding: 10px;
            text-align: center;
            background-color: #333333; /* Gris oscuro */
            color: #ffffff; /* Letras blancas */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>¡Tienes un nuevo mensaje desde tu sitio web!</h2>
        <div class="info-box">
            <p>¡Un visitante de tu sitio web ha dejado un mensaje y está esperando tu respuesta!</p>
        </div>

        <div class="row">
            <div class="col-md-6">
                <strong>Nombre:</strong>
                <p>{{$msj['nombre']}}</p>
            </div>
            <div class="col-md-6">
                <strong>Correo Electrónico:</strong>
                <p>{{$msj['correo']}}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <strong>Mensaje:</strong>
                <p>{{$msj['mensaje']}}</p>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>© 2024 Unidad de Inspeccion IMPULSO - Todos los derechos reservados</p>
            <p>Desarrollado por: Daniel Cibrian</p>
        </div>
    </div>
</body>
</html>
