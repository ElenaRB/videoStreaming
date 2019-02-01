<?php
/* Smarty version 3.1.33, created on 2019-02-01 17:50:42
  from 'C:\Users\elena\Desktop\DAW 2\UwAmp\pantallas\videoStreaming\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5478e2073485_01340450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '893f334f5b755a078e4ae4382028b21fbd7a0da5' => 
    array (
      0 => 'C:\\Users\\elena\\Desktop\\DAW 2\\UwAmp\\pantallas\\videoStreaming\\templates\\index.tpl',
      1 => 1549039838,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5478e2073485_01340450 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
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
        <?php echo '<script'; ?>
 type="text/javascript">
            function muestraMensaje(mensaje) {
                if (mensaje != '')
                    alert(mensaje);
            }

        <?php echo '</script'; ?>
>
</head>

<body onload="muestraMensaje('<?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
');">
    <header id="cabecera">
    </header>
    <footer class="pie">
        
    </footer>
</body>

</html>
<?php }
}
