<?php
/* Smarty version 3.1.33, created on 2019-02-01 08:58:39
  from 'C:\UwAmp\pantallas\videoStreaming\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c53fc2f1ec894_63851442',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d7af6aebf3ef17c8d11ff45a31bbf8b38b11457' => 
    array (
      0 => 'C:\\UwAmp\\pantallas\\videoStreaming\\templates\\index.tpl',
      1 => 1549007821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c53fc2f1ec894_63851442 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="es">

<head>
    <meta charset="utf8" />
    <title>BESTFLIX</title>
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
    <section>
        <p> BESTFLIX</p>
    </section>
    <footer class="pie">
        <a href="aviso.php" class="boton">Aviso Legal</a>
    </footer>
</body>

</html>
<?php }
}
