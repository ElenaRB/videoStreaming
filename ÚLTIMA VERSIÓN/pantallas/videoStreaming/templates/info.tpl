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
        
        input {
            margin: 20px;
        }
        *{
            background-color: black;
            color: white;
            
        } 
    

    </style>
</head>

<body>
    <section>
        <h2>{$video->titulo}</h2>
        <div id="sinopsis">
            <img src="carteles/{$video->cartel}" />
            <p>{$video->sinopsis}</p>
        </div>
        <form action="ver.php" method="post">
            <input type="hidden" name="codigo" value="{$video->codigo}" />
            <input type="submit" value="Ver" />
        </form>
        {if $video->descargable == "S"}
        <form action="descargar.php" method="post">
            <input type="hidden" name="ruta" value="{$video->video}" />
            <input type="submit" value="Descargar" />
        </form>
        {/if}
    </section>
    <footer class="pie">
        <div id="id"> <a href='cerrar.php' class='enlaceboton'>Cerrar Sesión</a></div>
    </footer>
</body>

</html>
