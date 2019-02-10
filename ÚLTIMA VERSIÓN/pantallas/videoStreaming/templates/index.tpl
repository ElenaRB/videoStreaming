<!doctype html>
<html lang="es">

<head>
    <meta charset="utf8" />
    <div class="title">
        <h1>Vídeo Streaming<br />Bestflix</h1>
    </div>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat');

        body {
            background-color: black;
            color: white;
        }

        .title {
            font-family: "Montserrat";
            text-align: center;
            color: #FFF;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            letter-spacing: 1px;
        }

        h1 {
            background-image: url(https://media.giphy.com/media/26BROrSHlmyzzHf3i/giphy.gif);
            background-size: cover;
            color: transparent;
            -moz-background-clip: text;
            -webkit-background-clip: text;
            text-transform: uppercase;
            font-size: 120px;
            line-height: .75;
            margin: 10px 0;
        }

        .enlaceboton {
            text-decoration: none;
            color: white;
            padding: 5px;
            background-color: black;
            font-size: 15px;
            margin-top: 20px;
        }

    </style>
    <!--link rel="stylesheet" type="text/css" href="css/css.css"-->
    <script type="text/javascript">
        function muestraMensaje(mensaje) {
            if (mensaje != '')
                alert(mensaje);
        }

    </script>

    </head>
<body onload="muestraMensaje('{$mensaje}');">
    <header id="cabecera">
        <!-- Para imprimir los perfiles que obtenemos desde accesoPerfiles.class.php según el usuario que haya validado-->
        <div>
            {foreach from=$descripciones item=descripcion}
            <form action="AccesoVideos.class.php" method="post">
                <p>{$descripcion}</p><br /><br />
            </form>
            {/foreach}
        </div>
    </header>
    <main>
        {foreach from=$videos item=video}
        <div>
            <form action="info.php" method="post">
                <h3>{$video->titulo}</h3>
                <input type="hidden" name="codigo" value="{$video->codigo}" />
                <input type="image" src="carteles/{$video->cartel}" />
            </form>
        </div>
        {/foreach}
    </main>
    <footer class="pie">
        <div id="id"> <a href='cerrar.php' class='enlaceboton'>Cerrar Sesión</a></div>
    </footer>
</body>

</html>
