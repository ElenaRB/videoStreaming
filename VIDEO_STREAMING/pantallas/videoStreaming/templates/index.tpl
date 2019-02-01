<!doctype html>
<html lang="es">

<head>
    <meta charset="utf8" />
    <div class="title">
        <h1>Vídeo Streaming<br />Bestflix</h1>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Montserrat');

            body {
                background-color: black;
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

        </style>
        <link rel="stylesheet" type="text/css" href="css/css.css">
        <script type="text/javascript">
            function muestraMensaje(mensaje) {
                if (mensaje != '')
                    alert(mensaje);
            }

        </script>
</head>

<body onload="muestraMensaje('{$mensaje}');">
    <header id="cabecera">
    </header>
    <footer class="pie">
        
    </footer>
</body>

</html>
