    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dos Columnas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            display: flex;
            max-width: 1200px;
            margin: 0 auto;
        }

        .column {
            flex: 1;
            padding: 20px;
            box-sizing: border-box;
        }

        .box {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<div class="cont1">
    <h3 class="p3">Pagina inicial</h3>
    <h3 class="p3">(contenido a desarrollar)</h3>
    </div>
<div class="container">
    <div class="column">
        <div class="box">
            <img src="imagen1.jpg" alt="Imagen 1">
            <p>Texto descriptivo para la imagen 1.</p>
        </div>
        <div class="box">
            <img src="imagen2.jpg" alt="Imagen 2">
            <p>Texto descriptivo para la imagen 2.</p>
        </div>
    </div>

    <div class="column">
        <div class="box">
            <img src="imagen3.jpg" alt="Imagen 3">
            <p>Texto descriptivo para la imagen 3.</p>
        </div>
        <div class="box">
            <img src="imagen4.jpg" alt="Imagen 4">
            <p>Texto descriptivo para la imagen 4.</p>
        </div>
    </div>
</div>

</body>
</html>


