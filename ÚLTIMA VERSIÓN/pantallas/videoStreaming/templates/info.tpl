<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8" />    
    <title>Información de la película</title>
    <style>
        div {
            display: flex;
        }
        
        p {
            margin: 40px;
        }
    </style>
</head>
<body>
    <section>
        <h2>{$video->titulo}</h2>
        <div>
            <img src="carteles/{$video->cartel}" />
            <p>{$video->sinopsis}</p>
        </div>
        <form action="ver.php" method="post">
            <input type="hidden" name="codigo" value="{$video->codigo}" />
            <input type="submit" value="Ver" />
        </form>
        <form action="descargar.php" method="post">
            <input type="hidden" name="codigo" value="{$video->codigo}" />
            <input type="submit" value="Descargar" />
        </form>
    </section>
</body>

</html>
