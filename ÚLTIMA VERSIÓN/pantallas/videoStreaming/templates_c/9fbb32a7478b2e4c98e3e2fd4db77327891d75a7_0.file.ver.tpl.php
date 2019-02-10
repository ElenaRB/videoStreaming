<?php
/* Smarty version 3.1.33, created on 2019-02-09 15:11:00
  from 'C:\Users\elena\Desktop\DAW 2\UwAmp\pantallas\videoStreaming\templates\ver.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5edf741a9ba9_44162900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fbb32a7478b2e4c98e3e2fd4db77327891d75a7' => 
    array (
      0 => 'C:\\Users\\elena\\Desktop\\DAW 2\\UwAmp\\pantallas\\videoStreaming\\templates\\ver.tpl',
      1 => 1549721447,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5edf741a9ba9_44162900 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8" />
</head>
<body>
    <section>
        <video width="320" height="240" controls="controls" controlsList="nodownload" preload="auto">
            <source src="video.php?ruta=<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
" />
            Your browser does not support the video tag.
        </video>
    </section>
    <footer class="pie">
        <div id="id"> <a href='cerrar.php' class='enlaceboton'>Cerrar Sesión</a></div>
    </footer>
</body>

</html>
<?php }
}
